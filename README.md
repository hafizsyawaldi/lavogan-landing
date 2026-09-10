# Sisfo Lavogan Landing Page

Landing page untuk Sistem Informasi Lavogan (Sisfo Lavogan), sebuah platform internal yang digunakan untuk mendukung pengelolaan informasi dan pelaksanaan program pelatihan vokasi.

Project ini dibuat menggunakan Laravel dan difokuskan terlebih dahulu pada rancangan serta implementasi User Interface (UI) landing page sebelum masuk ke tahap integrasi data dan fitur lainnya.

## Tech Stack

- PHP 8.3+
- Laravel 11
- Blade
- CSS
- JavaScript
- Vite
- Node.js
- Composer

## Fitur Saat Ini

Landing page saat ini berisi beberapa bagian utama:

- Navigation bar
- Hero section
- Tentang Sisfo Lavogan
- Fitur utama sistem
- Statistik dan informasi umum
- Program Lavogan
- Call to Action untuk mengakses sistem
- Footer

Untuk tahap awal, seluruh data yang ditampilkan masih berupa data statis sebagai mockup UI.

## Struktur Project

Beberapa direktori dan file utama yang digunakan:

```text
lavogan-landing/
├── app/
├── bootstrap/
├── config/
├── database/
├── public/
├── resources/
│   ├── css/
│   │   └── app.css
│   ├── js/
│   │   └── app.js
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php
│       └── home.blade.php
├── routes/
│   └── web.php
├── .env
├── composer.json
├── package.json
├── vite.config.js
└── README.md
```

Blade Template

Project menggunakan Blade sebagai templating engine Laravel.

```
app.blade.php
```

File ini digunakan sebagai layout atau template utama halaman.

Layout berisi struktur umum yang digunakan oleh halaman, seperti:

HTML document structure
Navigation
CSS dan JavaScript
Struktur dasar halaman
Footer

```
home.blade.php
```

File ini merupakan child view yang menggunakan app.blade.php sebagai layout.

Isi ```home.blade.php``` berfokus pada konten landing page seperti:

Hero
Tentang Sisfo Lavogan
Fitur
Statistik
Program
Call to Action

Dengan konsep Blade inheritance, bagian yang bersifat umum dapat ditempatkan di layout, sedangkan konten spesifik halaman ditempatkan di child view.

Routing

Routing halaman utama didefinisikan pada:

routes/web.php

Route utama saat ini:

```
Route::get('/', function () {
    return view('home');
});
```

Route tersebut akan menampilkan home.blade.php ketika pengguna mengakses halaman utama aplikasi.

Frontend Assets

Asset frontend dikelola menggunakan Vite.

File utama:

```
resources/css/app.css
resources/js/app.js
```

CSS digunakan untuk mengatur tampilan dan responsive layout, sedangkan JavaScript digunakan untuk kebutuhan interaksi pada sisi frontend.

Vite digunakan untuk memproses dan menyediakan asset frontend selama proses development.

Requirements

Sebelum menjalankan project, pastikan perangkat sudah memiliki:

PHP 8.3 atau lebih baru
Composer
Node.js
NPM

Cek versi dengan:
```
php --version
composer --version
node --version
npm --version
```

Installation
1. Clone Repository

Clone repository ke komputer:

```
git clone https://github.com/hafizsyawaldi/lavogan-landing.git
```

Masuk ke direktori project:
```
cd lavogan-landing
```

2. Install PHP Dependencies

Install dependency Laravel menggunakan Composer:

```
composer install
```

Perintah ini akan membaca composer.json dan meng-install dependency yang dibutuhkan ke dalam folder vendor/.

3. Setup Environment

Buat file .env berdasarkan .env.example:

```
cp .env.example .env
```

Generate application key:

```
php artisan key:generate
```

4. Install Frontend Dependencies

Install dependency frontend:

```
npm install
```

Perintah ini akan membuat folder node_modules/ berdasarkan dependency yang tercantum pada package.json.

5. Jalankan Development Server

Jalankan Laravel:

```
php artisan serve
```

Secara default aplikasi dapat diakses melalui:

http://127.0.0.1:8000

Untuk development frontend, jalankan Vite pada terminal lain:

```
npm run dev
```
Development Workflow

Saat melakukan development, biasanya diperlukan dua terminal.

Terminal 1 — Laravel
```
php artisan serve
```
Terminal 2 — Vite
```
npm run dev
```
Laravel digunakan untuk menjalankan aplikasi backend dan routing, sedangkan Vite digunakan untuk memproses asset frontend seperti CSS dan JavaScript.

Database

Pada tahap pengembangan UI saat ini, landing page belum melakukan integrasi dengan database untuk mengambil data dinamis.

Database dan integrasi data akan dikembangkan pada tahap berikutnya sesuai kebutuhan sistem.

API Integration

Landing page saat ini masih menggunakan data statis untuk kebutuhan desain dan validasi UI.

Integrasi API belum diterapkan pada tahap ini.

Tahap selanjutnya dapat mencakup:

Pengambilan data statistik dari API
Pengambilan informasi program
Pengambilan data berita
Integrasi dengan sistem utama Sisfo Lavogan
Responsive Design

Landing page dirancang agar dapat digunakan pada berbagai ukuran layar, termasuk:

Desktop
Tablet
Mobile

Responsive layout diterapkan menggunakan CSS dan media queries.

Project Status

Project saat ini berada pada tahap:

UI / Frontend Development

Fokus pengembangan:

 Setup Laravel
 Setup Blade
 Setup routing
 Setup Vite
 Landing page layout
 Responsive navigation
 Hero section
 Informasi Sisfo Lavogan
 Fitur utama
 Statistik
 Program
 Call to Action
 Footer
 Integrasi API
 Integrasi database
 Data dinamis
 Integrasi dengan sistem utama
