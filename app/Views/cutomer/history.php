<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History - Sun Son Solar</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/dashboard.css') ?>">
</head>
<body>
    <div class="sidebar">
        <div class="brand">SUN SON SOLAR</div>
        <div class="role-label">Customer Portal</div>
        <a href="<?= base_url('customer/schedule') ?>">Schedule</a>
        <a href="<?= base_url('customer/book') ?>">Book a Service</a>
        <a href="<?= base_url('customer/notifications') ?>">Notifications</a>
        <a href="<?= base_url('customer/history') ?>" class="active">History</a>
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
            <h2>History</h2>
            <p class="page-sub">Your completed services, payments and receipts in one place.</p>

            <div class="stat-cards">
                <div class="stat-card"><strong>3</strong><span>Services completed</span></div>
                <div class="stat-card"><strong>&#8369;188,500</strong><span>Total paid</span></div>
            </div>

            <div class="tabs">
                <input type="radio" name="tab" id="tab-services" checked>
                <input type="radio" name="tab" id="tab-payments">

                <div class="tab-labels">
                    <label for="tab-services">Completed Services</label>
                    <label for="tab-payments">Payments &amp; Receipts</label>
                </div>

                <div class="panel tab-panel panel-services">
                    <div class="table-wrap">
                        <table class="data">
                            <thead><tr><th>Date</th><th>Service</th><th>Amount</th><th>Status</th></tr></thead>
                            <tbody>
                                <tr><td>Mar 4, 2026</td><td>Consultation</td><td>Free</td><td><span class="badge completed">Completed</span></td></tr>
                                <tr><td>Apr 18, 2026</td><td>Installation</td><td>&#8369;185,000</td><td><span class="badge completed">Completed</span></td></tr>
                                <tr><td>Sep 22, 2026</td><td>Maintenance</td><td>&#8369;3,500</td><td><span class="badge completed">Completed</span></td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="panel tab-panel panel-payments">
                    <div class="table-wrap">
                        <table class="data">
                            <thead><tr><th>Date</th><th>Reference</th><th>For</th><th>Amount</th><th>Status</th><th>Receipt</th></tr></thead>
                            <tbody>
                                <tr><td>Apr 18, 2026</td><td>PAY-0001</td><td>Installation</td><td>&#8369;185,000</td><td><span class="badge paid">Paid</span></td><td><button class="btn-sm ghost">Download</button></td></tr>
                                <tr><td>Sep 22, 2026</td><td>PAY-0002</td><td>Maintenance</td><td>&#8369;3,500</td><td><span class="badge paid">Paid</span></td><td><button class="btn-sm ghost">Download</button></td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <p class="hint">Sample history is shown for layout.</p>
        </div>
    </div>
    <script src="<?= base_url('js/app.js') ?>"></script>
</body>
</html>