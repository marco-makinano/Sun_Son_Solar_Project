<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class TechnicianController extends BaseController
{
    public function myJobs()
    {
        $db = \Config\Database::connect();
        $techId = session()->get('userId');
        $jobs = $db->table('bookings')->where('technician_id', $techId)->get()->getResultArray();

        return view('technician/my_jobs', ['jobs' => $jobs]);
    }

    public function checkin()
    {
        $db = \Config\Database::connect();
        $techId = session()->get('userId');
        $checkins = $db->table('checkins')->where('technician_id', $techId)->orderBy('id', 'DESC')->get()->getResultArray();

        return view('technician/checkin', ['checkins' => $checkins]);
    }

    public function recordCheckin()
    {
        $db = \Config\Database::connect();
        $db->table('checkins')->insert([
            'technician_id' => session()->get('userId'),
            'checkin_date'  => date('Y-m-d'),
            'checkin_time'  => date('Y-m-d H:i:s'),
            'latitude'      => $this->request->getPost('latitude'),
            'longitude'     => $this->request->getPost('longitude'),
            'created_at'    => date('Y-m-d H:i:s')
        ]);

        return $this->response->setJSON(['status' => 'success', 'message' => 'GPS Check-in recorded!']);
    }

    public function reportProblem()
    {
        return view('technician/report_problem');
    }

    public function announcements()
    {
        return view('technician/announcements');
    }
}