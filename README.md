# 📚 Perpustakaan Buku Digital

Aplikasi web **Perpustakaan Buku Digital** merupakan aplikasi berbasis web yang dibuat untuk memenuhi tugas Ujian Akhir Semester (UAS). Aplikasi ini dibangun menggunakan **CodeIgniter 4** dengan database **MySQL**.

Aplikasi digunakan untuk mengelola data buku secara digital dengan menyediakan fitur tambah, lihat, ubah, hapus, pencarian, pagination, serta penanganan session.

## 👨‍💻 Informasi Project

| Keterangan         | Detail                                         |
| ------------------ | ---------------------------------------------- |
| Nama Aplikasi      | Perpustakaan Buku Digital                      |
| Framework          | CodeIgniter 4                                  |
| Bahasa Pemrograman | PHP                                            |
| Database           | MySQL                                          |
| Database Name      | `perpustakaan_digital`                         |
| Web Server         | XAMPP                                          |
| Repository         | GitHub                                         |
| Link Presentasi    | https://youtu.be/xIqfdgmBv-0                   |

## 🚀 Fitur Aplikasi

### 1. Create

Pengguna dapat menambahkan data buku baru melalui form tambah buku. Data yang dimasukkan disimpan ke database MySQL.

### 2. Read

Aplikasi menampilkan daftar buku yang tersimpan di database dalam bentuk tabel sehingga data dapat dilihat dan dikelola dengan mudah.

### 3. Update

Pengguna dapat mengubah atau memperbarui informasi buku yang sudah tersimpan.

### 4. Delete

Pengguna dapat menghapus data buku yang sudah tidak diperlukan.

### 5. Session

Aplikasi menggunakan session untuk menyimpan informasi pengguna selama proses penggunaan aplikasi dan membantu mengatur status akses pada halaman tertentu.

### 6. Searching

Fitur pencarian digunakan untuk mencari buku berdasarkan informasi yang tersedia sehingga pengguna tidak perlu mencari data secara manual pada seluruh tabel.

### 7. Pagination

Data buku ditampilkan menggunakan pagination agar daftar buku yang banyak tetap mudah dibaca dan tidak ditampilkan dalam satu halaman secara keseluruhan.

## 🗄️ Database

Nama database:

```text
perpustakaan_digital
```

Database menggunakan MySQL yang dijalankan melalui XAMPP/phpMyAdmin.

File database hasil export tersedia di repository:

```text
perpustakaan_digital.sql
```

File tersebut dapat digunakan untuk membuat kembali database aplikasi.

## ⚙️ Konfigurasi Database

Konfigurasi database CodeIgniter dilakukan melalui file `.env`.

Contoh konfigurasi:

```text
database.default.hostname = localhost
database.default.database = perpustakaan_digital
database.default.username = root
database.default.password =
database.default.DBDriver = MySQLi
database.default.port = 3306
```

> File `.env` tidak disertakan ke repository karena dapat berisi konfigurasi lokal.

## ▶️ Cara Menjalankan Aplikasi

### 1. Jalankan XAMPP

Aktifkan:

* Apache
* MySQL

### 2. Pastikan project berada di

```text
C:\xampp\htdocs\perpustakaan-digital
```

### 3. Buat database

Buka:

```text
http://localhost/phpmyadmin
```

Buat database:

```text
perpustakaan_digital
```

Kemudian import file:

```text
perpustakaan_digital.sql
```

### 4. Jalankan aplikasi

Aplikasi dapat diakses melalui:

```text
http://localhost/perpustakaan-digital/public
```

Jika menggunakan PHP Spark, jalankan dari folder project:

```bash
php spark serve
```

Kemudian akses:

```text
http://localhost:8080
```

## 📁 Struktur Project

```text
perpustakaan-digital/
├── app/
│   ├── Controllers/
│   ├── Models/
│   └── Views/
├── public/
├── tests/
├── writable/
├── composer.json
├── composer.lock
├── spark
├── README.md
└── perpustakaan_digital.sql
```

## 🖥️ Tampilan Aplikasi

### Halaman Utama / Dashboard

> Masukkan screenshot halaman utama aplikasi di bagian ini.

### Halaman Data Buku

> Masukkan screenshot daftar buku di bagian ini.

### Form Tambah Buku

> Masukkan screenshot form tambah buku di bagian ini.

### Form Edit Buku

> Masukkan screenshot form edit buku di bagian ini.

### Fitur Pencarian dan Pagination

> Masukkan screenshot fitur searching dan pagination di bagian ini.

## 🎥 Video Presentasi

Video presentasi aplikasi akan diunggah ke YouTube sebagai bagian dari persyaratan UAS.

**Link YouTube:**

https://youtu.be/xIqfdgmBv-0


## 📦 Pengumpulan

Repository ini berisi:

* Source code aplikasi CodeIgniter 4
* Database MySQL dalam format `.sql`
* README/dokumentasi project
* Konfigurasi dan petunjuk menjalankan aplikasi

## 🎓 Keterangan

Project ini dibuat untuk memenuhi tugas **Ujian Akhir Semester (UAS)** dengan topik:

**"Perpustakaan Buku Digital"**

Teknologi utama yang digunakan adalah **CodeIgniter 4, PHP, MySQL, XAMPP, HTML, CSS, dan JavaScript.**
