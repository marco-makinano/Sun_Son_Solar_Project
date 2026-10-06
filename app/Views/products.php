<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products - Sun Son Solar</title>
    <link rel="stylesheet" href="<?= base_url('css/style2.css') ?>">
</head>
<body>
    <div class="sidebar">
        <div class="brand">SUN SON SOLAR</div>
        <a href="<?= base_url('products') ?>" class="active">Products</a>
        <a href="<?= base_url('services') ?>">Services</a>
        <a href="<?= base_url('profile') ?>">Profile</a>
        <a href="<?= base_url('login') ?>" class="logout-btn">Logout</a>
    </div>

    <div class="main">
        <h1 class="Head">SUN SON SOLAR</h1>
        <p class="tagline">Panels, inverters, batteries and full-service solar installation</p>

        <div class="page-wrap">
            <h2>Our Products</h2>
            <p class="page-sub">Everything you need for your solar setup.</p>

            <div class="card-grid">
                <div class="card panels">
                    <div class="icon">☀️</div>
                    <div class="tag">Solar Panels</div>
                    <h3>Monocrystalline Solar Panel</h3>
                    <p>High-efficiency panel for home and commercial rooftops.</p>
                    <div class="price">Price on request</div>
                </div>
                <div class="card panels">
                    <div class="icon">☀️</div>
                    <div class="tag">Solar Panels</div>
                    <h3>Polycrystalline Solar Panel</h3>
                    <p>Cost-effective panel for larger installations.</p>
                    <div class="price">Price on request</div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>