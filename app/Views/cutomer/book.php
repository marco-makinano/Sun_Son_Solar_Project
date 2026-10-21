<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book a Service - Sun Son Solar</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/dashboard.css') ?>">
</head>
<body>
    <div class="sidebar">
        <div class="brand">SUN SON SOLAR</div>
        <div class="role-label">Customer Portal</div>
        <a href="<?= base_url('customer/schedule') ?>">Schedule</a>
        <a href="<?= base_url('customer/book') ?>" class="active">Book a Service</a>
        <a href="<?= base_url('customer/notifications') ?>">Notifications</a>
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
            <h2>Book a Service</h2>
            <p class="page-sub">Choose a service and a date. Our team will confirm your schedule.</p>

            <div class="panel">
                <div id="bookMessage"></div>
                <form id="bookForm" action="<?= base_url('customer/book') ?>" method="post">
                    <?= csrf_field() ?>
                    <div class="profile-row">
                        <div class="input">
                            <label for="service">Service</label>
                            <select id="service" name="service" required>
                                <option value="" disabled selected>Choose a service</option>
                                <option>Consultation</option>
                                <option>Installation</option>
                                <option>Maintenance</option>
                                <option>Repair</option>
                                <option>Monitoring</option>
                            </select>
                        </div>
                        <div class="input">
                            <label for="serviceDate">Preferred date</label>
                            <input type="date" id="serviceDate" name="serviceDate" required>
                        </div>
                    </div>
                    <div class="profile-row">
                        <div class="input">
                            <label for="serviceTime">Preferred time</label>
                            <select id="serviceTime" name="serviceTime" required>
                                <option>8:00 AM</option>
                                <option>9:00 AM</option>
                                <option>10:00 AM</option>
                                <option>11:00 AM</option>
                                <option>1:00 PM</option>
                                <option>2:00 PM</option>
                                <option>3:00 PM</option>
                                <option>4:00 PM</option>
                            </select>
                        </div>
                        <div class="input">
                            <label for="address">Service address</label>
                            <input type="text" id="address" name="address" value="Pasig City, Metro Manila" required>
                        </div>
                    </div>
                    <div class="input">
                        <label for="notes">Notes (optional)</label>
                        <textarea id="notes" name="notes" rows="3" placeholder="Anything our team should know?"></textarea>
                    </div>
                    <button type="submit" class="submit-btn">Request Booking</button>
                </form>
            </div>
        </div>
    </div>
    <script src="<?= base_url('js/app.js') ?>"></script>
</body>
</html>