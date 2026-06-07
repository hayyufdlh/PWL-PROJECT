
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

<style>

:root{
    --coffee:#C08B5C;
    --dark:#0f0f0f;
    --card:#181818;
    --text:#dcdcdc;
}

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    font-family:'Poppins',sans-serif;
    background:var(--dark);
    color:white;
    overflow-x:hidden;
}

/* NAVBAR */

.navbar{
    background:rgba(0,0,0,.55);
    backdrop-filter:blur(15px);
    transition:.4s;
}

.navbar-brand{
    font-weight:700;
    font-size:1.4rem;
}

.nav-link{
    color:white !important;
    margin-left:15px;
    transition:.3s;
}

.nav-link:hover{
    color:var(--coffee) !important;
}

/* HERO */

.hero{
    min-height:100vh;
    background:
    linear-gradient(
    rgba(0,0,0,.65),
    rgba(0,0,0,.75)),
    url('assets/img/hero-coffee.jpg');

    background-size:cover;
    background-position:center;
    display:flex;
    align-items:center;
}

.hero-tag{
    display:inline-block;
    background:rgba(192,139,92,.2);
    border:1px solid var(--coffee);
    color:var(--coffee);
    padding:10px 20px;
    border-radius:50px;
    font-size:.9rem;
}

.hero-title{
    font-family:'Playfair Display',serif;
    font-size:4rem;
    font-weight:800;
    line-height:1.2;
}

.hero-text{
    color:#ddd;
    max-width:650px;
    font-size:1.1rem;
}

.btn-coffee{
    background:var(--coffee);
    color:white;
    border:none;
    padding:14px 35px;
    border-radius:50px;
    font-weight:600;
    transition:.3s;
}

.btn-coffee:hover{
    transform:translateY(-4px);
    background:#aa7444;
    color:white;
}

/* STATS */

.stats{
    padding:80px 0;
    background:#141414;
}

.stat-box h2{
    color:var(--coffee);
    font-weight:800;
    font-size:3rem;
}

.stat-box p{
    color:#bbb;
}

/* PRODUCTS */

.section-title{
    font-family:'Playfair Display',serif;
    font-size:2.8rem;
    margin-bottom:15px;
}

.product-section{
    padding:100px 0;
}

.product-card{
    background:var(--card);
    border:none;
    border-radius:20px;
    overflow:hidden;
    transition:.4s;
    height:100%;
}

.product-card:hover{
    transform:translateY(-10px);
}

.product-img{
    width:100%;
    height:280px;
    object-fit:cover;
    transition:.5s;
}

.product-card:hover .product-img{
    transform:scale(1.08);
}

.product-card .card-body{
    padding:25px;
}

.badge-custom{
    background:var(--coffee);
}

/* WHY US */

.why-us{
    padding:100px 0;
    background:#141414;
}

.feature-box{
    background:#1b1b1b;
    padding:35px;
    border-radius:20px;
    height:100%;
    transition:.3s;
}

.feature-box:hover{
    background:#222;
}

.feature-icon{
    font-size:40px;
    margin-bottom:20px;
}

/* TESTIMONIAL */

.testimonial{
    padding:100px 0;
}

.testimonial-card{
    background:#1c1c1c;
    border-radius:20px;
    padding:30px;
}

/* CTA */

.cta{
    padding:100px 0;
    text-align:center;
    background:
    linear-gradient(
    rgba(0,0,0,.75),
    rgba(0,0,0,.75)),
    url('assets/img/gayo.jpg');

    background-size:cover;
}

.cta h2{
    font-size:3rem;
    font-family:'Playfair Display',serif;
}

/* FOOTER */

.footer{
    background:black;
    padding:60px 0 20px;
}

.footer-title{
    color:var(--coffee);
}

.footer p{
    color:#aaa;
}

.copyright{
    border-top:1px solid #222;
    margin-top:30px;
    padding-top:20px;
    text-align:center;
    color:#777;
}

@media(max-width:768px){

.hero-title{
    font-size:2.5rem;
}

.section-title{
    font-size:2rem;
}

.cta h2{
    font-size:2rem;
}

}

</style>

</head>
<body>

<!-- NAVBAR -->

<nav class="navbar navbar-expand-lg navbar-dark fixed-top">

<div class="container">

<a class="navbar-brand" href="#">
☕ Coffee Company
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
<p>+62 812 3456 7890</p>

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
