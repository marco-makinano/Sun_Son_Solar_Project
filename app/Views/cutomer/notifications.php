<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifications - Sun Son Solar</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/dashboard.css') ?>">
</head>
<body>
    <div class="sidebar">
        <div class="brand">SUN SON SOLAR</div>
        <div class="role-label">Customer Portal</div>
        <a href="<?= base_url('customer/schedule') ?>">Schedule</a>
        <a href="<?= base_url('customer/book') ?>">Book a Service</a>
        <a href="<?= base_url('customer/notifications') ?>" class="active">Notifications</a>
        <a href="<?= base_url('customer/history') ?>">History</a>
        <a href="<?= base_url('customer/support') ?>">Support</a>
        <a href="<?= base_url('products') ?>">Products</a>
        <a href="<?= base_url('services') ?>">Services</a>
        <a href="<?= base_url('profile') ?>">Profile</a>
        <a href="<?= base_url('logout') ?>" class="logout-btn">Logout</a>
    </div>

    <div class="main">
        <h1 class="Head">SUN SON SOLAR</h1>
        <p class="tagline">Panels, inverters, batteries and full-service solar installation</p>

        <div class="page-wrap">
            <h2>Notifications</h2>
            <p class="page-sub">Reminders, schedule updates and offers from Sun Son Solar.</p>

            <div class="toolbar">
                <h3><span id="unreadCount">0</span> unread</h3>
                <button class="btn-sm ghost" onclick="markAllRead()">Mark all as read</button>
            </div>
            <div id="notificationList"></div>
            <p class="hint">Sample notifications are shown for layout.</p>
        </div>
    </div>
    <script src="<?= base_url('js/app.js') ?>"></script>
</body>
</html>