<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedule Overview - Sun Son Solar</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/dashboard.css') ?>">
</head>
<body>
    <div class="sidebar">
        <div class="brand">SUN SON SOLAR</div>
        <div class="role-label">Admin Portal</div>
        <a href="<?= base_url('admin/dashboard') ?>">Dashboard</a>
        <a href="<?= base_url('admin/schedule') ?>" class="active">Schedule</a>
        <a href="<?= base_url('admin/quotes') ?>">Quote Requests</a>
        <a href="<?= base_url('admin/users') ?>">Users</a>
        <a href="<?= base_url('admin/attendance') ?>">Attendance</a>
        <a href="<?= base_url('admin/problems') ?>">Problem Reports</a>
        <a href="<?= base_url('admin/reports') ?>">Reports</a>
        <a href="<?= base_url('admin/notifications') ?>">Notifications</a>
        <a href="<?= base_url('admin/settings') ?>">Settings</a>
        <a href="<?= base_url('logout') ?>" class="logout-btn">Logout</a>
    </div>

    <div class="main">
        <h1 class="Head">SUN SON SOLAR</h1>
        <p class="tagline">Panels, inverters, batteries and full-service solar installation</p>

        <div class="page-wrap">
            <h2>Schedule Overview</h2>
            <p class="page-sub">All customer bookings in one place. Approve, decline, assign technicians and adjust dates.</p>

            <div class="panel">
                <div class="toolbar"><h3 id="monthName"></h3></div>
                <div class="calendar" id="calendar"></div>
            </div>

            <div class="panel">
                <h3>Booking Requests</h3>
                <div class="table-wrap">
                    <table class="data">
                        <thead>
                            <tr><th>Customer</th><th>Service</th><th>Date</th><th>Time</th><th>Technician</th><th>Status</th><th>Actions</th></tr>
                        </thead>
                        <tbody id="requestRows"></tbody>
                    </table>
                </div>
                <p class="hint">Sample bookings are shown for layout. Changes are not saved yet.</p>
            </div>
        </div>
    </div>
    <script src="<?= base_url('js/app.js') ?>"></script>
</body>
</html>