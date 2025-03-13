<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galaxy Store</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Warna latar belakang utama */
        body {
            background: #DBE2EF;
        }

        /* Sidebar dengan warna yang lebih soft */
        .sidebar {
            background: rgba(193, 211, 254, 0.95); /* Warna soft dengan sedikit transparansi */
            color: #1E3A8A;
        }

        /* Efek hover sidebar */
        .menu-item {
            transition: all 0.3s ease-in-out;
        }

        .menu-item:hover {
            background: #A1B6F1;
            color: white;
            padding-left: 12px;
            border-radius: 8px;
        }

        /* Tampilan kategori dengan background transparan */
        .category-container {
            background: rgba(239, 243, 246, 0.9); /* Warna yang diminta */
            padding: 16px;
            border-radius: 10px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease-in-out;
        }

        .category-container h2 {
            font-size: 1.3rem;
            font-weight: bold;
            color: #2563eb;
            padding-bottom: 5px;
            border-bottom: 2px solid #2563eb;
            display: inline-block;
            text-transform: uppercase;
        }

        /* Tombol kategori */
        .category-btn {
            background: #f8fafc;
            color: #333;
            padding: 10px 14px;
            font-size: 1rem;
            font-weight: 600;
            border-radius: 8px;
            transition: all 0.3s ease-in-out;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            cursor: pointer;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.05);
        }

        .category-btn:hover {
            background: #2563eb;
            color: white;
            transform: scale(1.05);
        }

        /* Keranjang Belanja dengan efek transparan */
        .cart-container {
            background: rgba(239, 243, 246, 0.95); /* Warna yang diminta */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.08);
            border: 1px solid #e5e7eb;
        }

        .checkout-btn {
            background: #2563eb;
            color: white;
            padding: 12px;
            width: 100%;
            border-radius: 8px;
            font-weight: bold;
            transition: background 0.3s;
            cursor: pointer;
        }

        .checkout-btn:hover {
            background: #1e40af;
        }
    </style>
</head>
<body class="bg-gray-100 font-sans antialiased">

    <!-- Layout Utama -->
    <div class="flex min-h-screen">

        <!-- 🔹 Sidebar -->
        <div class="w-64 bg-[#DBE2EF] text-gray-800 shadow-lg p-5">
            <h2 class="text-2xl font-bold mb-6 tracking-wide">🌌 Galaxy Store</h2>
            <ul class="space-y-5">
                <li class="flex items-center gap-3 hover:text-gray-600 transition-all cursor-pointer">
                    <span>🏠</span> <span>Dashboard</span>
                </li>
                <li class="flex items-center gap-3 hover:text-gray-600 transition-all cursor-pointer">
                    <span>💳</span> <span>Pembayaran</span>
                </li>
                <li class="flex items-center gap-3 hover:text-gray-600 transition-all cursor-pointer">
                    <span>📦</span> <span>Produk</span>
                </li>
                <li class="flex items-center gap-3 hover:text-gray-600 transition-all cursor-pointer">
                    <span>🎨</span> <span>Dekorasi</span>
                </li>
                <li class="flex items-center gap-3 hover:text-gray-600 transition-all cursor-pointer">
                    <span>⚙️</span> <span>Pengaturan</span>
                </li>
                <li class="flex items-center gap-3 hover:text-gray-600 transition-all cursor-pointer">
                    <span>📊</span> <span>Penjualan</span>
                </li>
                <li class="flex items-center gap-3 text-red-500 hover:text-red-400 transition-all cursor-pointer">
                    <span>🚪</span> <span>Logout</span>
                </li>
            </ul>
        </div>

        <!-- Konten Utama -->
        <div class="flex-1 max-w-6xl mx-auto mt-10 p-6 bg-[#EFF3F6] rounded-lg shadow-lg">

            <!-- Header -->
            <div class="bg-[#EFF3F6] p-4 flex justify-between items-center rounded-lg shadow-md border border-gray-200">
                <h1 class="text-3xl font-extrabold tracking-wide text-gray-800">GALAXY STORE</h1>
                <div class="flex items-center gap-3">
                    <input type="text" placeholder="🔍 Pencarian produk"
                        class="px-4 py-2 w-64 rounded-full bg-gray-50 text-gray-700 border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:outline-none transition-all shadow-sm">
                    <div class="w-10 h-10 bg-gray-400 rounded-full overflow-hidden">
                        <img src="images/logo.jpg" alt="Avatar">
                    </div>
                </div>
            </div>

            <!-- Kategori ATK -->
            <div class="category-container mt-6">
                <h2>🖊️ Alat Tulis Kantor (ATK)</h2>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-3">
                    <button class="category-btn"><span>✏️</span>Pensil</button>
                    <button class="category-btn"><span>🖊️</span>Pulpen</button>
                    <button class="category-btn"><span>🖍️</span>Spidol</button>
                    <button class="category-btn"><span>📜</span>Kertas</button>
                </div>
            </div>

            <!-- Kategori Dekorasi -->
            <div class="category-container mt-6">
                <h2>🎨 Dekorasi</h2>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-3">
                    <button class="category-btn"><span>💰</span>Buket Uang</button>
                    <button class="category-btn"><span>🌸</span>Buket Bunga</button>
                    <button class="category-btn"><span>🌿</span>Bunga</button>
                    <button class="category-btn"><span>🖼️</span>Bingkai Foto</button>
                </div>
            </div>

            <!-- Keranjang Belanja -->
            <div class="cart-container mt-8">
                <h2 class="text-xl font-semibold text-gray-700">🛒 Keranjang</h2>
                <div class="mt-3">
                    <div class="cart-item"><span>Buket Uang 25K, 50 lembar</span><span class="font-semibold">Rp10.000</span></div>
                    <div class="cart-item"><span>Foto Ngab Dewa, karton</span><span class="font-semibold">Rp5.000</span></div>
                    <div class="cart-item"><span>Bingkai Foto 30x65cm, Kayu</span><span class="font-semibold">Rp45.500</span></div>
                </div>
                <button class="checkout-btn mt-4">Checkout</button>
            </div>

        </div>
    </div>

</body>
</html>
