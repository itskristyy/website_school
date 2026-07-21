<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Direktori Alumni - Skanifo</title>

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
    <link rel="stylesheet" href="../../assets/css/style.css">
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
                    <li class="nav-item"><a class="nav-link" href="../../index.php#beranda">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="../../index.php#profil">Profil</a></li>
                    <li class="nav-item"><a class="nav-link" href="../../index.php#program-keahlian">Program Keahlian</a></li>
                    <li class="nav-item"><a class="nav-link" href="../../index.php#berita">Berita</a></li>
                    <li class="nav-item"><a class="nav-link" href="../../index.php#galeri">Galeri</a></li>
                    <li class="nav-item"><a class="nav-link" href="../../index.php#ppdb">PPDB</a></li>
                    <li class="nav-item"><a class="nav-link" href="../../index.php#guestbook">Kontak</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Direktori
                        </a>
                        <ul class="dropdown-menu rounded-0 shadow border-0" style="border-top: 4px solid var(--skn-primary) !important;">
                            <li><a class="dropdown-item font-mono small" href="direktori_guru.php">Data Guru</a></li>
                            <li><a class="dropdown-item font-mono small" href="direktori_siswa.php">Data Siswa</a></li>
                            <li><a class="dropdown-item font-mono small" href="direktori_alumni.php">Data Alumni</a></li>
                        </ul>
                    </li>
                </ul>
                <a href="../../login.php"
                    class="btn btn-outline-dark font-mono small rounded-0 clip-diag mb-2 mb-lg-0">Admin</a>
            </div>
        </div>
    </nav>

    <main class="container" style="margin-top: 120px; margin-bottom: 80px; min-height: 60vh;">
        <div class="text-center mb-5">
            <h1 class="font-headline fw-bold" style="color: var(--skn-primary);">Direktori Alumni</h1>
            <div class="mx-auto mt-3" style="width: 80px; height: 4px; background-color: var(--skn-amber);"></div>
            <p class="text-muted mt-3 font-mono">Daftar Alumni SMK Skanifo.</p>
        </div>

        <div class="row row-cols-1 row-cols-md-2 g-4">
            <?php
            include '../../function/connect.php';
            $data = mysqli_query($koneksi, "SELECT * FROM tb_alumni ORDER BY id_alumni DESC");
            if(mysqli_num_rows($data) > 0){
                while($row = mysqli_fetch_array($data)){
                    ?>
                    <div class="col">
                        <div class="card border-0 shadow-sm rounded-0 h-100" style="border-left: 6px solid var(--skn-primary) !important; background-color: var(--skn-bg);">
                            <div class="card-body d-flex align-items-center gap-4 p-4">
                                <!-- Avatar Placeholder -->
                                <div class="rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width: 60px; height: 60px; background-color: var(--skn-secondary); color: white;">
                                    <i class="bi bi-person-fill fs-3"></i>
                                </div>
                                <!-- Info Siswa -->
                                <div>
                                    <h4 class="font-headline fw-bold mb-1" style="color: var(--skn-primary);"><?php echo htmlspecialchars($row['nama_alumni']); ?></h4>
                                    <div class="font-mono text-muted mb-2 small">Tahun Lulus: <?php echo htmlspecialchars($row['tahun_lulus']); ?></div>
                                    <span class="badge rounded-0 px-3 py-2 text-uppercase font-mono" style="background-color: var(--skn-amber); color: var(--skn-primary);">
                                        <?php echo htmlspecialchars($row['alumni_jurusan']); ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            } else {
                echo "<div class='col-12 text-center text-muted'>Belum ada data Alumni.</div>";
            }
            ?>
        </div>
    </main>


    <!-- Bootstrap JS bundle (WAJIB ada duluan sebelum main.js, karena main.js pakai object "bootstrap") -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets/js/main.js"></script>
</body>
</html>

