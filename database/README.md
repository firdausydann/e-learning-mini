# UAS MATA KULIAH PEMROGRAMAN FRAMEWORK
DISUSUN DAN DIBUAT OLEH :
Firdaus Wildan Maulana.
Manajemen Informatika/4.
2023160019
----------------------
Jenis Tugas: Individu
Tujuan: Menyelesaikan Ujian Akhir Semester (UAS) Mata Kuliah Pemrograman Framework
# Stack : Laravel Blade.

# Aplikasi E-Learning Mini
Fitur:
Autentikasi pengguna
Admin bisa upload materi (PDF, video, link)
User bisa melihat materi dan mengunduhnya
Progress belajar per user

# About E-Learning Mini

E-Learning Mini adalah aplikasi berbasis web yang dibangun dengan Laravel. Aplikasi ini dirancang untuk memfasilitasi proses pembelajaran digital, di mana admin dapat mengunggah materi (dalam bentuk PDF, video, atau link), dan user dapat mengakses serta mengunduh materi tersebut.

# Fitur Utama

- Autentikasi pengguna (Login/Register)
- Role-based access (Admin & User)
- Admin dapat:
  - Upload materi pembelajaran berupa PDF, video, atau link
  - Kelola daftar materi (edit, hapus)
- User dapat:
  - Melihat daftar materi yang tersedia
  - Mengunduh file PDF/video
  - Mengakses link materi

# Teknologi yang Digunakan

- Laravel 12
- Laravel Breeze (Autentikasi)
- Tailwind CSS (Frontend styling)
- MySQL (Database)
- PHP 8.2+
- Vite (Asset bundler)

# Instalasi

# 1. Clone repository
```bash
git clone https://github.com/username/e-learning-mini.git
cd e-learning-mini

# 2. Composer
composer install
npm install
npm run build
# 3. Copy Env
cp .env.example .env
# 4. Generete key
php artisan key:generate
# 5. Migrasi & seed database:
php artisan migrate --seed
# 6. Link storage (untuk file materi):
php artisan storage:link
# 7. Jalankan server lokal:
php artisan serve
Akses: http://127.0.0.1:8000
```

# LOGIN
Role : Admin
gmail: admin @gmail.com
pass : admin123

Role : User
gmail: user@gmail.com
pass : user1234

# File Database

File database hasil export (`.sql`) ada di folder database:
e-learning-mini.sql
impor ke mysql dengan nama database e-learning-mini.sql


# Screenshoot 
Halaman Dashboard
![Dashboard](public/screenshots/dashboard.png)

Halaman Materi
![Materi](public/screenshots/materi.png)






----------------------------

# Lisensi

Proyek ini dibuat untuk keperluan Ujian Akhir Semester Mata Kuliah Pemrograman Framework.  
Semua kode dan konten hanya untuk tujuan akademik.

© 2025 — E-Learning Mini by Mas. All rights reserved.
