<?php
include_once 'koneksi.php';
?>


<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Aksesoris</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <style>
        .center-text {
            text-align: center;
            font-family: 'Roboto', sans-serif; /* Menggunakan font Roboto */
            font-size: 36px;
            color: #99228f;
            text-shadow: 2px 2px 5px rgba(179, 56, 123, 0.3);
            font-weight: bold;
        }
        
        /* Navigation Bar */
        nav {
            background-color:  #9a4cb9d2;
            padding: 10px 0;
            text-align: center;
        }

        nav .logo {
            font-size: 24px;
            color: hsl(0, 10%, 86%);
            font-weight: bold;
            display: inline-block;
            margin-right: 50px;
        }

        nav .nav-links {
            display: inline-block;
        }

        nav .nav-links a {
            color: #fff;
            padding: 10px 15px;
            text-decoration: none;
            font-weight: bold;
            margin: 0 15px;
            transition: background-color 0.3s;
        }

        nav .nav-links a:hover {
            background-color: #6e1c8f;
            border-radius: 5px;
        }

        .cart button {
            padding: 10px 20px;
            background-color: #38c76f;
            color: #fff;
            border: none;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
        }

        .cart button:hover {
            background-color: #a5376b;
        }

        /* Contact Form Styling */
        .contact-form {
            background-color:rgb(248, 242, 242);
            padding: 20px;
            border-radius: 8px;
            width: 50%;
            margin: 0 auto;
        }

        .contact-form input, .contact-form textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }

        .contact-form button {
            background-color:rgb(201, 63, 201);
            color: #fff;
            padding: 10px 20px;
            border: none;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
        }

        .contact-form button:hover {
            background-color: #a5376b;
        }
    </style>
</head>

<div>
    <!-- Navbar -->
    <nav>
        <div class="logo">cute girl shop</div>
        <div class="nav-links">
            <a href="#home-section">Home</a>
            <a href="#about-section">About</a>
            <a href="#shopping-section">Shopping</a>
            <a href="#contacts-section">Contacts</a>
        </div>
        <div class="cart">
            <button onclick="showCart()">Keranjang (<span id="cart-count">0</span>)</button>
        </div>
    </nav>
    

    <!-- Main Content -->
<div id="home-section" class="home-section"> 
      <h1 class="center-text">WELCOME TO CUTE GIRL SHOP</h1>
      <img src="img/bg2.jpg" alt="Description of the image" class="responsive-image">

</div>

    <!-- About Section -->
    <div id="about-section" class="about-section">
        <img src="img/wby.jpg" alt="Cute Girl Shop" class="about-image">
        <div class="about-description">
            <h2>About Us</h2>
            <p>Welcome to Cute Girl Shop! We offer a variety of cute accessories to make you feel fabulous.</p>
        </div>
    </div>

    <h4 class="center-text">Shopping</h4>
    <div id="shopping-section" class="product-container">
        <div class="product">
            <img src="img/akse 4.jpg" alt="akse 4">
            <h3>Berrly</h3>
            <p>Rp 20.000</p>
            <button onclick="addToCart('Berrly', 20000)">Tambahkan ke Keranjang</button>
        </div>
        <div class="product">
            <img src="img/akse 2.jpg" alt="Roti 2">
            <h3>Berrly type 2</h3>
            <p>Rp 15.000</p>
            <button onclick="addToCart('Berrly type 2', 15000)">Tambahkan ke Keranjang</button>
        </div>
        <div class="product">
            <img src="img/akse 4.jpg" alt="akse 4">
            <h3>Berrly</h3>
            <p>Rp 20.000</p>
            <button onclick="addToCart('Berrly', 20000)">Tambahkan ke Keranjang</button>
        </div>
        <div class="product">
            <img src="img/akse 2.jpg" alt="Roti 2">
            <h3>Berrly type 2</h3>
            <p>Rp 15.000</p>
            <button onclick="addToCart('Berrly type 2', 15000)">Tambahkan ke Keranjang</button>
        </div>
    </div>


    <!-- Contacts Section -->
    <h4 class="center-text">Contacts</h4>
    <div id="contacts-section" class="product-container">
        <form class="contact-form" action="your-server-endpoint" method="POST">
            <label for="name">Nama:</label>
            <input type="text" id="name" name="name" placeholder="Masukkan nama Anda" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Masukkan email Anda" required>

            <label for="nomor_hp">No Hp</label>
            <input type="nomor_hp" id="nomor_hp"placeholder="Masukkan No Hp Anda"required>

            <label for="message">Pesan:</label>
            <textarea id="message" name="message" rows="5" placeholder="Tulis pesan Anda..." required></textarea>

            <button type="submit">Kirim Pesan</button>
        </form>
    </div>

    <!-- Cart Modal 
    <div id="cart-modal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeCart()">&times;</span>
            <h2>Keranjang Belanja</h2>
            <ul id="cart-items"></ul>
            <p>Total: Rp <span id="total-price">0</span></p>
        </div>
    </div> -->

    <!-- Cart Modal -->
<div id="cart-modal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeCart()">&times;</span>
        <h2>Keranjang Belanja</h2>
        <ul id="cart-items">
            <?php if (isset($_SESSION['keranjang'])): ?>
                <?php $total_harga = 0; ?>
                <?php foreach ($_SESSION['keranjang'] as $item): ?>
                    <li>
                        <span><?= $item['nama_produk']; ?> (x<?= $item['jumlah']; ?>)</span>
                        <span>Rp <?= number_format($item['harga'] * $item['jumlah'], 0, ',', '.'); ?></span>
                    </li>
                    <?php $total_harga += $item['harga'] * $item['jumlah']; ?>
                <?php endforeach; ?>
            <?php else: ?>
                <li>Keranjang Anda kosong.</li>
            <?php endif; ?>
        </ul>
        <p>Total: Rp <span id="total-price"><?= number_format($total_harga, 0, ',', '.'); ?></span></p>
        <button onclick="checkout()">Checkout</button>
    </div>
</div>


    <footer>
        <div class="footer-content">
            <p>&copy; 2024 Cute Girl Shop. All rights reserved.</p>
            <div class="social-links">
                <a href="#">Facebook</a>
                <a href="#">Instagram</a>
                <a href="#">Twitter</a>
            </div>
        </div>
    </footer>
    

  

    <script src="script.js"></script>
</body>
</html>

