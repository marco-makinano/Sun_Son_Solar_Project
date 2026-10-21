<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quote Requests - Sun Son Solar</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/dashboard.css') ?>">
</head>
<body>
    <div class="sidebar">
        <div class="brand">SUN SON SOLAR</div>
        <div class="role-label">Admin Portal</div>
        <a href="<?= base_url('admin/dashboard') ?>">Dashboard</a>
        <a href="<?= base_url('admin/schedule') ?>">Schedule</a>
        <a href="<?= base_url('admin/quotes') ?>" class="active">Quote Requests</a>
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
            <h2>Quote Requests</h2>
            <p class="page-sub">Requests sent from the homepage "Get in Touch" form.</p>

            <div class="panel">
                <div class="table-wrap">
                    <table class="data">
                        <thead><tr><th>Date</th><th>Name</th><th>Contact</th><th>Interested in</th><th>Message</th><th>Status</th></tr></thead>
                        <tbody id="quoteRows"></tbody>
                    </table>
                </div>
                <p class="hint">Try sending a request from the homepage. It will show up here.</p>
            </div>
        </div>
    </div>
    <script src="<?= base_url('js/app.js') ?>"></script>
</body>
</html>