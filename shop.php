<div id="shopping-section" class="product-container">
    <?php
    $result = $conn->query("SELECT * FROM produk");
    while ($row = $result->fetch_assoc()) {
    ?>
        <div class="product">
            <img src="<?= $row['gambar']; ?>" alt="<?= $row['nama_produk']; ?>">
            <h3><?= $row['nama_produk']; ?></h3>
            <p>Rp <?= number_format($row['harga'], 0, ',', '.'); ?></p>
            <button onclick="addToCart('<?= $row['nama_produk']; ?>', <?= $row['harga']; ?>)">Tambahkan ke Keranjang</button>
        </div>
    <?php
    }
    ?>
</div>
