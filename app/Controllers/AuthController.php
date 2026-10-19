<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class AuthController extends BaseController
{
    public function register()
    {
        return view('auth/register');
    }

    public function processRegister()
    {
        $rules = [
            'accountType'     => 'required|in_list[customer,employee]',
            'firstname'       => 'required|min_length[2]|max_length[100]',
            'lastname'        => 'required|min_length[2]|max_length[100]',
            'middlename'      => 'permit_empty|max_length[100]',
            'birthdate'       => 'required|valid_date',
            'gender'          => 'required|in_list[Female,Male,Prefer not to say]',
            'email'           => 'required|valid_email|is_unique[users.email]',
            'number'          => 'required|exact_length[11]|numeric',
            'address'         => 'required|min_length[5]',
            'department'      => 'permit_empty',
            'username'        => 'required|min_length[4]|max_length[50]|is_unique[users.username]',
            'password'        => 'required|min_length[8]',
            'confirmPassword' => 'required|matches[password]',
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $userModel = new UserModel();

        $accountType = $this->request->getPost('accountType');

        // Set department only if the user is an employee; otherwise leave null
        $department = ($accountType === 'employee') 
            ? $this->request->getPost('department') 
            : null;

        $userData = [
            'account_type'  => $accountType,
            'first_name'    => $this->request->getPost('firstname'),
            'last_name'     => $this->request->getPost('lastname'),
            'middle_name'   => $this->request->getPost('middlename'),
            'birthdate'     => $this->request->getPost('birthdate'),
            'gender'        => $this->request->getPost('gender'),
            'email'         => $this->request->getPost('email'),
            'phone_number'  => $this->request->getPost('number'),
            'address'       => $this->request->getPost('address'),
            'department'    => $department,
            'username'      => $this->request->getPost('username'),
            'password_hash' => password_hash((string) $this->request->getPost('password'), PASSWORD_BCRYPT),
        ];

        $userModel->insert($userData);

        return redirect()->to(base_url('login'))->with('success', 'Registration successful! You may now sign in.');
    }

    public function login()
    {
        return view('auth/login');
    }

    public function processLogin()
    {
        $rules = [
            'username' => 'required',
            'password' => 'required',
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $userModel = new UserModel();
        $username  = $this->request->getPost('username');
        $password  = $this->request->getPost('password');

        // allow logging in via username or email
        $user = $userModel->where('username', $username)
                          ->orWhere('email', $username)
                          ->first();

        if (! $user || ! password_verify((string) $password, $user['password_hash'])) {
            return redirect()->back()->withInput()->with('error', 'Invalid username or password.');
        }

        // store user in session
        session()->set([
            'isLoggedIn'   => true,
            'userId'       => $user['id'],
            'username'     => $user['username'],
            'firstName'    => $user['first_name'],
            'lastName'     => $user['last_name'],
            'email'        => $user['email'],
            'accountType'  => $user['account_type'],
            'department'   => $user['department'],
            'address'      => $user['address'],
        ]);

        return redirect()->to(base_url('profile'))->with('success', 'Welcome back!');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('login'))->with('success', 'Logged out successfully.');
    }

    public function products()
    {
        return view('products');
    }

    public function services()
    {
        return view('services');
    }

    public function profile()
    {
        if (! session()->get('isLoggedIn')) {
            return redirect()->to(base_url('login'))->with('error', 'Please log in to view your profile.');
        }

        return view('profile');
    }
}