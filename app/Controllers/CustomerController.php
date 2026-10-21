<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class CustomerController extends BaseController
{
    public function index()
    {
        // Landing Page
        return view('home');
    }

    public function schedule()
    {
        $db = \Config\Database::connect();
        $userId = session()->get('userId');
        $bookings = $db->table('bookings')->where('customer_id', $userId)->get()->getResultArray();

        return view('customer/schedule', ['bookings' => $bookings]);
    }

    public function book()
    {
        return view('customer/book');
    }

    public function processBooking()
    {
        $db = \Config\Database::connect();
        $db->table('bookings')->insert([
            'customer_id'  => session()->get('userId'),
            'service'      => $this->request->getPost('service'),
            'booking_date' => $this->request->getPost('serviceDate'),
            'booking_time' => $this->request->getPost('serviceTime'),
            'address'      => $this->request->getPost('address'),
            'notes'        => $this->request->getPost('notes'),
            'status'       => 'Pending',
            'created_at'   => date('Y-m-d H:i:s')
        ]);

        return redirect()->to(base_url('customer/schedule'))->with('success', 'Booking submitted successfully!');
    }

    public function history()
    {
        return view('customer/history');
    }

    public function support()
    {
        return view('customer/support');
    }

    public function notifications()
    {
        return view('customer/notifications');
    }
}