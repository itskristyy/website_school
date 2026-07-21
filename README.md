<div align="center">
  <h1>🏫 Sistem Informasi Web Sekolah Skanifo</h1>
  <p>Sistem Informasi Manajemen Portal Sekolah Berbasis Web dengan PHP Native dan MySQL</p>
</div>

---

## 📖 Deskripsi Projek

**Web Sekolah Skanifo** adalah sebuah portal informasi dan sistem manajemen sekolah (*School Management System*) sederhana namun komprehensif. Dibangun menggunakan arsitektur **PHP Native** dan **MySQL**, aplikasi ini memisahkan secara jelas antara **Halaman Publik (Frontend)** untuk pengunjung dan **Panel Admin (Backend Dashboard)** untuk pengelola. 

Sistem ini didesain secara khusus untuk mengelola data operasional sekolah dengan antarmuka yang modern, bersih, dan responsif.

---

## 🚀 Fitur Utama (Key Features)

### 🌍 1. Halaman Publik (Frontend)
- **Landing Page Interaktif**: Beranda, profil sekolah, dan program keahlian.
- **Direktori Terintegrasi**: Publikasi data spesifik untuk Guru, Siswa, dan Alumni dalam bentuk *Card UI* yang modern.
- **Portal Berita & Pengumuman**: Menampilkan pembaruan kegiatan dan berita sekolah.
- **Buku Tamu (Guestbook)**: Fasilitas interaksi bagi pengunjung untuk mengirim pesan.

### 🔒 2. Panel Admin (Backend Dashboard)
- **Sistem Autentikasi**: Proteksi panel admin menggunakan Login (Enkripsi password MD5).
- **CRUD Terpusat**: Fungsionalitas *Create, Read, Update, Delete* penuh untuk mengelola:
  - Data Tenaga Pendidik (Guru)
  - Data Peserta Didik (Siswa)
  - Data Lulusan (Alumni)
  - Data Publikasi Berita
  - Manajemen Pengguna (Admin)
- **Desain Sidebar Dinamis**: Navigasi panel yang efisien berbasis *collapse menu*.

---

## 🛠️ Teknologi yang Digunakan (Tech Stack)

| Kategori | Teknologi | Deskripsi |
| :--- | :--- | :--- |
| **Backend Core** | `PHP 8.x` | Logika pemrosesan aplikasi dan manajemen form |
| **Database** | `MySQL` / `MariaDB` | Relational Database Management System (RDBMS) |
| **Frontend Framework** | `Bootstrap 5.3` | Framework responsif berbasis komponen CDN |
| **Design System** | `Skanifo UI` | Kustomisasi variabel `--skn-primary`, `--skn-amber` |
| **Tipografi & Ikon** | `Google Fonts` & `Bootstrap Icons` | Space Grotesk, IBM Plex Mono, Public Sans |

---

## 🗄️ Skema Database (Database Schema)

Database **`db_school`** memiliki 5 tabel relasional yang diatur sebagai berikut:

### 1. Data Manajemen (*Management Data*)
| Tabel | Primary Key | Deskripsi Kolom |
| :--- | :--- | :--- |
| **`tb_user`** | `id_user` | `username` (Login), `nip` (NIP Admin), `password` (MD5 Hash) |
| **`tb_berita`** | `id_berita` | `judul_berita`, `url_image`, `deskripsi_berita`, `kategori_berita`, `link_berita`, `created_at`, `updated_at` |
| **`tb_guestbook`**| `id_message` | `email`, `nama`, `message`, `createdAt` |

### 2. Data Direktori (*Directory Data*)
| Tabel | Primary Key | Deskripsi Kolom |
| :--- | :--- | :--- |
| **`tb_guru`** | `id_guru` | `nama_guru`, `guru_jurusan`, `nip` |
| **`tb_siswa`**| `id_siswa` | `nama_siswa`, `siswa_jurusan`, `nipd` |
| **`tb_alumni`**| `id_alumni`| `nama_alumni`, `alumni_jurusan`, `tahun_lulus` |

---

## 📂 Struktur Direktori (Directory Architecture)

Projek ini menerapkan pemisahan konsep MVC (*Model-View-Controller*) ringan secara terstruktur:

```text
website_school/
├── assets/                     # Aset Statis
│   ├── css/style.css           # Token desain Skanifo UI
│   └── js/main.js              # Interaktivitas kustom
├── components/                 # Reusable UI (Sidebar)
├── function/                   # Backend Logic (Controller & Model)
│   ├── connect.php             # Jembatan Database
│   ├── function_auth/          # Logika Login & Session
│   ├── function_guru/          # Logika Pemrosesan CRUD Guru
│   └── (function_lainnya)      # ... (Siswa, Alumni, Berita, User, dsb.)
├── page/                       # Lapisan Tampilan (View)
│   ├── dashboard/              # Halaman Dashboard Tertutup (Admin)
│   ├── direktori/              # Halaman Publik Spesifik
│   └── page_(entitiy)/         # Halaman Form Ubah/Edit Spesifik
├── index.php                   # Entry Point / Halaman Utama
└── login.php                   # Portal Autentikasi Admin
```

---

## ⚙️ Panduan Instalasi (Installation Guide)

Untuk menjalankan aplikasi ini di lingkungan lokal Anda, ikuti instruksi instalasi berikut:

### 1. Kebutuhan Sistem (*Prerequisites*)
* Pastikan Anda telah menginstal **Laragon**, **XAMPP**, atau paket server Apache/Nginx sejenis.
* Diperlukan PHP versi >= 8.0 dan server database MySQL.

### 2. Langkah Setup
1. **Kloning/Salin Repositori**
   Letakkan *folder* projek ini (`website_school`) ke dalam direktori root server lokal Anda.
   * *Laragon*: `C:\laragon\www\website_school`
   * *XAMPP*: `C:\xampp\htdocs\website_school`

2. **Inisialisasi Database**
   * Buka *Database Client* Anda (phpMyAdmin, DBeaver, atau HeidiSQL).
   * Buat database baru dan beri nama **`db_school`**.
   * Lakukan impor data (`Import`) dari file **`db_school (1).sql`** (atau `db_school.sql` jika tersedia).

3. **Konfigurasi Akses Database**
   Buka file `function/connect.php`. Sesuaikan kredenial dengan server lokal Anda.
   ```php
   $host = "localhost";
   $user = "root";       // Ganti jika username DB Anda berbeda
   $pass = "";           // Ganti jika DB Anda menggunakan password
   $db   = "db_school";
   ```

4. **Jalankan Aplikasi**
   Buka browser web Anda dan navigasikan ke alamat URL lokal Anda:
   * **Halaman Publik**: `http://localhost/website_school/`
   * **Panel Admin**: `http://localhost/website_school/login.php`

---
*Dibuat untuk keperluan sistem informasi digital sekolah Skanifo.* 🚀
