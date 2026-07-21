<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMK Negeri 4 Kendal - Skanifo</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@400;500&family=Public+Sans:wght@400;500;600&family=Space+Grotesk:wght@600;700&display=swap"
        rel="stylesheet">

    <!-- Bootstrap 5.3 CSS lewat CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons, buat panah/menu -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <!-- CSS custom kita sendiri (efek yang gak ada di Bootstrap) -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="90" tabindex="0">

    <!-- NAVBAR  -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top border-bottom" id="mainNav">
        <div class="container">
            <a class="navbar-brand font-headline fw-bold fs-4" href="#beranda">Skanifo</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain"
                aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarMain">
                <ul class="navbar-nav mx-auto gap-lg-4 font-mono text-uppercase small mt-3 mt-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#beranda">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="#profil">Profil</a></li>
                    <li class="nav-item"><a class="nav-link" href="#program-keahlian">Program Keahlian</a></li>
                    <li class="nav-item"><a class="nav-link" href="#berita">Berita</a></li>
                    <li class="nav-item"><a class="nav-link" href="#galeri">Galeri</a></li>
                    <li class="nav-item"><a class="nav-link" href="#ppdb">PPDB</a></li>
                    <li class="nav-item"><a class="nav-link" href="#guestbook">Kontak</a></li>
                </ul>
                <a href="login.php"
                    class="btn btn-outline-dark font-mono small rounded-0 clip-diag mb-2 mb-lg-0">Admin</a>
            </div>
        </div>
    </nav>

    <main>

        <!-- HERO SECTION -->
        <section id="beranda" class="d-flex flex-column text-white border-bottom"
            style="background-color: var(--skn-primary); min-height: 85vh; padding-top: 76px;">
            <div class="container flex-grow-1 d-flex align-items-end pb-5">
                <div style="max-width: 600px;">
                    <span class="d-inline-block font-mono small px-2 py-1 mb-3"
                        style="background-color: var(--skn-secondary);">[DOC_REF: HER-01]</span>
                    <h1 class="font-headline fw-bold text-uppercase display-4 mb-3">Technical Excellence for the Future
                    </h1>
                    <p class="mb-4" style="color: rgba(255,255,255,.8);">Motto: "Unggul Berkarakter". Membangun generasi
                        tenaga profesional terampil lewat pelatihan vokasi yang ketat dan pembentukan karakter.</p>
                    <a href="#guestbook"
                        class="btn btn-lg fw-bold font-mono clip-diag btn-shadow d-inline-flex align-items-center gap-2"
                        style="background-color: var(--skn-amber); color: var(--skn-primary);">
                        Buku Tamu <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Feature strip -->
            <div class="w-100" style="background-color: rgba(0,16,38,.95);">
                <div class="container">
                    <div class="row g-0 font-mono small text-uppercase">
                        <div class="col-md-4 p-3 border-end border-white-50 d-flex align-items-center gap-3">
                            <span style="color:#aac7ff;">01</span> Industry 4.0 Standard
                        </div>
                        <div class="col-md-4 p-3 border-end border-white-50 d-flex align-items-center gap-3">
                            <span style="color:#aac7ff;">02</span> Vocational Certification
                        </div>
                        <div class="col-md-4 p-3 d-flex align-items-center gap-3">
                            <span style="color:#aac7ff;">03</span> Global Partnership
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- PROFIL / TENTANG SEKOLAH  -->
        <section id="profil" class="container py-5 border-bottom">
            <div class="d-flex align-items-center gap-3 mb-4">
                <h2 class="font-headline fw-bold m-0" style="color: var(--skn-primary);">Tentang Sekolah</h2>
                <div class="flex-grow-1 border-top"></div>
                <span class="font-mono small text-white px-3 py-1"
                    style="background-color: var(--skn-secondary);">AKREDITASI A</span>
            </div>

            <div class="row row-cols-2 row-cols-md-4 g-0">
                <div class="col p-4 border" style="border-color: var(--skn-primary) !important;">
                    <div class="font-mono small text-muted mb-2">ESTABLISHED</div>
                    <div class="font-headline fs-3 fw-bold" style="color: var(--skn-primary);">2004</div>
                </div>
                <div class="col p-4 border" style="border-color: var(--skn-primary) !important;">
                    <div class="font-mono small text-muted mb-2">STUDENTS</div>
                    <div class="font-headline fs-3 fw-bold" style="color: var(--skn-primary);">1500+</div>
                </div>
                <div class="col p-4 border" style="border-color: var(--skn-primary) !important;">
                    <div class="font-mono small text-muted mb-2">PROGRAMS</div>
                    <div class="font-headline fs-3 fw-bold" style="color: var(--skn-primary);">06</div>
                </div>
                <div class="col p-4 border" style="border-color: var(--skn-primary) !important;">
                    <div class="font-mono small text-muted mb-2">CAMPUS AREA</div>
                    <div class="font-headline fs-3 fw-bold" style="color: var(--skn-primary);">3.2 HA</div>
                </div>
            </div>

            <!-- Sambutan Kepala Sekolah, masih di dalam section "profil" yang sama -->
            <div class="row mt-5 g-4 align-items-center">
                <div class="col-12 col-md-4">
                    <div class="img-placeholder" style="aspect-ratio: 3/4;">[FOTO_KEPSEK]</div>
                </div>
                <div class="col-12 col-md-8">
                    <div class="font-mono small text-muted mb-2">SAMBUTAN KEPALA SEKOLAH</div>
                    <p class="mb-3">Assalamu'alaikum warahmatullahi wabarakatuh. Selamat datang di Skanifo, tempat kami
                        menyiapkan lulusan yang siap kerja, siap kuliah, dan siap berwirausaha dengan bekal keahlian
                        teknis serta karakter yang kuat.</p>
                    <p class="mb-3">Kami mengajak Bapak/Ibu dan adik-adik calon siswa untuk mengenal lebih jauh program
                        keahlian, kegiatan, dan prestasi Skanifo lewat halaman ini.</p>
                    <div class="fw-bold" style="color: var(--skn-primary);">Arif Ediyanto, S.Pd., M.Pd.</div>
                    <div class="font-mono small text-muted">Kepala SMK Negeri 4 Kendal</div>
                </div>
            </div>
        </section>

        <!-- PROGRAM KEAHLIAN  -->
        <section id="program-keahlian" class="container py-5 border-bottom">
            <div class="d-flex align-items-center gap-3 mb-4">
                <h2 class="font-headline fw-bold m-0" style="color: var(--skn-primary);">Program Keahlian</h2>
                <div class="flex-grow-1 border-top"></div>
            </div>

            <div class="row g-4">

                <!-- Card 1: RPL -->
                <div class="col-12 col-md-4">
                    <div class="border h-100" style="border-color: var(--skn-primary) !important;">
                        <div class="position-relative">
                            <div class="img-placeholder" style="height:200px;">[FOTO_RPL]</div>
                            <span class="position-absolute top-0 end-0 m-2 px-2 py-1 text-white font-mono small"
                                style="background-color: var(--skn-primary);">[RPL]</span>
                        </div>
                        <div class="p-4">
                            <h3 class="font-headline fs-5 fw-bold mb-2" style="color: var(--skn-primary);">Rekayasa
                                Perangkat Lunak</h3>
                            <p class="text-muted small mb-0">Pengembangan perangkat lunak dan aplikasi modern berbasis
                                teknologi cloud dan AI.</p>
                        </div>
                    </div>
                </div>

                <!-- Card 2: TKR -->
                <div class="col-12 col-md-4">
                    <div class="border h-100" style="border-color: var(--skn-primary) !important;">
                        <div class="position-relative">
                            <div class="img-placeholder" style="height:200px;">[FOTO_TKR]</div>
                            <span class="position-absolute top-0 end-0 m-2 px-2 py-1 text-white font-mono small"
                                style="background-color: var(--skn-primary);">[TKR]</span>
                        </div>
                        <div class="p-4">
                            <h3 class="font-headline fs-5 fw-bold mb-2" style="color: var(--skn-primary);">Teknik
                                Kendaraan Ringan</h3>
                            <p class="text-muted small mb-0">Pemeliharaan dan perbaikan kendaraan dengan teknologi
                                otomotif terkini.</p>
                        </div>
                    </div>
                </div>

                <!-- Card 3: TKJ -->
                <div class="col-12 col-md-4">
                    <div class="border h-100" style="border-color: var(--skn-primary) !important;">
                        <div class="position-relative">
                            <div class="img-placeholder" style="height:200px;">[FOTO_TKJ]</div>
                            <span class="position-absolute top-0 end-0 m-2 px-2 py-1 text-white font-mono small"
                                style="background-color: var(--skn-primary);">[TKJ]</span>
                        </div>
                        <div class="p-4">
                            <h3 class="font-headline fs-5 fw-bold mb-2" style="color: var(--skn-primary);">Teknik
                                Jaringan Komputer</h3>
                            <p class="text-muted small mb-0">Instalasi jaringan, manajemen server, dan keamanan
                                infrastruktur digital.</p>
                        </div>
                    </div>
                </div>

                <!-- Card 4: TBG -->
                <div class="col-12 col-md-4">
                    <div class="border h-100" style="border-color: var(--skn-primary) !important;">
                        <div class="position-relative">
                            <div class="img-placeholder" style="height:200px;">[FOTO_TBG]</div>
                            <span class="position-absolute top-0 end-0 m-2 px-2 py-1 text-white font-mono small"
                                style="background-color: var(--skn-primary);">[TBG]</span>
                        </div>
                        <div class="p-4">
                            <h3 class="font-headline fs-5 fw-bold mb-2" style="color: var(--skn-primary);">Tata Boga
                            </h3>
                            <p class="text-muted small mb-0">Seni kuliner profesional, manajemen dapur, dan standar
                                higienitas internasional.</p>
                        </div>
                    </div>
                </div>

                <!-- Card 5: APL -->
                <div class="col-12 col-md-4">
                    <div class="border h-100" style="border-color: var(--skn-primary) !important;">
                        <div class="position-relative">
                            <div class="img-placeholder" style="height:200px;">[FOTO_APL]</div>
                            <span class="position-absolute top-0 end-0 m-2 px-2 py-1 text-white font-mono small"
                                style="background-color: var(--skn-primary);">[APL]</span>
                        </div>
                        <div class="p-4">
                            <h3 class="font-headline fs-5 fw-bold mb-2" style="color: var(--skn-primary);">Agribisnis
                                Perikanan</h3>
                            <p class="text-muted small mb-0">Budidaya perikanan air tawar dengan sistem manajemen
                                berkelanjutan.</p>
                        </div>
                    </div>
                </div>

                <!-- Card 6: NKPI -->
                <div class="col-12 col-md-4">
                    <div class="border h-100" style="border-color: var(--skn-primary) !important;">
                        <div class="position-relative">
                            <div class="img-placeholder" style="height:200px;">[FOTO_NKPI]</div>
                            <span class="position-absolute top-0 end-0 m-2 px-2 py-1 text-white font-mono small"
                                style="background-color: var(--skn-primary);">[NKPI]</span>
                        </div>
                        <div class="p-4">
                            <h3 class="font-headline fs-5 fw-bold mb-2" style="color: var(--skn-primary);">Nautika Kapal
                            </h3>
                            <p class="text-muted small mb-0">Navigasi kapal penangkap ikan dan teknik operasional
                                maritim profesional.</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- PPDB -->
        <section id="ppdb" class="py-5 text-white" style="background-color: var(--skn-secondary);">
            <div class="container d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-3">
                <div>
                    <div class="font-mono small mb-1" style="color:#d5e3ff;">[SPMB 2026/2027]</div>
                    <h2 class="font-headline fw-bold fs-3 mb-0">Pendaftaran Peserta Didik Baru Sudah Dibuka</h2>
                </div>
                <a href="#" class="btn fw-bold font-mono clip-diag btn-shadow text-uppercase flex-shrink-0"
                    style="background-color: var(--skn-amber); color: var(--skn-primary);">
                    Info Pendaftaran <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </section>

        <!--  BERITA & PENGUMUMAN  -->
        <section id="berita" class="container py-5 border-bottom">
            <div class="d-flex align-items-center gap-3 mb-5">
                <h2 class="font-headline fw-bold m-0" style="color: var(--skn-primary);">Berita &amp; Pengumuman</h2>
                <div class="flex-grow-1 border-top"></div>
            </div>

            <div class="row g-5">

                <!-- Berita utama (kiri) -->
                <div class="col-12 col-lg-5">
                    <div class="border p-1 bg-white mb-3" style="border-color: var(--skn-primary) !important;">
                        <div class="img-placeholder" style="aspect-ratio: 4/3;">[FOTO_UTAMA]</div>
                    </div>
                    <div class="d-flex align-items-center gap-2 mb-2">
                        <span class="font-mono small text-white px-2"
                            style="background-color: var(--skn-secondary);">PRESTASI</span>
                        <span class="font-mono small text-muted">2024.05.20</span>
                    </div>
                    <h3 class="font-headline fs-4 fw-bold mb-2" style="color: var(--skn-primary);">Juara Umum Lomba
                        Kompetensi Siswa (LKS) Tingkat Provinsi 2024</h3>
                    <p class="text-muted mb-2">Tim Skanifo berhasil meraih predikat Juara Umum setelah memenangkan 5
                        medali emas di berbagai bidang keahlian teknologi dan industri...</p>
                    <a href="#" class="font-mono fw-bold text-decoration-none" style="color: var(--skn-secondary);">BACA
                        SELENGKAPNYA &rarr;</a>
                </div>

                <!-- Grid berita (kanan) -->
                <div class="col-12 col-lg-7">
                    <div class="row g-4">

                        <div class="col-12 col-md-6">
                            <div class="img-placeholder mb-2"
                                style="aspect-ratio:16/9; border:1px solid var(--skn-primary);">[FOTO_1]</div>
                            <div class="d-flex gap-2 mb-2">
                                <span class="font-mono small border px-1"
                                    style="border-color: var(--skn-primary) !important;">[BENGKEL]</span>
                                <span class="font-mono small text-muted">2024.05.15</span>
                            </div>
                            <h4 class="font-headline fs-6 fw-bold mb-1" style="color: var(--skn-primary);">Workshop
                                Pengelasan Industri Bersama PT PINDAD</h4>
                            <a href="#" class="font-mono small fw-bold text-decoration-none"
                                style="color: var(--skn-secondary);">BACA SELENGKAPNYA &rarr;</a>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="img-placeholder mb-2"
                                style="aspect-ratio:16/9; border:1px solid var(--skn-primary);">[FOTO_2]</div>
                            <div class="d-flex gap-2 mb-2">
                                <span class="font-mono small border px-1"
                                    style="border-color: var(--skn-primary) !important;">[KULINER]</span>
                                <span class="font-mono small text-muted">2024.05.12</span>
                            </div>
                            <h4 class="font-headline fs-6 fw-bold mb-1" style="color: var(--skn-primary);">Seni Pastry
                                Modern: Masterclass dari Chef Bintang Lima</h4>
                            <a href="#" class="font-mono small fw-bold text-decoration-none"
                                style="color: var(--skn-secondary);">BACA SELENGKAPNYA &rarr;</a>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="img-placeholder mb-2"
                                style="aspect-ratio:16/9; border:1px solid var(--skn-primary);">[FOTO_3]</div>
                            <div class="d-flex gap-2 mb-2">
                                <span class="font-mono small border px-1"
                                    style="border-color: var(--skn-primary) !important;">[INFRA]</span>
                                <span class="font-mono small text-muted">2024.05.08</span>
                            </div>
                            <h4 class="font-headline fs-6 fw-bold mb-1" style="color: var(--skn-primary);">Upgrade
                                Infrastruktur Server Lab Komputer Terintegrasi</h4>
                            <a href="#" class="font-mono small fw-bold text-decoration-none"
                                style="color: var(--skn-secondary);">BACA SELENGKAPNYA &rarr;</a>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="img-placeholder mb-2"
                                style="aspect-ratio:16/9; border:1px solid var(--skn-primary);">[FOTO_4]</div>
                            <div class="d-flex gap-2 mb-2">
                                <span class="font-mono small border px-1"
                                    style="border-color: var(--skn-primary) !important;">[MARITIM]</span>
                                <span class="font-mono small text-muted">2024.05.02</span>
                            </div>
                            <h4 class="font-headline fs-6 fw-bold mb-1" style="color: var(--skn-primary);">Simulasi
                                Navigasi Kapal di Selat Malaka bagi Siswa Nautika</h4>
                            <a href="#" class="font-mono small fw-bold text-decoration-none"
                                style="color: var(--skn-secondary);">BACA SELENGKAPNYA &rarr;</a>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!--  GALERI -->
        <section id="galeri" class="container py-5 border-bottom">
            <div class="d-flex align-items-center gap-3 mb-4">
                <h2 class="font-headline fw-bold m-0" style="color: var(--skn-primary);">Galeri Kegiatan</h2>
                <div class="flex-grow-1 border-top"></div>
            </div>

            <div class="row row-cols-2 row-cols-md-4 g-3">
                <div class="col">
                    <div class="img-placeholder" style="aspect-ratio:1/1; border:1px solid var(--skn-primary);">[IMG_01]
                    </div>
                    <p class="text-center font-mono small text-uppercase mt-2 mb-0">Praktikum Bengkel</p>
                </div>
                <div class="col">
                    <div class="img-placeholder" style="aspect-ratio:1/1; border:1px solid var(--skn-primary);">[IMG_02]
                    </div>
                    <p class="text-center font-mono small text-uppercase mt-2 mb-0">Lab Komputer RPL</p>
                </div>
                <div class="col">
                    <div class="img-placeholder" style="aspect-ratio:1/1; border:1px solid var(--skn-primary);">[IMG_03]
                    </div>
                    <p class="text-center font-mono small text-uppercase mt-2 mb-0">Dapur Tata Boga</p>
                </div>
                <div class="col">
                    <div class="img-placeholder" style="aspect-ratio:1/1; border:1px solid var(--skn-primary);">[IMG_04]
                    </div>
                    <p class="text-center font-mono small text-uppercase mt-2 mb-0">Ekstrakurikuler</p>
                </div>
            </div>
        </section>

        <!--  GUESTBOOK & KONTAK  -->
        <section id="guestbook" class="container py-5">
            <div class="d-flex align-items-center gap-3 mb-4">
                <h2 class="font-headline fw-bold m-0" style="color: var(--skn-primary);">Buku Tamu &amp; Kontak</h2>
                <div class="flex-grow-1 border-top"></div>
            </div>

            <div class="row g-5">

                <!-- Form -->
                <div class="col-12 col-md-6">
                    <form id="guestbookForm" class="needs-validation" novalidate
                        action="function/function_guestbook/add_message.php" method="POST">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama lengkap</label>
                            <input type="text" class="form-control rounded-0 border-0 border-bottom" id="nama"
                                name="nama" placeholder="Masukkan nama anda..." required>
                            <div class="invalid-feedback">Nama wajib diisi.</div>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control rounded-0 border-0 border-bottom" id="email"
                                name="email" placeholder="email@contoh.com" required>
                            <div class="invalid-feedback">Masukkan email yang valid.</div>
                        </div>
                        <div class="mb-4">
                            <label for="pesan" class="form-label">Pesan</label>
                            <textarea class="form-control rounded-0 border-0 border-bottom" id="pesan" name="pesan"
                                rows="4" placeholder="Tuliskan pesan anda..." required></textarea>
                            <div class="invalid-feedback">Pesan tidak boleh kosong.</div>
                        </div>
                        <button type="submit" class="btn fw-bold font-mono clip-diag btn-shadow text-uppercase"
                            style="background-color: var(--skn-amber); color: var(--skn-primary);">Kirim Pesan</button>
                    </form>
                </div>

                <!-- Kontak -->
                <div class="col-12 col-md-6">
                    <p class="mb-2">Jl. Raya Soekarno Hatta, Brangsong, Kendal, Jawa Tengah 51371</p>
                    <p class="mb-2">(0294) 381123</p>
                    <p class="mb-4">info@smkn4kendal.sch.id</p>
                    <div class="img-placeholder" style="aspect-ratio:16/9; border:1px solid var(--skn-primary);">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.5298675353283!2d110.22777177356583!3d-6.946648368002635!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e705d9c2a3b439b%3A0xcd3827ba60db3c5!2sSMK%20N%204%20Kendal!5e0!3m2!1sen!2sid!4v1784606314691!5m2!1sen!2sid"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="strict-origin-when-cross-origin"></iframe>
                    </div>
                </div>

            </div>
        </section>

    </main>

    <!-- FOOTER  -->
    <footer class="text-white font-mono small"
        style="background-color: var(--skn-primary); border-top: 4px solid var(--skn-secondary);">
        <div class="container py-5">
            <div class="row g-4">
                <div class="col-12 col-md-4">
                    <div class="font-headline fs-4 fw-bold mb-2">Skanifo</div>
                    <p class="mb-1" style="color: rgba(255,255,255,.8);">&copy; <span id="currentYear"></span> SMK
                        Negeri 4 Kendal (Skanifo). Vocational Excellence.</p>
                    <div style="color: rgba(255,255,255,.5);">[SYS_STATE: ONLINE]</div>
                </div>
                <div class="col-12 col-md-4 d-flex flex-column gap-2">
                    <a href="#" class="text-decoration-none" style="color: rgba(255,255,255,.8);">Jl. Raya Soekarno
                        Hatta, Brangsong, Kendal</a>
                    <a href="#" class="text-decoration-none" style="color: rgba(255,255,255,.8);">Instagram</a>
                    <a href="#" class="text-decoration-none" style="color: rgba(255,255,255,.8);">YouTube</a>
                </div>
                <div class="col-12 col-md-4 d-flex flex-column align-items-md-end">
                    <a href="login.php" class="text-decoration-none" style="color: rgba(255,255,255,.8);">Admin
                        Login</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS bundle (WAJIB ada duluan sebelum main.js, karena main.js pakai object "bootstrap") -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>