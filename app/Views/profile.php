<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - Sun Son Solar</title>
    <link rel="stylesheet" href="<?= base_url('css/style2.css') ?>">
</head>
<body>
    <div class="sidebar">
        <div class="brand">SUN SON SOLAR</div>
        <a href="<?= base_url('products') ?>">Products</a>
        <a href="<?= base_url('services') ?>">Services</a>
        <a href="<?= base_url('profile') ?>" class="active">Profile</a>
        <a href="<?= base_url('login') ?>" class="logout-btn">Logout</a>
    </div>

    <div class="main">
        <h1 class="Head">SUN SON SOLAR</h1>
        <p class="tagline">Panels, inverters, batteries and full-service solar installation</p>

        <div class="page-wrap">
            <h2>My Profile</h2>
            <p class="page-sub">View your account details and update your password.</p>

            <div class="profile-card">
                <h3>Account Details</h3>

                <div class="profile-row">
                    <div class="input">
                        <label for="firstname">First Name</label>
                        <input type="text" id="firstname" value="<?= esc(session()->get('firstName')) ?>" disabled>
                   </div>
                    <div class="input">
                        <label for="lastname">Last Name</label>
                        <input type="text" id="lastname" value="<?= esc(session()->get('lastName')) ?>" disabled>
                            </div>
                        </div>

                <div class="profile-row">
                    <div class="input">
                        <label for="username">Username</label>
                        <input type="text" id="username" value="<?= esc(session()->get('username')) ?>" disabled>
                        </div>
                <div class="input">
                        <label for="email">Email</label>
                        <input type="email" id="email" value="<?= esc(session()->get('email')) ?>" disabled>
                        </div>
                    </div>

                <div class="input">
                        <label for="address">Address</label>
                        <input type="text" id="address" value="<?= esc(session()->get('address')) ?>" disabled>
                        <span class="hint">Role: <?= ucfirst(esc((string)session()->get('accountType'))) ?></span>
                    </div>
            </div>

            <div class="profile-card">
                <h3>Change Password</h3>
                <div id="passwordMessage"></div>

                <form id="passwordForm">
                    <div class="input">
                        <label for="currentPassword">Current Password</label>
                        <input type="password" id="currentPassword" name="currentPassword" placeholder="Enter your current password" required>
                    </div>

                    <hr class="divider">

                    <div class="input">
                        <label for="newPassword">New Password</label>
                        <input type="password" id="newPassword" name="newPassword" placeholder="Enter a new password" required minlength="8">
                    </div>

                    <div class="input">
                        <label for="confirmNewPassword">Confirm New Password</label>
                        <input type="password" id="confirmNewPassword" name="confirmNewPassword" placeholder="Re-enter your new password" required minlength="8">
                    </div>

                    <button type="submit" class="submit-btn">Update Password</button>
                </form>
            </div>
        </div>
    </div>

    <script src="<?= base_url('js/profile.js') ?>"></script>
</body>
</html>