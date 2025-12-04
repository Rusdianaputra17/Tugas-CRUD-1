# Tugas-CRUD-1
Implementasi Aplikasi Back-End CRUD Sederhana

1. Aplikasi CRUD Mahasiswa adalah sebuah aplikasi sederhana berbasis PHP yang dirancang untuk mengelola data mahasiswa dalam sebuah sistem informasi akademik. Aplikasi ini menggunakan pendekatan dasar pemrograman web dan basis data dengan menerapkan operasi CRUD (Create, Read, Update, Delete).

Entitas utama dalam aplikasi ini adalah Mahasiswa, yang memiliki beberapa atribut penting seperti ID, Nama, NIM, Program Studi, Angkatan, dan Status. Melalui aplikasi ini, pengguna dapat:
 - Menambah data mahasiswa baru
 - Melihat daftar mahasiswa dalam bentuk tabel
 - Mengubah informasi mahasiswa apabila terdapat kesalahan atau pembaruan
 - Menghapus data mahasiswa yang sudah tidak diperlukan
 Entitas yang Dipilih
    Entitas: Mahasiswa
        Atribut:
            - id — integer, primary key, auto increment  
            - nama — teks  
            - nim — teks, unik  
            - prodi — pilihan (Informatika, Sistem Informasi, Teknik Komputer)  
            - angkatan — angka  
            - status — pilihan (aktif / nonaktif)

2. Bahasa dan Tools
    - PHP: 8.4.13 
    - Database: MySQL 

       crud-mahasiswa
    
        config

            Database.php
        
        src/

            Mahasiswa.php

            MahasiswaController.php

            MahasiswaRepository.php
        
        public/
        
            index.php

            create.php

            edit.php

            delete.php

            style.css
        
        schema.sql
   
   Penjelasan Class Utama antara lain:
   - Class Database adalah komponen yang bertugas untuk mengatur koneksi antara aplikasi PHP dengan database MySQL. Class ini sangat penting karena tanpa koneksi, aplikasi tidak dapat menjalankan operasi CRUD (Create, Read, Update, Delete).
   - Entity (Mahasiswa) berfungsi sebagai model yang merepresentasikan data mahasiswa dalam bentuk objek, sehingga data dapat dikirim, diterima, dan diproses dengan rapi dan terstruktur di dalam aplikasi.
   - Class Repository berfungsi untuk menangani semua operasi CRUD ke database dengan menjalankan query SQL menggunakan koneksi PDO. Repository menjadi penghubung utama antara aplikasi dan tabel mahasiswa.

3. Import Database
    Gunakan file:
    schema.sql
    Isi schema:
    sql

    CREATE DATABASE crud_mahasiswa;

    USE crud_mahasiswa;

    CREATE TABLE mahasiswa (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nama VARCHAR(100) NOT NULL,
        nim VARCHAR(20) NOT NULL UNIQUE,
        prodi VARCHAR(50) NOT NULL,
        angkatan INT NOT NULL,
        status ENUM('aktif','nonaktif') DEFAULT 'aktif'
    );

Pengaturan Koneksi Database
    Edit file:
    config/Database.php
    Sesuaikan:
    php
    private $host = "localhost";
    private $db   = "crud_mahasiswa";
    private $user = "root";
    private $pass = "";   

Menjalankan Aplikasi
   php -S localhost:8000 -t public

Buka browser:
    http://localhost/crud-mahasiswa/public

4. Tambah 1 Data
    - Buka halaman Tambah  
    - Isi form  
    - Klik Simpan  
    - Data tampil di tabel  

Tampilkan Daftar Data
    - Akses halaman utama  
    - Semua data mahasiswa tampil di tabel

Ubah Data Tertentu
    - Klik Edit  
    - Ubah salah satu field  
    - Klik Update  
    - Data berubah di tabel  

Hapus Data
    - Klik Delete  
    - Konfirmasi OK  
    - Data hilang dari daftar  