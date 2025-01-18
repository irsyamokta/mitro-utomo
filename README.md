# Mitro Utomo

Toko Mitro Utomo adalah penyedia unggulan pupuk organik terbaik di Indonesia. Pupuk organik kami tidak hanya mampu memperbaiki tanah yang rusak, tetapi juga memberikan nutrisi yang kaya untuk mendukung pertumbuhan tanaman yang optimal. Dengan penggunaan pupuk organik dari Toko Mitro Utomo, Anda dapat menghasilkan tanaman dengan kualitas yang luar biasa dan sehat. Mari tingkatkan kesuburan tanah dan kualitas hasil pertanian Anda bersama kami.

## Features

- **Multirole autentikasi**: Memiliki peran sebagai Customer dan Admin dengan hak akses yang berbeda.
- **Keranjang**: Memudahkan Customer menyimpan produk ke keranjang sebelum checkout.
- **Payment Gateway**: Integrasi dengan Midtrans untuk kemudahan pembayaran.
- **Manajemen User**: Memudahkan Admin dalam mengelola user.
- **Manajemen Order**: Memudahkan Admin dalam mengelola order.
- **Manajemen Produk**: Memudahkan Admin dalam mengelola produk.
- **Manajemen Konten**: Memudahkan Admin dalam mengelola konten video dan dokumen wawasan.
- **Responsive**: Tampilan web yang optimal di berbagai perangkat.


## Tech Stack

- **Backend**: Laravel
- **Frontend**: Tempalating Blade Engine, TailwindCSS for Styling
- **Database**: MySQL
- **Others**: Javascript


## Demo Project

https://mitroutomo.com/


## Preview

![App Screenshot](https://github.com/irsyamokta/assets/blob/2419b30cfacf70bba305ede8e65af84dc92c6870/mitroutomo/1.png)

![App Screenshot](https://github.com/irsyamokta/assets/blob/2419b30cfacf70bba305ede8e65af84dc92c6870/mitroutomo/2.png)

![App Screenshot](https://github.com/irsyamokta/assets/blob/2419b30cfacf70bba305ede8e65af84dc92c6870/mitroutomo/3.png)

![App Screenshot](https://github.com/irsyamokta/assets/blob/2419b30cfacf70bba305ede8e65af84dc92c6870/mitroutomo/4.png)

![App Screenshot](https://github.com/irsyamokta/assets/blob/2419b30cfacf70bba305ede8e65af84dc92c6870/mitroutomo/5.png)

![App Screenshot](https://github.com/irsyamokta/assets/blob/2419b30cfacf70bba305ede8e65af84dc92c6870/mitroutomo/6.png)

![App Screenshot](https://github.com/irsyamokta/assets/blob/2419b30cfacf70bba305ede8e65af84dc92c6870/mitroutomo/7.png)

![App Screenshot](https://github.com/irsyamokta/assets/blob/2419b30cfacf70bba305ede8e65af84dc92c6870/mitroutomo/8.png)

![App Screenshot](https://github.com/irsyamokta/assets/blob/2419b30cfacf70bba305ede8e65af84dc92c6870/mitroutomo/9.png)

## Panduan Instalasi
Ikuti langkah-langkah berikut untuk menginstal Mitro Utomo di lokal Anda:
<br>Nb. Pastikan lokal server Anda sudah berjalan, bisa menggunakan XAMPP, Laragon, atau sejenisnya.

1. **Clone Repository**
   ```bash
   git clone https://github.com/irsyamokta/mitro-utomo.git
   
2. **Masuk ke Direktori Proyek Setelah repositori ter-clone**
   ```bash
   cd mitro-utomo
    
3. **Install Dependencies Pastikan Anda sudah menginstal Composer dan Node.js**
   ```bash
   composer install
   npm install
   
4. **Konfigurasi .env**
   ```bash
   cp .env.example .env
   
5. **Generate Key Aplikasi**
   ```bash
   php artisan key:generate
   
6. **Migrasi Database**
   ```bash
   php artisan migrate
   
7. **Buat Storage Link**
   ```bash
   php artisan storage:link
   
8. **Install NPM Assets**
   ```bash
   npm run dev
   
9. **Jalankan Server**
   ```bash
   php artisan serve

10. Akses aplikasi melalui browser di alamat http://localhost:8000.

## Issue
Jika Anda menemui masalah atau membutuhkan bantuan lebih lanjut, silakan buka issue di GitHub atau hubungi saya.

## Authors

- [@irsyamokta](https://github.com/irsyamokta)
