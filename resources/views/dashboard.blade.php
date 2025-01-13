<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Kasir Pintar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
            header {
            background-color: #1ABC9C; /* Kasir Pintar brand color */
            color: white;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative;
        }

        .header-content {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        header h1 {
            margin: 0;
            font-size: 24px;
            font-weight: bold;
        }

        header p {
            margin: 5px 0;
            font-size: 14px;
        }

        .hamburger {
            font-size: 30px;
            color: white;
            background: transparent;
            border: none;
            cursor: pointer;
            position: absolute;
            top: 15px;
            right: 20px;
        }

        .hamburger:hover {
            color: #fff;
        }

        nav {
            display: flex;
            background-color: #fff;
            border-bottom: 1px solid #ddd;
            padding: 10px;
        }
        nav a {
            margin-right: 15px;
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }
        nav a:hover {
            color: #1ABC9C;
        }
        .sidebar {
            width: 250px;
            background-color: #2C3E50;
            color: white;
            height: 100vh;
            position: fixed;
            top: 70px;
            left: -250px;
            transition: 0.3s;
            padding: 15px;
        }
        .sidebar.open {
            left: 0;
        }
        .sidebar a {
            display: block;
            color: white;
            text-decoration: none;
            padding: 10px 0;
            border-bottom: 1px solid #34495E;
        }
        .sidebar a:hover {
            background-color: #1ABC9C;
        }
        .close-btn {
            font-size: 30px;
            color: white;
            cursor: pointer;
            position: absolute;
            top: 20px;
            right: 20px;
        }
        .content {
            margin-left: 270px;
            padding: 20px;
        }
        .content h2 {
            margin-bottom: 20px;
        }
        .notification {
            background-color: #FFEB3B;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #FFD54F;
            border-radius: 5px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
        footer {
            text-align: center;
            padding: 10px 0;
            background-color: #1ABC9C;
            color: white;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <div class="header-content">
            <h1>Kasir Pintar - Dashboard</h1>
            <p>Web Kasir Pintar</p>
        </div>
        <button class="hamburger" onclick="toggleSidebar()">&#9776;</button>
    </header>
    <div class="sidebar">
        <span class="close-btn" onclick="toggleSidebar()">&#10005;</span>
        <h3>Menu</h3>
        <a href="{{ route('produk.index') }}">Produk atau Barang</a>
        <a href="{{ route('kategori.index') }}">Kategori</a>
        <a href="{{ route('diskon.index') }}">Diskon</a>
        <a href="{{ route('suplier.index') }}">Suplier</a>
        <a href="{{ route('pegawai.index') }}">Pegawai</a>
        <a href="#">Transaksi</a>
        <a href="#">Laporan</a>
        <a href="#">Pengaturan</a>
        <a href="#">E-Wallet</a>
        <a href="#">Iklan</a>
    </div>
    <div class="content">
        <h2>Barang atau Jasa</h2>
        <div class="notification">
            <p>Toko Anda belum atur titik pin lokasi toko, ayo atur titik lokasi sekarang.</p>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Kategori</th>
                    <th>Harga Jual (Rp)</th>
                    <th>Harga Dasar (Rp)</th>
                    <th>Stok</th>
                    <th>Diskon</th>
                    <th>Tipe Barang</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>A004</td>
                    <td>Sepatu</td>
                    <td>Fashion</td>
                    <td>250.000</td>
                    <td>200.000</td>
                    <td>50</td>
                    <td>10%</td>
                    <td>Default</td>
                    <td><button style="padding: 5px; background-color: #1ABC9C; color: white; border: none;">Edit</button></td>
                </tr>
                <tr>
                    <td>A003</td>
                    <td>Jam Tangan</td>
                    <td>Fashion</td>
                    <td>155.000</td>
                    <td>135.000</td>
                    <td>100</td>
                    <td>5%</td>
                    <td>Default</td>
                    <td><button style="padding: 5px; background-color: #1ABC9C; color: white; border: none;">Edit</button></td>
                </tr>
                <tr>
                    <td>A002</td>
                    <td>Totebag</td>
                    <td>Fashion</td>
                    <td>65.000</td>
                    <td>50.000</td>
                    <td>50</td>
                    <td>0%</td>
                    <td>Default</td>
                    <td><button style="padding: 5px; background-color: #1ABC9C; color: white; border: none;">Edit</button></td>
                </tr>
                <tr>
                    <td>A001</td>
                    <td>Gelang</td>
                    <td>Perhiasan</td>
                    <td>20.000</td>
                    <td>18.000</td>
                    <td>50</td>
                    <td>0%</td>
                    <td>Default</td>
                    <td><button style="padding: 5px; background-color: #1ABC9C; color: white; border: none;">Edit</button></td>
                </tr>
            </tbody>
        </table>
        <p>Showing 1 to 4 of 4 entries</p>
    </div>
    <footer>
        <p>&copy; 2025 Kasir Pintar - All Rights Reserved</p>
    </footer>

    <script>
        function toggleSidebar() {
            const sidebar = document.querySelector('.sidebar');
            sidebar.classList.toggle('open');
        }
    </script>
</body>
</html>

