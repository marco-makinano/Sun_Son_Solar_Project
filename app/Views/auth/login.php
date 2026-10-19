<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sun Son Solar</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>
    <h1 class="Head">SUN SON SOLAR</h1>
    <p class="tagline">Panels, inverters, batteries and full-service solar installation</p>

    <div class="form-container">
        <h2>Log-In</h2>

        <!-- pop messages -->
        <?php if (session()->getFlashdata('success')): ?>
            <div style="background-color: #d4edda; color: #155724; padding: 12px; border-radius: 5px; margin-bottom: 15px; text-align: center; border: 1px solid #c3e6cb;">
                <?= esc(session()->getFlashdata('success')) ?>
            </div>
        <?php endif; ?>

        <?php if (session()->getFlashdata('error')): ?>
            <div style="background-color: #f8d7da; color: #721c24; padding: 12px; border-radius: 5px; margin-bottom: 15px; text-align: center; border: 1px solid #f5c6cb;">
                <?= esc(session()->getFlashdata('error')) ?>
            </div>
        <?php endif; ?>
   
        <form id="loginForm" action="<?= base_url('login') ?>" method="post">
            <?= csrf_field() ?>

            <div class="input">
                <label for="username">Username or Email</label>
                <input type="text" name="username" id="username" placeholder="Enter your username or email" value="<?= old('username') ?>" required>
            </div>

            <div class="input">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>

            <button type="submit" class="submit-btn" id="submitBtn">Login</button>
        </form>

        <p class="form-footer">New here? <a href="<?= base_url('register') ?>">Create an account</a></p>
    </div>
</body>
</html>