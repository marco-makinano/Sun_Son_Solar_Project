<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support - Sun Son Solar</title>
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
        <a href="<?= base_url('customer/history') ?>">History</a>
        <a href="<?= base_url('customer/support') ?>" class="active">Support</a>
        <a href="<?= base_url('products') ?>">Products</a>
        <a href="<?= base_url('services') ?>">Services</a>
        <a href="<?= base_url('profile') ?>">Profile</a>
        <a href="<?= base_url('logout') ?>" class="logout-btn">Logout</a>
    </div>

    <div class="main">
        <h1 class="Head">SUN SON SOLAR</h1>
        <p class="tagline">Panels, inverters, batteries and full-service solar installation</p>

        <div class="page-wrap">
            <h2>Support</h2>
            <p class="page-sub">Chat with us or send a ticket. We are here to help.</p>

            <div class="panel-row">
                <div class="panel">
                    <h3>Chat with Us</h3>
                    <div class="chat-box" id="chatBox"></div>
                    <form class="chat-form" id="chatForm">
                        <input type="text" id="chatInput" placeholder="Type your message...">
                        <button type="submit" class="btn-sm">Send</button>
                    </form>
                </div>

                <div class="panel">
                    <h3>Send a Support Ticket</h3>
                    <div class="msg" id="ticketMessage"></div>
                    <form data-success="Ticket sent! We will reply as soon as we can." data-msg="ticketMessage">
                        <div class="input">
                            <label for="topic">Topic</label>
                            <select id="topic" required>
                                <option value="" disabled selected>Choose a topic</option>
                                <option>My schedule</option>
                                <option>Payment or receipt</option>
                                <option>My account</option>
                                <option>Something else</option>
                            </select>
                        </div>
                        <div class="input">
                            <label for="ticketSubject">Subject</label>
                            <input type="text" id="ticketSubject" placeholder="Short summary" required>
                        </div>
                        <div class="input">
                            <label for="ticketText">Message</label>
                            <textarea id="ticketText" rows="4" placeholder="Tell us what happened" required></textarea>
                        </div>
                        <button type="submit" class="submit-btn">Send Ticket</button>
                    </form>
                </div>
            </div>

            <div class="panel">
                <h3>My Tickets</h3>
                <div class="table-wrap">
                    <table class="data">
                        <thead><tr><th>Ticket</th><th>Subject</th><th>Date</th><th>Status</th></tr></thead>
                        <tbody>
                            <tr><td>#1001</td><td>Question about my receipt</td><td>Sep 24, 2026</td><td><span class="badge resolved">Resolved</span></td></tr>
                        </tbody>
                    </table>
                </div>
                <p class="hint">Prefer to call? Reach us at 0929 123 0983.</p>
            </div>
        </div>
    </div>
    <script src="<?= base_url('js/app.js') ?>"></script>
</body>
</html>