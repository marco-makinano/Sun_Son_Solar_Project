<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AdminController extends BaseController
{
    public function dashboard()
    {
        $db = \Config\Database::connect();
        $pendingBookings = $db->table('bookings')->where('status', 'Pending')->countAllResults();
        $newQuotes = $db->table('quotes')->where('status', 'New')->countAllResults();
        $openProblems = $db->table('problems')->where('status', 'Open')->countAllResults();

        $data = [
            'pendingCount'  => $pendingBookings,
            'quoteCount'    => $newQuotes,
            'problemCount'  => $openProblems,
            'recentPending' => $db->table('bookings')->where('status', 'Pending')->get(5)->getResultArray(),
        ];

        return view('admin/dashboard', $data);
    }

    public function schedule()
    {
        $db = \Config\Database::connect();
        $bookings = $db->table('bookings')->get()->getResultArray();
        $technicians = $db->table('users')->where('account_type', 'employee')->get()->getResultArray();

        return view('admin/schedule', ['bookings' => $bookings, 'technicians' => $technicians]);
    }

    public function quotes()
    {
        $db = \Config\Database::connect();
        $quotes = $db->table('quotes')->orderBy('id', 'DESC')->get()->getResultArray();
        return view('admin/quotes', ['quotes' => $quotes]);
    }

    public function users()
    {
        $db = \Config\Database::connect();
        $users = $db->table('users')->get()->getResultArray();
        return view('admin/users', ['users' => $users]);
    }

    public function attendance()
    {
        $db = \Config\Database::connect();
        $checkins = $db->table('checkins')
            ->select('checkins.*, users.first_name, users.last_name')
            ->join('users', 'users.id = checkins.technician_id')
            ->orderBy('checkins.id', 'DESC')
            ->get()->getResultArray();

        return view('admin/attendance', ['checkins' => $checkins]);
    }

    public function problems()
    {
        $db = \Config\Database::connect();
        $problems = $db->table('problems')->orderBy('id', 'DESC')->get()->getResultArray();
        return view('admin/problems', ['problems' => $problems]);
    }
}