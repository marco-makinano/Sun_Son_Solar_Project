<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management - Sun Son Solar</title>
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
        <a href="<?= base_url('admin/users') ?>" class="active">Users</a>
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
            <h2>User Management</h2>
            <p class="page-sub">Add employees, and view, edit or deactivate accounts. Customers sign up on their own.</p>

            <div class="panel">
                <div class="toolbar">
                    <h3>All Users</h3>
                    <select id="userFilter">
                        <option>All</option>
                        <option>Employees</option>
                        <option>Customers</option>
                        <option>Inactive</option>
                    </select>
                </div>
                <div class="table-wrap">
                    <table class="data">
                        <thead><tr><th>ID</th><th>Name</th><th>Type</th><th>Department</th><th>Role</th><th>Email</th><th>Status</th><th>Actions</th></tr></thead>
                        <tbody id="userRows"></tbody>
                    </table>
                </div>
                <p class="hint">The ID is each account's primary key. Sample users are shown for layout.</p>
            </div>

            <div class="panel">
                <h3 id="formTitle">Add Employee</h3>
                <div id="userMessage"></div>
                <form id="userForm">
                    <div class="profile-row">
                        <div class="input"><label for="u_first">First Name</label><input type="text" id="u_first" required></div>
                        <div class="input"><label for="u_last">Last Name</label><input type="text" id="u_last" required></div>
                    </div>
                    <div class="profile-row">
                        <div class="input"><label for="u_middle">Middle Name</label><input type="text" id="u_middle"></div>
                        <div class="input"><label for="u_birthdate">Birthdate</label><input type="date" id="u_birthdate"></div>
                    </div>
                    <div class="profile-row">
                        <div class="input">
                            <label for="u_gender">Gender</label>
                            <select id="u_gender">
                                <option value="">Select gender</option>
                                <option>Female</option>
                                <option>Male</option>
                                <option>Prefer not to say</option>
                            </select>
                        </div>
                        <div class="input"><label for="u_email">Email</label><input type="email" id="u_email" required></div>
                    </div>
                    <div class="profile-row">
                        <div class="input"><label for="u_phone">Phone Number</label><input type="text" id="u_phone" minlength="11" maxlength="11"></div>
                        <div class="input"><label for="u_address">Address</label><input type="text" id="u_address"></div>
                    </div>
                    <div class="profile-row">
                        <div class="input">
                            <label for="u_department">Department</label>
                            <select id="u_department" required>
                                <option value="" disabled selected>Select department</option>
                                <option>Administration</option>
                                <option>IT</option>
                                <option>Dispatch</option>
                                <option>Accounting</option>
                                <option>HR</option>
                                <option>Marketing</option>
                                <option>Sales</option>
                                <option>Customer Service</option>
                            </select>
                        </div>
                        <div class="input">
                            <label for="u_role">Role</label>
                            <select id="u_role" required>
                                <option value="" disabled selected>Select role</option>
                                <option>Technician</option>
                                <option>Dispatcher</option>
                                <option>Admin</option>
                                <option>HR</option>
                                <option>Staff</option>
                            </select>
                        </div>
                    </div>
                    <div class="input"><label for="u_username">Username</label><input type="text" id="u_username"></div>
                    <div class="input" id="passwordBox">
                        <label for="u_password">Temporary Password</label>
                        <input type="password" id="u_password" minlength="8" required>
                        <span class="hint">The employee should change this after their first login.</span>
                    </div>
                    <button type="submit" class="submit-btn" id="saveBtn">Add Employee</button>
                    <button type="button" class="btn-sm ghost hidden" id="cancelEdit" style="margin-top:10px">Cancel editing</button>
                </form>
            </div>
        </div>
    </div>
    <script src="<?= base_url('js/app.js') ?>"></script>
</body>
</html>