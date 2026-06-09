
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Coffee Company | Premium Indonesian Coffee</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Playfair+Display:wght@600;700;800&display=swap" rel="stylesheet">

<link rel="stylesheet" href="assets/css/style.css"> 

</head>
<body>

<!-- NAVBAR -->

<nav class="navbar navbar-expand-lg navbar-dark fixed-top">

<div class="container">

<a class="navbar-brand" href="#">
    Coffee Company
</a>

<button class="navbar-toggler"
data-bs-toggle="collapse"
data-bs-target="#menu">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="menu">

<ul class="navbar-nav ms-auto">

<li class="nav-item">
<a class="nav-link" href="index.php">Home</a>
</li>

<li class="nav-item">
<a class="nav-link" href="products.php">Products</a>
</li>

<li class="nav-item">
<a class="nav-link" href="about.php">About</a>
</li>

<li class="nav-item">
<a class="nav-link" href="contact.php">Contact</a>
</li>

<?php if(isset($_SESSION['role'])) { ?>

<li class="nav-item">
<a class="nav-link" href="logout.php">Logout</a>
</li>

<?php } else { ?>

<li class="nav-item">
<a class="nav-link" href="login.php">Login</a>
</li>

<?php } ?>

</ul>

</div>

</div>

</nav>

<!-- HERO -->

<section class="hero">

<div class="container">

<div class="row">

<div class="col-lg-7">

<span class="hero-tag">
Premium Indonesian Coffee Exporter
</span>

<h1 class="hero-title mt-4">
Exceptional Coffee Beans Crafted For The World
</h1>

<p class="hero-text mt-4">
Discover authentic Indonesian coffee sourced directly
from the finest plantations in Aceh, Toraja, Java,
and Bali. Trusted by cafés, roasters, and distributors worldwide.
</p>

<div class="mt-4">

<a href="products.php" class="btn btn-coffee">
Explore Products
</a>

</div>

</div>

</div>

</div>

</section>

<!-- STATS -->

<section class="stats">

<div class="container">

<div class="row text-center">

<div class="col-md-3 stat-box">
<h2>15+</h2>
<p>Years Experience</p>
</div>

<div class="col-md-3 stat-box">
<h2>500+</h2>
<p>Business Clients</p>
</div>

<div class="col-md-3 stat-box">
<h2>20+</h2>
<p>Export Countries</p>
</div>

<div class="col-md-3 stat-box">
<h2>100%</h2>
<p>Premium Quality</p>
</div>

</div>

</div>

</section>

<!-- PRODUCTS -->

<section class="product-section">

<div class="container">

<div class="text-center mb-5">

<h2 class="section-title">
Our Coffee Collection
</h2>

<p>
Premium coffee products selected from Indonesia's finest plantations.
</p>

</div>

<div class="row">

<div class="col-lg-4 mb-4">

<div class="card product-card">

<img src="assets/img/gayo.jpg"
class="product-img">

<div class="card-body">

<span class="badge badge-custom">
Best Seller
</span>

<h4 class="mt-3">
Aceh Gayo Arabica
</h4>

<p>
Rich aroma, chocolate notes, premium export quality.
</p>

</div>

</div>

</div>

<div class="col-lg-4 mb-4">

<div class="card product-card">

<img src="assets/img/robusta.jpg"
class="product-img">

<div class="card-body">

<span class="badge badge-custom">
Premium
</span>

<h4 class="mt-3">
Robusta Coffee
</h4>

<p>
Strong body, bold taste, authentic Indonesian character.
</p>

</div>

</div>

</div>

<div class="col-lg-4 mb-4">

<div class="card product-card">

<img src="assets/img/ground.jpg"
class="product-img">

<div class="card-body">

<span class="badge badge-custom">
Fresh Ground
</span>

<h4 class="mt-3">
Ground Coffee
</h4>

<p>
Freshly ground with rich aroma and smooth texture.
</p>

</div>

</div>

</div>

</div>

</div>

</section>

<!-- WHY US -->

<section class="why-us">

<div class="container">

<div class="text-center mb-5">

<h2 class="section-title">
Why Choose Us
</h2>

</div>

<div class="row">

<div class="col-md-4 mb-4">

<div class="feature-box">

<div class="feature-icon">🌱</div>

<h4>Direct From Farmers</h4>

<p>
Sourced directly from selected Indonesian plantations.
</p>

</div>

</div>

<div class="col-md-4 mb-4">

<div class="feature-box">

<div class="feature-icon">🚢</div>

<h4>Global Export</h4>

<p>
Trusted by buyers from many countries worldwide.
</p>

</div>

</div>

<div class="col-md-4 mb-4">

<div class="feature-box">

<div class="feature-icon">🏆</div>

<h4>Premium Quality</h4>

<p>
Strict quality control and professional processing.
</p>

</div>

</div>

</div>

</div>

</section>

<!-- TESTIMONIAL -->

<section class="testimonial">

<div class="container">

<div class="text-center mb-5">

<h2 class="section-title">
What Our Clients Say
</h2>

</div>

<div class="row">

<div class="col-md-4">

<div class="testimonial-card">

<p>
"Excellent coffee quality and outstanding service."
</p>

<h5>Michael Smith</h5>

<small>USA Distributor</small>

</div>

</div>

</div>

</div>

</section>

<!-- CTA -->

<section class="cta">

<div class="container">

<h2>
Ready To Partner With Us?
</h2>

<p class="mt-3 mb-4">
Let's bring premium Indonesian coffee to your market.
</p>

<a href="contact.php" class="btn btn-coffee">
Contact Us
</a>

</div>

</section>

<!-- FOOTER -->

<footer class="footer">

<div class="container">

<div class="row">

<div class="col-md-4">

<h4 class="footer-title">
Coffee Company
</h4>

<p>
Premium Indonesian Coffee Exporter.
</p>

</div>

<div class="col-md-4">

<h5>Quick Links</h5>

<p>Products</p>
<p>About</p>
<p>Contact</p>

</div>

<div class="col-md-4">

<h5>Contact</h5>

<p>export@coffeecompany.com</p>
<p>+62 823 3304 4461</p>

</div>

</div>

<div class="copyright">
Coffee Company © 2026 | All Rights Reserved
</div>

</div>

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
```
