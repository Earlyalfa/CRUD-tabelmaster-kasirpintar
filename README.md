## PBL Kelompok 6 - Aplikasi Kasir Pintar (Laravel)
- **Andrian Roby Maulana** (362358302168)
- **Early Alfa Sheilawati** (362358302105)
- **Ella Dwi Maulina** (362358302098)
- **Lipiya Agustina** (362358302049)

Proyek ini terinspirasi dari fitur-fitur utama "Kasir Pintar", yang dirancang untuk memudahkan pelaku usaha dalam mengelola stok barang, transaksi penjualan, hingga pemantauan laporan keuangan secara real-time.

## Teknologi yang Digunakan
- **Framework**: Laravel 11
- **Database**: MySQL
- **Frontend**: Blade Templating, Tailwind CSS / Bootstrap 
- **Icons**: FontAwesome / Heroicons

## Pastikan terinstall
- **PHP >= 8.2**
- **Composer**
- **MySQL / MariaDB**
- **Node.js & NPM**

## Cara Menjalankan 
1. **Install**
```
composer install
npm install && npm run build
```
2. **Environment & Database**
```
cp .env.example .env
php artisan key:generate
```
3. **Konfigurasi Environment**
```
cp .env.example .env
php artisan key:generate
```
3. **Migrasi Database & Seeder**
```
php artisan migrate --seed
```
3. **Jalankan Serve**
```
php artisan serve
```

## Struktur Database (Tabel)
- **Manajemen Inventaris**:
`produks`: Menyimpan informasi produk, kode produk, harga beli, harga jual, dan stok.
`kategori`: Pengelompokan produk untuk memudahkan manajemen item.
- **Operasional Kasir**:
`ransaksis`: Mencatat detail penjualan, termasuk jumlah, sub-total, total transaksi, hingga metode dan status pembayaran.
`diskon`: Pengelolaan promo atau potongan harga dengan tanggal mulai/berakhir dan minimal pembelian.
- **Aktor**:
`pegawais`: Mencatat data karyawan beserta jadwal shift (awal dan akhir).
`supliers`: Database pemasok barang mencakup alamat, email, dan kontak.
`users`: Autentikasi pengguna sistem.

# Fitur Aplikasi
- **Manajemen Produk & Kategori**: CRUD lengkap untuk inventaris barang.
- **Sistem Diskon Otomatis**: Mendukung diskon berbasis status aktif dan periode waktu tertentu.
- **Manajemen SDM**: Pemantauan shift kerja pegawai.
- **Tracking Transaksi**: Pencatatan riwayat penjualan dengan detail dan metode pembayaran.
- **Manajemen Supplier**: Hubungan data terpusat untuk rantai pasokan.