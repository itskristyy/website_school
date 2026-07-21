# Dokumentasi Teknis & Implementasi - Web Sekolah

Projek ini adalah sebuah portal web sekolah sederhana berbasis PHP Native dan MySQL yang digunakan untuk menguji logika dasar database (*Logic Test*) serta menyediakan fungsionalitas CRUD (*Create, Read, Update, Delete*) untuk tiga fitur utama: **User (Pengguna/Admin)**, **Berita**, dan **Guestbook (Buku Tamu)**.

---

## 1. STRUKTUR DATABASE

Projek ini menggunakan database MySQL bernama `db_school` dengan 3 tabel utama:

### A. Tabel `tb_user`
Digunakan untuk menyimpan informasi admin atau pengguna sistem.
- `id_user` (INT, Primary Key, Auto Increment): ID unik pengguna.
- `username` (VARCHAR(400)): Username untuk login/identifikasi.
- `nip` (INT): Nomor Induk Pegawai.
- `password` (VARCHAR(40)): Password yang dienkripsi menggunakan MD5.

### B. Tabel `tb_berita`
Digunakan untuk menyimpan data berita sekolah.
- `id_berita` (INT, Primary Key, Auto Increment): ID unik berita.
- `judul_berita` (VARCHAR(255)): Judul berita.
- `url_image` (VARCHAR(900)): URL eksternal gambar berita.
- `deskripsi_berita` (TEXT): Isi detail berita.
- `kategori_berita` (ENUM): Kategori berita (`prestasi`, `pengumuman`, `artikel`, `fasilitas`, `lainnya`).
- `created_at` (TIMESTAMP): Waktu berita pertama kali dibuat.
- `updated_at` (TIMESTAMP): Waktu berita terakhir kali diperbarui.

### C. Tabel `tb_guestbook`
Digunakan untuk menampung pesan atau testimoni dari pengunjung.
- `id_message` (INT, Primary Key, Auto Increment): ID unik pesan.
- `email` (VARCHAR(400)): Email pengirim.
- `nama` (VARCHAR(500)): Nama pengirim.
- `message` (VARCHAR(500)): Isi pesan dari pengunjung.
- `createdAt` (VARCHAR(50)): Tanggal pengiriman pesan dengan format `dd-mm-yyyy` (WIB).

---

## 2. STRUKTUR DIREKTORI PROJEK

```text
web_sekolah/
│
├── function/                   # Berisi semua logika backend (PHP)
│   ├── connect.php             # Koneksi database utama
│   │
│   ├── function_berita/        # Logic CRUD Berita
│   │   ├── add_berita.php
│   │   ├── delete_berita.php
│   │   └── edit_berita.php
│   │
│   ├── function_guestbook/     # Logic Guestbook
│   │   └── add_message.php
│   │
│   └── function_user/          # Logic CRUD User
│       ├── add_user.php
│       ├── delete_user.php
│       └── edit_user.php
│
├── page/                       # Halaman formulir edit/ubah data
│   ├── page_berita/
│   │   └── ubah_berita.php     # Form edit berita
│   └── page_user/
│       └── ubah_user.php       # Form edit user
│
├── index.php                   # Halaman utama (Dashboard & Form Test)
├── db_school.sql               # Backup database MySQL
└── readme.md                   # Dokumentasi Projek
```

---

## 3. DOKUMENTASI LOGIKA TEKNIS (BACKEND LOGIC)

### A. Koneksi Database (`function/connect.php`)
Menghubungkan aplikasi PHP dengan server MySQL lokal menggunakan ekstensi `mysqli`.
- Menggunakan parameter: host (`localhost`), username (`root`), password (`""` / kosong), dan nama database (`db_school`).
- Jika koneksi gagal, sistem akan menghentikan eksekusi program dan menampilkan pesan error.

### B. Modul User (Pengguna)
1. **Tambah User (`function/function_user/add_user.php`)**:
   - Menerima input `username`, `nip`, dan `password` via method `POST`.
   - Mengenkripsi password menggunakan algoritma `md5()`.
   - Melakukan `INSERT` ke tabel `tb_user`.
   - Setelah berhasil, mengarahkan pengguna kembali ke `index.php`.
2. **Hapus User (`function/function_user/delete_user.php`)**:
   - Mengambil parameter `id_user` via method `GET` dari URL.
   - Menjalankan perintah `DELETE FROM tb_user WHERE id_user = '$id_user'`.
   - Melakukan redirect ke `index.php` dengan parameter status kiriman pesan (`?msg=berhasil` atau `?msg=gagal`).
3. **Ubah User (`page/page_user/ubah_user.php` & `function/function_user/edit_user.php`)**:
   - `ubah_user.php` mengambil data user berdasarkan `id_user` (dari `GET`) untuk ditampilkan di dalam input form sebagai *default value*.
   - Saat form dikirim, data baru beserta `id` dikirim ke `edit_user.php`.
   - `edit_user.php` melakukan enkripsi ulang password dengan `md5()` lalu mengeksekusi query `UPDATE`.

### C. Modul Berita
1. **Tambah Berita (`function/function_berita/add_berita.php`)**:
   - Menerima `judul_berita`, `url_image`, `deskripsi_berita`, dan `kategori_berita`.
   - Menyimpan tanggal saat ini (`Y-m-d`) pada kolom `created_at` dan `updated_at`.
   - Melakukan query `INSERT`.
2. **Hapus Berita (`function/function_berita/delete_berita.php`)**:
   - Menghapus baris data berdasarkan `id_berita` yang dikirim lewat URL (`GET`).
3. **Ubah Berita (`page/page_berita/ubah_berita.php` & `function/function_berita/edit_berita.php`)**:
   - Mengambil data lama berdasarkan `id_berita` untuk ditampilkan pada form edit berita.
   - Form mengarah ke `edit_berita.php` yang menjalankan query `UPDATE tb_berita SET ... WHERE id_berita = '$id_berita'`.

### D. Modul Guestbook (Buku Tamu)
1. **Tambah Pesan (`function/function_guestbook/add_message.php`)**:
   - Menetapkan zona waktu server ke `Asia/Jakarta` (`date_default_timezone_set`).
   - Mengambil tanggal saat pesan berhasil dikirim dengan format `dd-mm-yyyy` menggunakan `date('d-m-Y')`.
   - Melakukan query `INSERT` untuk menyimpan data pengirim beserta pesan dan waktu kirim ke `tb_guestbook`.
   - Mengarahkan kembali ke `index.php`.

---

## 4. DOKUMENTASI IMPLEMENTASI (FRONTEND & DISPLAY)

Fokus utama frontend pada projek ini berada di file `index.php` yang menggunakan CSS Utility Framework **Tailwind CSS** via CDN.

### A. Form Input & Pengiriman Data
- Semua form menggunakan method `POST` dan diarahkan ke file logika masing-masing di dalam folder `function/`.
- Validasi dasar menggunakan atribut HTML5 `required` pada input field.
- Pilihan kategori berita diimplementasikan menggunakan elemen `<select>` dengan opsi yang sesuai dengan tipe data `ENUM` di database.

### B. Tampilan Data Berita (Card Grid Layout)
- Data berita ditampilkan di bagian bawah halaman secara dinamis dalam bentuk layout kartu (*card*).
- Menggunakan Tailwind Grid System: `grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6`.
- Data gambar diambil langsung dari `url_image` yang dimasukkan pada database dan diatur agar responsif serta rapi (`w-full h-48 object-cover`).
- Setiap card dilengkapi dengan tombol aksi "Edit Berita" dan "Hapus Berita".

### C. Tampilan Data User dan Guestbook
- User dan Guestbook ditampilkan dalam format tabel HTML standar dengan kelas batas border (`border-collapse`, `border-b`) dari Tailwind.
- Baris tabel di-generate menggunakan perulangan PHP `while` dari hasil query database.

---

## 5. PANDUAN INSTALASI & MENJALANKAN PROJEK

Ikuti langkah-langkah berikut untuk menjalankan projek di komputer lokal Anda:

### Prasyarat
- Web Server Lokal (sangat direkomendasikan menggunakan **Laragon** atau **XAMPP**).
- PHP Versi 8.0 ke atas.
- MySQL / MariaDB database server.

### Langkah-Langkah Setup
1. **Copy Projek**: Letakkan folder `web_sekolah` ke dalam direktori root server lokal Anda:
   - Jika menggunakan Laragon: `C:\laragon\www\web_sekolah`
   - Jika menggunakan XAMPP: `C:\xampp\htdocs\web_sekolah`
2. **Import Database**:
   - Buka **phpMyAdmin** atau software database client Anda (seperti HeidiSQL / DBeaver).
   - Buat database baru dengan nama `db_school`.
   - Import file sql yang berada di `c:\laragon\www\web_sekolah\db_school.sql` ke dalam database `db_school` tersebut.
3. **Konfigurasi Database**:
   - Jika Anda memiliki konfigurasi username atau password database yang berbeda dari default (User: `root`, Pass: `""`), sesuaikan konfigurasinya pada file `function/connect.php`.
4. **Jalankan Aplikasi**:
   - Jalankan server Apache dan MySQL di Laragon/XAMPP Anda.
   - Buka browser dan akses alamat: `http://localhost/web_sekolah/index.php` atau domain lokal Laragon Anda (misal `http://web_sekolah.test`).
