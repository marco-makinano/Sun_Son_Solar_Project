<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateFullSystemTables extends Migration
{
    public function up()
    {
        // 1. Quotes Table (Homepage Form)
        $this->forge->addField([
            'id'         => ['type' => 'INT', 'unsigned' => true, 'auto_increment' => true],
            'fullname'   => ['type' => 'VARCHAR', 'constraint' => '150'],
            'phone'      => ['type' => 'VARCHAR', 'constraint' => '20'],
            'email'      => ['type' => 'VARCHAR', 'constraint' => '150'],
            'interest'   => ['type' => 'VARCHAR', 'constraint' => '100'],
            'message'    => ['type' => 'TEXT', 'null' => true],
            'status'     => ['type' => 'ENUM', 'constraint' => ['New', 'Contacted', 'Converted', 'Closed'], 'default' => 'New'],
            'created_at' => ['type' => 'DATETIME', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('quotes', true);

        // 2. Bookings Table (Customer Schedule & Admin Approval)
        $this->forge->addField([
            'id'            => ['type' => 'INT', 'unsigned' => true, 'auto_increment' => true],
            'customer_id'   => ['type' => 'INT', 'unsigned' => true],
            'service'       => ['type' => 'VARCHAR', 'constraint' => '100'],
            'booking_date'  => ['type' => 'DATE'],
            'booking_time'  => ['type' => 'VARCHAR', 'constraint' => '20'],
            'address'       => ['type' => 'TEXT'],
            'notes'         => ['type' => 'TEXT', 'null' => true],
            'amount'        => ['type' => 'DECIMAL', 'constraint' => '10,2', 'default' => 0.00],
            'technician_id' => ['type' => 'INT', 'unsigned' => true, 'null' => true],
            'status'        => ['type' => 'ENUM', 'constraint' => ['Pending', 'Approved', 'Completed', 'Declined', 'Cancelled'], 'default' => 'Pending'],
            'created_at'    => ['type' => 'DATETIME', 'null' => true],
            'updated_at'    => ['type' => 'DATETIME', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('bookings', true);

        // 3. Technician Check-ins Table (GPS & Attendance)
        $this->forge->addField([
            'id'            => ['type' => 'INT', 'unsigned' => true, 'auto_increment' => true],
            'technician_id' => ['type' => 'INT', 'unsigned' => true],
            'checkin_date'  => ['type' => 'DATE'],
            'checkin_time'  => ['type' => 'DATETIME'],
            'latitude'      => ['type' => 'VARCHAR', 'constraint' => '50', 'null' => true],
            'longitude'     => ['type' => 'VARCHAR', 'constraint' => '50', 'null' => true],
            'status'        => ['type' => 'VARCHAR', 'constraint' => '50', 'default' => 'GPS recorded'],
            'created_at'    => ['type' => 'DATETIME', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('checkins', true);

        // 4. Problem Reports Table
        $this->forge->addField([
            'id'            => ['type' => 'INT', 'unsigned' => true, 'auto_increment' => true],
            'technician_id' => ['type' => 'INT', 'unsigned' => true],
            'job_id'        => ['type' => 'VARCHAR', 'constraint' => '50', 'null' => true],
            'problem_type'  => ['type' => 'VARCHAR', 'constraint' => '100'],
            'urgency'       => ['type' => 'ENUM', 'constraint' => ['Low', 'Medium', 'High'], 'default' => 'Medium'],
            'description'   => ['type' => 'TEXT'],
            'status'        => ['type' => 'ENUM', 'constraint' => ['Open', 'In Progress', 'Resolved'], 'default' => 'Open'],
            'created_at'    => ['type' => 'DATETIME', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('problems', true);

        // 5. System Notifications Table
        $this->forge->addField([
            'id'         => ['type' => 'INT', 'unsigned' => true, 'auto_increment' => true],
            'user_id'    => ['type' => 'INT', 'unsigned' => true, 'null' => true], // null kung para sa lahat
            'audience'   => ['type' => 'VARCHAR', 'constraint' => '50', 'default' => 'all'],
            'title'      => ['type' => 'VARCHAR', 'constraint' => '255'],
            'message'    => ['type' => 'TEXT'],
            'type'       => ['type' => 'VARCHAR', 'constraint' => '50', 'default' => 'System update'],
            'is_read'    => ['type' => 'TINYINT', 'constraint' => 1, 'default' => 0],
            'created_at' => ['type' => 'DATETIME', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('notifications', true);
    }

    public function down()
    {
        $this->forge->dropTable('notifications', true);
        $this->forge->dropTable('problems', true);
        $this->forge->dropTable('checkins', true);
        $this->forge->dropTable('bookings', true);
        $this->forge->dropTable('quotes', true);
    }
}