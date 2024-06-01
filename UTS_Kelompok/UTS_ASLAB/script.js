   // Inisialisasi total harga
        let totalPrice = 0;

        // Daftar produk dalam keranjang belanja
        const cartItems = [];

        // Fungsi untuk menampilkan produk di shopping cart
        function displayCartItems() {
            const cartList = document.getElementById("cart-list");
            cartList.innerHTML = "";

            // Buat elemen list untuk setiap item di keranjang belanja
            cartItems.forEach((item) => {
                const listItem = document.createElement("li");
                listItem.textContent = `${item.name} - IDR${item.price.toLocaleString()}`;
                cartList.appendChild(listItem);
            });
        }

        // Fungsi untuk menambahkan item ke keranjang
        function addToCart(productName, productPrice) {
            // Tambahkan harga produk ke total harga
            totalPrice += productPrice;

            // Tambahkan produk ke daftar keranjang belanja
            cartItems.push({ name: productName, price: productPrice });

            // Update tampilan total harga pada tombol keranjang belanja
            document.getElementById("cart-total-price").textContent = "IDR" + totalPrice.toLocaleString();

            // Tampilkan produk di shopping cart
            displayCartItems();
        }

        // Tambahkan event listener ke setiap tombol Cart pada produk
        document.addEventListener("DOMContentLoaded", function () {
            const cartButtons = document.querySelectorAll(".btn-cart");
            cartButtons.forEach((button) => {
                button.addEventListener("click", () => {
                    // Dapatkan data nama dan harga dari atribut data
                    const productName = button.getAttribute("data-name");
                    const productPrice = parseFloat(button.getAttribute("data-price"));
                    // Panggil fungsi addToCart saat tombol Cart ditekan
                    addToCart(productName, productPrice);
                });
            });
        });

        // Fungsi untuk menangani proses checkout (pesan)
        function checkout() {
            // Lakukan tindakan checkout di sini, misalnya mengirim pesanan ke sistem backend

            // Kosongkan keranjang belanja
            cartItems.length = 0;
            totalPrice = 0;

            // Perbarui tampilan keranjang belanja
            displayCartItems();
            document.getElementById("cart-total-price").textContent = "IDR" + totalPrice.toLocaleString();

            // Tutup shopping cart (offcanvas)
            const offcanvasElement = document.getElementById("offcanvasRight");
            const offcanvas = bootstrap.Offcanvas.getInstance(offcanvasElement);
            offcanvas.hide();

            // Tampilkan pesan konfirmasi atau lakukan tindakan lainnya
            alert("Pesanan Anda telah berhasil diproses. Terima kasih!");
        }
        
        // Fungsi untuk menampilkan daftar belanja dan offcanvas
        function showCart() {
            // Memperbarui daftar belanja di offcanvas
            displayCartItems();
            document.getElementById("cart-total-price").textContent = "IDR" + totalPrice.toLocaleString();

            // Menampilkan offcanvas
            const offcanvasElement = document.getElementById("offcanvasRight");
            const offcanvas = new bootstrap.Offcanvas(offcanvasElement);
            offcanvas.show();
        }