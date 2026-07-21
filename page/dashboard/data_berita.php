<?php
require '../../function/function_auth/auth.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Berita</title>

    <!-- Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@400;500&family=Public+Sans:wght@400;500;600&family=Space+Grotesk:wght@600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../../assets/css/style.css">
</head>

<body>
    <main class="d-flex flex-nowrap">
        <!-- Sidebar -->
        <?php require '../../components/sidebar.php'; ?>

        <!-- Main Content -->
        <div class="container-fluid p-4 p-md-5" style="background-color: var(--skn-bg);">
            <div class="d-flex align-items-center gap-3 mb-4">
                <h1 class="font-headline fw-bold m-0" style="color: var(--skn-primary);">Data Berita</h1>
                <div class="flex-grow-1 border-top" style="border-color: var(--skn-secondary) !important;"></div>
            </div>

            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                <?php
                include_once '../../function/connect.php';
                $data_berita = mysqli_query($koneksi, "SELECT * FROM tb_berita ORDER BY id_berita DESC");
                if ($data_berita && mysqli_num_rows($data_berita) > 0) {
                    while ($row = mysqli_fetch_array($data_berita)) {
                        ?>
                        <div class="col">
                            <div class="card h-100 shadow-sm border-light">
                                <img src="<?php echo htmlspecialchars($row['url_image']); ?>" class="card-img-top" alt="<?php echo htmlspecialchars($row['judul_berita']); ?>" style="height: 200px; object-fit: cover;">
                                <div class="card-body d-flex flex-column">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <span class="badge text-bg-primary text-uppercase"><?php echo htmlspecialchars($row['kategori_berita']); ?></span>
                                        <small class="text-muted fw-medium"><?php echo date('d M Y', strtotime($row['created_at'])); ?></small>
                                    </div>
                                    <h5 class="card-title fw-bold"><?php echo htmlspecialchars($row['judul_berita']); ?></h5>
                                    <p class="card-text text-secondary flex-grow-1"><?php echo htmlspecialchars($row['deskripsi_berita']); ?></p>
                                    
                                    <div class="d-flex flex-wrap gap-2 mt-4">
                                        <a href="../page_berita/ubah_berita.php?id_berita=<?php echo $row['id_berita']; ?>" class="btn fw-bold font-mono clip-diag btn-shadow text-uppercase px-3 py-1" style="background-color: var(--skn-amber); color: var(--skn-primary); font-size: 0.8rem;">Edit</a>
                                        <a href="../../function/function_berita/delete_berita.php?id_berita=<?php echo $row['id_berita']; ?>" class="btn fw-bold font-mono btn-outline-dark rounded-0 text-uppercase px-3 py-1" style="font-size: 0.8rem;" onclick="return confirm('Apakah Anda yakin ingin menghapus berita ini?');">Hapus</a>
                                        <a href="<?php echo htmlspecialchars($row['link_berita']); ?>" class="btn fw-bold font-mono btn-outline-dark rounded-0 text-uppercase px-3 py-1" style="font-size: 0.8rem;">Selengkapnya <i class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                } 
                ?>
            </div>
        </div>
    </main>

    <!-- Bootstrap 5.3 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
