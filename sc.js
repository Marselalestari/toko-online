// Fungsi untuk menambah item ke keranjang
function addToCart(productName, price) {
    let cartCount = document.getElementById("cart-count");
    let cartItems = JSON.parse(localStorage.getItem("cart")) || [];
    
    let itemIndex = cartItems.findIndex(item => item.name === productName);
    
    if (itemIndex !== -1) {
        // Jika item sudah ada di keranjang, update jumlahnya
        cartItems[itemIndex].quantity += 1;
    } else {
        // Jika item belum ada, tambahkan ke keranjang
        cartItems.push({ name: productName, price: price, quantity: 1 });
    }
    
    // Simpan kembali ke localStorage
    localStorage.setItem("cart", JSON.stringify(cartItems));
    
    // Update jumlah item di keranjang
    cartCount.textContent = cartItems.length;
}

// Fungsi untuk membuka modal keranjang
function showCart() {
    let cartItems = JSON.parse(localStorage.getItem("cart")) || [];
    let cartItemsList = document.getElementById("cart-items");
    let totalPrice = 0;

    // Clear the current cart items
    cartItemsList.innerHTML = '';

    // Tampilkan item-item dalam keranjang
    cartItems.forEach(item => {
        let li = document.createElement("li");
        li.textContent = `${item.name} (x${item.quantity}) - Rp ${item.price * item.quantity}`;
        cartItemsList.appendChild(li);
        totalPrice += item.price * item.quantity;
    });

    // Tampilkan total harga
    document.getElementById("total-price").textContent = `Rp ${totalPrice.toLocaleString()}`;
    
    // Tampilkan modal
    document.getElementById("cart-modal").style.display = "block";
}

// Fungsi untuk menutup modal keranjang
function closeCart() {
    document.getElementById("cart-modal").style.display = "none";
}
