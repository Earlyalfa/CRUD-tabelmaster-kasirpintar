<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kasir Pintar - Home</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #7289da;
            color: white;
            text-align: center;
            padding: 40px;
        }
        header h1 {
            margin: 0;
            font-size: 36px;
        }
        header p {
            font-size: 18px;
        }
        nav {
            display: flex;
            justify-content: center;
            background-color: #fff;
            border-bottom: 1px solid #ddd;
            padding: 10px;
        }
        nav a {
            margin-right: 30px;
            text-decoration: none;
            color: #333;
            font-weight: bold;
            font-size: 16px;
        }
        nav a:hover {
            color: #7289da;
        }
        .hero-section {
            display: flex;
            flex-direction: column; 
            justify-content: center; 
            align-items: center; 
            padding: 60px 20px;
            background-color: #ECF0F1;
            margin-top: 40px;
            text-align: center; 
        }
        .hero-section h2 {
            font-size: 30px;
            color: #7289da;
            font-weight: bold;
        }
        .hero-section p {
            font-size: 18px;
            color: #555;
            max-width: 600px;
            margin: 20px 0;
            line-height: 1.6;
        }
        .cta-btn {
            padding: 15px 40px;
            background-color: #7289da;
            color: white;
            font-size: 18px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }
        .cta-btn:hover {
            background-color:  #7289da; 
        }
        .feature-section {
            display: flex;
            justify-content: space-around;
            align-items: center;
            background-color: white;
            padding: 50px 20px;
            margin-top: 50px;
        }
        .feature-box {
            text-align: center;
            width: 30%;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            transition: transform 0.3s ease;
        }
        .feature-box:hover {
            transform: scale(1.05);
        }
        .feature-box h3 {
            font-size: 20px;
            margin-bottom: 10px;
        }
        footer {
            text-align: center;
            padding: 20px;
            background-color: #7289da;
            color: white;
        }
    </style>
</head>
<body>
    <header>
        <h1>Kasir Pintar</h1>
        <p>Manajemen Bisnis UMKM Jadi Mudah</p>
    </header>
    
    <nav>
        <!-- Add your nav links here -->
    </nav>
    
    <div class="hero-section">
        <h2>Kelola Bisnis UMKM Anda dengan Mudah</h2>
        <p>Kasir Pintar menawarkan solusi lengkap untuk bisnis Anda, dari manajemen stok hingga laporan keuangan otomatis, yang dapat membantu Anda mengelola usaha lebih efektif dan efisien.</p>
        <a href="{{ route('dashboard') }}" class="cta-btn">Mulai Sekarang</a>
    </div>
    
    <div class="feature-section">
        <div class="feature-box">
            <h3>Manajemen Stok</h3>
            <p>Kelola stok barang dengan mudah dan akurat.</p>
        </div>
        <div class="feature-box">
            <h3>Transaksi Cepat</h3>
            <p>Proses transaksi yang cepat dan efisien.</p>
        </div>
        <div class="feature-box">
            <h3>Laporan Keuangan</h3>
            <p>Dapatkan laporan lengkap dan real-time.</p>
        </div>
    </div>
    
    <footer>
        <p>&copy; Kasir Pintar </p>
    </footer>
</body>
</html>
