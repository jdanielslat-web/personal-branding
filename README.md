# Personal Branding Website

## Deskripsi Proyek

Personal Branding Website merupakan website portofolio pribadi yang dikembangkan menggunakan Laravel 13 untuk memenuhi tugas AFL-1.

Website ini dibuat untuk memperkenalkan profil saya sebagai mahasiswa Informatika, menampilkan proyek yang pernah dikerjakan, serta membagikan artikel seputar teknologi, pemrograman, dan kehidupan mahasiswa.

## Fitur Website

### 1. Home (Beranda)
- Menampilkan nama dan profil pemilik website.
- Menampilkan gambar profil atau avatar.
- Menampilkan deskripsi singkat dan minat pribadi.
- Menyediakan navigasi menuju Portfolio dan Blog.

### 2. About (Tentang Saya)
- Menampilkan informasi pribadi.
- Menampilkan latar belakang pendidikan.
- Menampilkan daftar keahlian.
- Menampilkan bidang minat.

### 3. Portfolio
- Menampilkan minimal 3 proyek dalam bentuk kartu.
- Menampilkan gambar dan kategori proyek.
- Menampilkan deskripsi setiap proyek.
- Menampilkan teknologi yang digunakan dalam setiap proyek.

Proyek yang ditampilkan:
1. StudyBuddy: Aplikasi untuk membantu mahasiswa mengatur kegiatan belajar.
2. Stockku: Website untuk mengelola dan memantau stok barang.
3. MindCare: Konsep board game bertema kesadaran kesehatan mental.

### 4. Blog
- Menampilkan minimal 5 artikel.
- Menampilkan gambar, judul, kategori, dan tanggal publikasi.
- Menampilkan ringkasan setiap artikel.
- Menyediakan tombol Read More.
- Menyediakan halaman detail untuk setiap artikel.

### 5. Contact (Kontak)
- Menampilkan informasi email.
- Menyediakan tautan GitHub.
- Menyediakan tautan LinkedIn.

## Teknologi yang Digunakan

- PHP 8.5
- Laravel 13
- HTML5
- CSS3
- Blade Template
- SQLite
- Git dan GitHub

## Konsep Laravel yang Diimplementasikan

Beberapa konsep Laravel yang digunakan dalam pengembangan website ini:

- Routing untuk mengatur navigasi halaman.
- Controller untuk mengelola data dan logika aplikasi.
- Blade Template untuk menampilkan halaman website.
- Blade Layout untuk menggunakan struktur halaman yang sama.
- Blade Components untuk membuat komponen yang dapat digunakan kembali.
- Blade Directives seperti `@foreach`, `@section`, dan `@yield`.
- Dynamic Data Rendering untuk menampilkan data dari Controller.

## Struktur Folder Project

```text
personal-branding/
├── app/
│   └── Http/
│       └── Controllers/
│           ├── HomeController.php
│           ├── PageController.php
│           ├── PortfolioController.php
│           └── BlogController.php
├── database/
├── public/
│   └── images/
├── resources/
│   └── views/
│       ├── components/
│       │   ├── navbar.blade.php
│       │   ├── footer.blade.php
│       │   ├── portfolio-card.blade.php
│       │   └── blog-card.blade.php
│       ├── layouts/
│       │   └── app.blade.php
│       ├── home.blade.php
│       ├── about.blade.php
│       ├── portfolio.blade.php
│       ├── blog.blade.php
│       ├── blog-detail.blade.php
│       └── contact.blade.php
├── routes/
│   └── web.php
├── .env.example
├── .gitignore
├── artisan
├── composer.json
├── composer.lock
└── README.md
```

## Cara Instalasi dan Menjalankan Project

### Persyaratan

Pastikan perangkat sudah memiliki:
- PHP 8.3 atau lebih baru.
- Composer.
- Git.

### 1. Clone Repository

```bash
git clone https://github.com/jdanielslat-web/personal-branding.git
```

### 2. Masuk ke Folder Project

```bash
cd personal-branding
```

### 3. Install Dependencies

```bash
composer install
```

### 4. Konfigurasi Environment

Salin file `.env.example` menjadi `.env`:

```powershell
Copy-Item .env.example .env
```

### 5. Generate Application Key

```bash
php artisan key:generate
```

### 6. Persiapkan Database SQLite

Buat file database SQLite jika belum tersedia:

```powershell
New-Item -ItemType File -Path database/database.sqlite -Force
```

Pastikan konfigurasi database pada `.env` menggunakan:

```env
DB_CONNECTION=sqlite
```

### 7. Jalankan Database Migration

```bash
php artisan migrate
```

### 8. Jalankan Laravel Development Server

```bash
php artisan serve
```

Buka website melalui browser:

http://127.0.0.1:8000

## Penggunaan AI

ChatGPT digunakan sebagai alat bantu selama proses pengembangan project, terutama untuk memahami konsep Laravel, memperoleh panduan penulisan kode, membantu mengatasi error, serta menyusun contoh konten website.

Seluruh implementasi diperiksa dan diuji selama proses pengerjaan.

## Identitas Pengembang

**Nama:** Julio Slat

**Program Studi:** Informatika

**Universitas:** Universitas Ciputra