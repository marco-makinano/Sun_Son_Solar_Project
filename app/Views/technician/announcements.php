<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Announcements - Sun Son Solar</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/dashboard.css') ?>">
</head>
<body>
    <div class="sidebar">
        <div class="brand">SUN SON SOLAR</div>
        <div class="role-label">Technician Portal</div>
        <a href="<?= base_url('technician/checkin') ?>">Check In</a>
        <a href="<?= base_url('technician/jobs') ?>">My Jobs</a>
        <a href="<?= base_url('technician/announcements') ?>" class="active">Announcements</a>
        <a href="<?= base_url('technician/report-problem') ?>">Report a Problem</a>
        <a href="<?= base_url('logout') ?>" class="logout-btn">Logout</a>
    </div>

    <div class="main">
        <h1 class="Head">SUN SON SOLAR</h1>
        <p class="tagline">Panels, inverters, batteries and full-service solar installation</p>

        <div class="page-wrap">
            <h2>Announcements</h2>
            <p class="page-sub">Updates from admins and HR: reminders, safety guidelines and urgent notices.</p>
            <div class="notice urgent">
                <div class="notice-body">
                    <h4>Heavy rain advisory <span class="badge urgent">Urgent</span></h4>
                    <p>Please do not start roof work during heavy rain. Contact dispatch to reschedule.</p>
                    <small>Today, 7:30 AM</small>
                </div>
            </div>
            <div class="notice safety">
                <div class="notice-body">
                    <h4>Wear your safety gear <span class="badge safety">Safety</span></h4>
                    <p>Harness and helmet are required for every roof job.</p>
                    <small>Yesterday</small>
                </div>
            </div>
            <div class="notice reminder">
                <div class="notice-body">
                    <h4>Check in on arrival <span class="badge reminder">Reminder</span></h4>
                    <p>Remember to tap the Check In button when you reach the job site.</p>
                    <small>3 days ago</small>
                </div>
            </div>
            <div class="notice update">
                <div class="notice-body">
                    <h4>Submit your requests early <span class="badge update">HR</span></h4>
                    <p>Please send leave requests to HR at least a week ahead.</p>
                    <small>1 week ago</small>
                </div>
            </div>
            <p class="hint">Sample announcements are shown for layout.</p>
        </div>
    </div>
    <script src="<?= base_url('js/app.js') ?>"></script>
</body>
</html>