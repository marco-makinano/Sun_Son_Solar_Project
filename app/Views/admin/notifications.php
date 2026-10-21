<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notification Control - Sun Son Solar</title>
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
        <a href="<?= base_url('admin/notifications') ?>" class="active">Notifications</a>
        <a href="<?= base_url('admin/settings') ?>">Settings</a>
        <a href="<?= base_url('logout') ?>" class="logout-btn">Logout</a>
    </div>

    <div class="main">
        <h1 class="Head">SUN SON SOLAR</h1>
        <p class="tagline">Panels, inverters, batteries and full-service solar installation</p>

        <div class="page-wrap">
            <h2>Notification Control</h2>
            <p class="page-sub">Decide which alerts go out to customers and employees.</p>

            <div class="panel-row">
                <div class="panel">
                    <h3>Send an Alert</h3>
                    <div id="sendMessage"></div>
                    <form id="sendForm">
                        <div class="input">
                            <label for="alertType">Type</label>
                            <select id="alertType" name="alertType" required>
                                <option>Reminder</option>
                                <option>Promotion</option>
                                <option>System update</option>
                                <option>Schedule change</option>
                            </select>
                        </div>
                        <div class="input">
                            <label for="audience">Send to</label>
                            <select id="audience" name="audience" required>
                                <option>All customers</option>
                                <option>Customers with upcoming services</option>
                                <option>All employees</option>
                            </select>
                        </div>
                        <div class="input">
                            <label for="alertTitle">Title</label>
                            <input type="text" id="alertTitle" name="alertTitle" placeholder="Short title" required>
                        </div>
                        <div class="input">
                            <label for="alertText">Message</label>
                            <textarea id="alertText" name="alertText" rows="4" placeholder="Write your message" required></textarea>
                        </div>
                        <button type="submit" class="submit-btn">Send Alert</button>
                    </form>
                </div>

                <div class="panel">
                    <h3>Automatic Alerts</h3>
                    <div class="msg" id="autoMessage"></div>
                    <form data-success="Alert settings saved." data-msg="autoMessage" data-reset="no">
                        <label class="check-row"><input type="checkbox" checked> Remind customers one day before a service</label>
                        <label class="check-row"><input type="checkbox" checked> Tell customers when their schedule changes</label>
                        <label class="check-row"><input type="checkbox"> Send promotions and offers</label>
                        <label class="check-row"><input type="checkbox" checked> Send system updates</label>
                        <button type="submit" class="submit-btn">Save Settings</button>
                    </form>
                </div>
            </div>

            <div class="panel">
                <h3>Recently Sent</h3>
                <div class="table-wrap">
                    <table class="data">
                        <thead><tr><th>Date</th><th>Type</th><th>Sent to</th><th>Title</th></tr></thead>
                        <tbody id="sentRows"></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="<?= base_url('js/app.js') ?>"></script>
</body>
</html>