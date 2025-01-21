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
            background-color: #7289da;  
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
            color: white;
        }

        header p {
            margin: 5px 0;
            font-size: 14px;
            color: white;
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
            background-color: #7289da;
        }
        .close-btn {
            font-size: 30px;
            color: white;
            cursor: pointer;
            position: absolute;
            top: 20px;
            right: 20px;
        }
        .submenu {
            display: none;
            padding-left: 20px;
            background-color: #34495e;
        }
        .submenu a {
            padding: 8px 0;
        }
        .submenu a:hover {
            background-color: #3b5998;
        }
        footer {
            text-align: center;
            padding: 10px 0;
            background-color: #7289da;
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
    <div class="container">
    <!-- Sidebar -->
    <div class="sidebar">
        <ul>
            <span class="close-btn" onclick="toggleSidebar()">&#10005;</span>
            <h3>Menu</h3>
            <a href="#" onclick="toggleSubMenu('databaseSubmenu')">Database</a>
            <div id="databaseSubmenu" class="submenu">
                <a href="{{ route('produk.index') }}">Produk atau Barang</a>
                <a href="{{ route('kategori.index') }}">Kategori</a>
                <a href="{{ route('diskon.index') }}">Diskon</a>
                <a href="{{ route('suplier.index') }}">Suplier</a>
                <a href="{{ route('pegawai.index') }}">Pegawai</a>
                <a href="{{ route('transaksi.index') }}">Transaksi</a>
            </div>
            <a href="#" onclick="toggleSubMenu('laporanSubmenu')">Laporan</a>
            <div id="laporanSubmenu" class="submenu">
                <a href="{{ route('penjualan.index') }}">Laporan penjualan</a>
                <a href="#">Laporan Diskon dan Promosi</a>
                <a href="#">Laporan Stok Barang</a>
                <a href="#">Rerkapitulasi Stok Barang</a>
            </div>
            <a href="#" onclick="toggleSubMenu('keuanganSubmenu')">Keuangan</a>
            <div id="keuanganSubmenu" class="submenu">
            <a href="{{ route('keuangan.index') }}">Laporan keuangan</a>
            <a href="#">Detail Pendapatan</a>
            <a href="#">Detail Pengeluaran</a>
            <a href="#">Rekapitulasi Keuangan Bulanan</a>
            </div>
            <a href="#">Pengaturan</a>
        </ul>
    </div>
    <footer>
        <p>&copy; Kasir Pintar </p>
    </footer>

    <script>
        function toggleSidebar() {
            const sidebar = document.querySelector('.sidebar');
            sidebar.classList.toggle('open');
        }

        function toggleSubMenu(submenuId) {
            const submenu = document.getElementById(submenuId);
            if (submenu.style.display === 'block') {
                submenu.style.display = 'none';
            } else {
                submenu.style.display = 'block';
            }
        }
    </script>
</body>
</html>
