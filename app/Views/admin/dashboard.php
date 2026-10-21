<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Sun Son Solar</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/dashboard.css') ?>">
</head>
<body>
    <div class="sidebar">
        <div class="brand">SUN SON SOLAR</div>
        <div class="role-label">Admin Portal</div>
        <a href="<?= base_url('admin/dashboard') ?>" class="active">Dashboard</a>
        <a href="<?= base_url('admin/schedule') ?>">Schedule</a>
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
            <h2>Admin Dashboard</h2>
            <p class="page-sub">What needs your attention today.</p>

            <div class="stat-cards">
                <div class="stat-card"><strong id="statPending"><?= esc($pendingCount ?? 0) ?></strong><span>Booking requests to review</span></div>
                <div class="stat-card"><strong id="statQuotes"><?= esc($quoteCount ?? 0) ?></strong><span>New quote requests</span></div>
                <div class="stat-card"><strong id="statProblems"><?= esc($problemCount ?? 0) ?></strong><span>Open problem reports</span></div>
                <div class="stat-card"><strong id="statCheckins">0</strong><span>Technicians checked in today</span></div>
            </div>

            <div class="panel-row">
                <div class="panel">
                    <div class="toolbar"><h3>Waiting for Approval</h3><a href="<?= base_url('admin/schedule') ?>" class="btn-sm ghost">Open schedule</a></div>
                    <div class="table-wrap">
                        <table class="data">
                            <thead><tr><th>Customer</th><th>Service</th><th>Date</th></tr></thead>
                            <tbody id="pendingRows">
                                <?php if (!empty($recentPending)): ?>
                                    <?php foreach ($recentPending as $row): ?>
                                        <tr>
                                            <td>User #<?= esc($row['customer_id']) ?></td>
                                            <td><?= esc($row['service']) ?></td>
                                            <td><?= esc($row['booking_date']) ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <tr><td colspan="3" class="empty-state">No pending bookings.</td></tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="panel">
                    <div class="toolbar"><h3>Open Problems</h3><a href="<?= base_url('admin/problems') ?>" class="btn-sm ghost">View all</a></div>
                    <div class="table-wrap">
                        <table class="data">
                            <thead><tr><th>From</th><th>Type</th><th>Urgency</th></tr></thead>
                            <tbody id="problemRows"></tbody>
                        </table>
                    </div>
                </div>
            </div>
            <p class="hint">Includes sample data for layout.</p>
        </div>
    </div>
    <script src="<?= base_url('js/app.js') ?>"></script>
</body>
</html>