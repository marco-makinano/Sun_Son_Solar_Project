<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings - Sun Son Solar</title>
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
        <a href="<?= base_url('admin/attendance') ?>">Attendance</a>
        <a href="<?= base_url('admin/problems') ?>">Problem Reports</a>
        <a href="<?= base_url('admin/reports') ?>">Reports</a>
        <a href="<?= base_url('admin/notifications') ?>">Notifications</a>
        <a href="<?= base_url('admin/settings') ?>" class="active">Settings</a>
        <a href="<?= base_url('logout') ?>" class="logout-btn">Logout</a>
    </div>

    <div class="main">
        <h1 class="Head">SUN SON SOLAR</h1>
        <p class="tagline">Panels, inverters, batteries and full-service solar installation</p>

        <div class="page-wrap">
            <h2>Settings</h2>
            <p class="page-sub">Set up services, prices and availability without needing a developer.</p>

            <div class="panel">
                <h3>Service Categories &amp; Pricing</h3>
                <div class="msg" id="serviceMessage"></div>
                <form data-success="Services and prices saved." data-msg="serviceMessage" data-reset="no">
                    <div class="table-wrap">
                        <table class="data">
                            <thead><tr><th>Service</th><th>Starting price (&#8369;)</th><th>Status</th><th>Action</th></tr></thead>
                            <tbody id="serviceRows"></tbody>
                        </table>
                    </div>
                    <p class="hint">Leave the price empty to show "Price on request".</p>

                    <div class="profile-row" style="margin-top:16px">
                        <div class="input"><label for="newServiceName">New service</label><input type="text" id="newServiceName" placeholder="Service name"></div>
                        <div class="input"><label for="newServicePrice">Starting price (&#8369;)</label><input type="number" id="newServicePrice" min="0" placeholder="Optional"></div>
                    </div>
                    <button type="button" class="btn-sm ghost">+ Add service</button>
                    <button type="submit" class="btn-sm">Save</button>
                </form>
            </div>

            <div class="panel">
                <h3>Availability</h3>
                <div class="msg" id="availabilityMessage"></div>
                <form data-success="Availability saved." data-msg="availabilityMessage" data-reset="no">
                    <div class="days-row">
                        <label class="check-row"><input type="checkbox" checked> Mon</label>
                        <label class="check-row"><input type="checkbox" checked> Tue</label>
                        <label class="check-row"><input type="checkbox" checked> Wed</label>
                        <label class="check-row"><input type="checkbox" checked> Thu</label>
                        <label class="check-row"><input type="checkbox" checked> Fri</label>
                        <label class="check-row"><input type="checkbox" checked> Sat</label>
                        <label class="check-row"><input type="checkbox"> Sun</label>
                    </div>
                    <div class="profile-row">
                        <div class="input"><label for="openTime">Opens</label><input type="time" id="openTime" value="08:00"></div>
                        <div class="input"><label for="closeTime">Closes</label><input type="time" id="closeTime" value="17:00"></div>
                    </div>
                    <div class="input">
                        <label for="maxPerDay">Maximum bookings per day</label>
                        <input type="number" id="maxPerDay" min="1" value="8">
                    </div>
                    <button type="submit" class="submit-btn">Save</button>
                </form>
            </div>
        </div>
    </div>
    <script src="<?= base_url('js/app.js') ?>"></script>
</body>
</html>