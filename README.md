# Konsep Dari Web Yang Saya Buat

Website yang saya buat ini merupakan sebuah buku tamu digital yang memiliki penampilan yang minimalis.

## Fitur Yang Tersedia

- **login**
- **Halaman admin**
- **Halaman Tamu(hanya bisa melihat)**
- **Authentication**
  - **Login**
- **Multi User**
  - **Admin**
    - Melihat Semua Data Tamu
    - Menambah Data Tamu
    - Mengedit Data Tamu
    - Menghapus Data Tamu
  - **Tamu**
    - Melihat Semua Data Tamu
- **Login**
- **Logout**
- **Pencarian Halaman Halaman Admin**
  - Mencari Tamu

## Akun Default Untuk Pengujian

- **Admin**
  - Email: `admin@gmail.com`
  - Password: `admin'
  
- **Petugas**
  - Email: `tamu@gmail.com`
  - Password: `123456`
  
### ERD
![ERD Diagram](https://github.com/Bimz258/tugas-ukk/raw/main/erd.png)

### UML Diagram Case
![ERD Diagram](https://github.com/Bimz258/tugas-ukk/raw/main/uml.png)

## Teknologi Yang Digunakan
- **Laravel 10**
- **Bootstrap 5**

## Persyaratan Untuk Melakukan Instalasi
- **PHP 8.1.0** & Web Server (Apache)
- **Database**: MariaDB
- **Web Browser**: Chrome, atau Firefox

## Instalasi

1. Clone Repositori:
   ```bash
   git clone https://github.com/FajrilMaulid/ukk-perpus.git
   cd ukk-perpus

2.Install dependencies:
composer install

3.Copy file .env:
cp .env.example .env

4.Konfigurasi Database pada file .env:
Ganti Database Name Menjadi Nama Sql

5.Melakukan Migrasi dan menyambungkan storage:
php artisan key:generate
php artisan storage:link
php artisan migrate --seed

6.Mulai Situs Web:
php artisan serve

### Web Dibuat Oleh Bima Putra Wahyudi

