<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Jobs - Sun Son Solar</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/dashboard.css') ?>">
</head>
<body>
    <div class="sidebar">
        <div class="brand">SUN SON SOLAR</div>
        <div class="role-label">Technician Portal</div>
        <a href="<?= base_url('technician/checkin') ?>">Check In</a>
        <a href="<?= base_url('technician/jobs') ?>" class="active">My Jobs</a>
        <a href="<?= base_url('technician/announcements') ?>">Announcements</a>
        <a href="<?= base_url('technician/report-problem') ?>">Report a Problem</a>
        <a href="<?= base_url('logout') ?>" class="logout-btn">Logout</a>
    </div>

    <div class="main">
        <h1 class="Head">SUN SON SOLAR</h1>
        <p class="tagline">Panels, inverters, batteries and full-service solar installation</p>

        <div class="page-wrap">
            <h2>My Jobs</h2>
            <p class="page-sub">Jobs assigned to you. Only the details you need are shown.</p>

            <div class="card-grid">
                <div class="card">
                    <div class="tag">Installation</div>
                    <h3>Ana Lim</h3>
                    <p>&#128205; Sample Street, Pasig City</p>
                    <p>&#128197; Tomorrow, 8:00 AM</p>
                </div>
                <div class="card">
                    <div class="tag">Maintenance</div>
                    <h3>Maria Reyes</h3>
                    <p>&#128205; Sample Avenue, Pasig City</p>
                    <p>&#128197; In 3 days, 9:00 AM</p>
                </div>
                <div class="card">
                    <div class="tag">Repair</div>
                    <h3>Pedro Cruz</h3>
                    <p>&#128205; Sample Road, Pasig City</p>
                    <p>&#128197; In 5 days, 2:00 PM</p>
                </div>
            </div>
            <p class="hint">Sample jobs are shown for layout. For privacy, technicians only see the customer's name, address and service type.</p>
        </div>
    </div>
    <script src="<?= base_url('js/app.js') ?>"></script>
</body>
</html>