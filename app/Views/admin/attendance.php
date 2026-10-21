<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance - Sun Son Solar</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/dashboard.css') ?>">
</head>
<body>
    <div class="sidebar">
        <div class="brand">SUN SON SOLAR</div>
        <div class="role-label">Admin Portal</div>
        <a href="<?= base_url('admin/dashboard') ?>">Dashboard</a>
        <a href="<?= base_url('admin/schedule') ?>">Schedule</a>
        <a href="<?= base_url('admin/quotes') ?>">Quote Requests</a>
        <a href="<?= base_url('admin/users') ?>">Users</a>
        <a href="<?= base_url('admin/attendance') ?>" class="active">Attendance</a>
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
            <h2>Attendance</h2>
            <p class="page-sub">Technician check-ins: who arrived, when, and where.</p>

            <div class="panel">
                <div class="table-wrap">
                    <table class="data">
                        <thead><tr><th>Date</th><th>Time</th><th>Technician</th><th>Coordinates</th><th>Map</th></tr></thead>
                        <tbody id="checkinRows"></tbody>
                    </table>
                </div>
                <p class="hint">Check in from the Technician pages and it will show up here. Includes sample data.</p>
            </div>
        </div>
    </div>
    <script src="<?= base_url('js/app.js') ?>"></script>
</body>
</html>