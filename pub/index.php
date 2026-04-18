<?php
$products = [
    ["name" => "Basic T-Shirt", "price" => 499],
    ["name" => "Sports Shoes", "price" => 1499],
    ["name" => "Travel Bag", "price" => 899],
    ["name" => "Smart Watch", "price" => 2999],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>My Store</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
:root {
    --primary:#2d3e50;     /* Magento-like blue */
    --accent:#ff6a00;      /* Magento orange */
    --bg:#f5f7fa;
}

body {
    margin:0;
    font-family: Arial, sans-serif;
    background:var(--bg);
}

/* Top strip */
.topbar {
    background:#ffffff;
    padding:8px 25px;
    font-size:13px;
    display:flex;
    justify-content:space-between;
    border-bottom:1px solid #ddd;
}

/* Header */
.header {
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:15px 25px;
    background:white;
}

.logo {
    font-size:24px;
    font-weight:bold;
    color:var(--primary);
}

/* Search */
.search {
    display:flex;
}

.search input {
    padding:10px;
    width:280px;
    border:1px solid #ccc;
    border-right:none;
}

.search button {
    background:var(--accent);
    color:white;
    border:none;
    padding:10px 15px;
    cursor:pointer;
}

/* Navbar */
.nav {
    background:var(--primary);
    padding:12px 25px;
}

.nav a {
    color:white;
    margin-right:18px;
    text-decoration:none;
    font-size:14px;
}

/* Hero */
.hero {
    background:white;
    margin:20px;
    border-radius:8px;
    padding:40px;
    text-align:center;
}

.hero h1 {
    margin:0;
}

.hero button {
    margin-top:15px;
    padding:12px 20px;
    background:var(--accent);
    border:none;
    color:white;
    cursor:pointer;
}

/* Products */
.container {
    padding:20px;
}

.products {
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
    gap:20px;
}

.card {
    background:white;
    padding:15px;
    border-radius:8px;
    text-align:center;
    box-shadow:0 2px 6px rgba(0,0,0,0.05);
}

.price {
    color:var(--accent);
    font-weight:bold;
}

.btn {
    margin-top:10px;
    padding:10px;
    background:var(--accent);
    color:white;
    border:none;
    width:100%;
    cursor:pointer;
}

/* Footer */
.footer {
    margin-top:30px;
    background:var(--primary);
    color:white;
    padding:20px;
    text-align:center;
}
</style>
</head>

<body>

<div class="topbar">
    <div>Welcome to our store</div>
    <div>Sign In | Cart</div>
</div>

<div class="header">
    <div class="logo">MyStore</div>

    <div class="search">
        <input type="text" placeholder="Search products...">
        <button>Search</button>
    </div>
</div>

<div class="nav">
    <a href="#">New</a>
    <a href="#">Men</a>
    <a href="#">Women</a>
    <a href="#">Accessories</a>
    <a href="#">Sale</a>
</div>

<div class="hero">
    <h1>Welcome to Magento store Version 1.0</h1>
    <p>Discover latest products with great offers</p>
    <button>Shop Now</button>
</div>

<div class="container">
    <h2>Featured Products</h2>

    <div class="products">
        <?php foreach($products as $p): ?>
            <div class="card">
                <h3><?= $p['name'] ?></h3>
                <p class="price">₹<?= $p['price'] ?></p>
                <button class="btn">Add to Cart</button>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<div class="footer">
    © <?= date("Y") ?> MyStore
</div>

</body>
</html>
