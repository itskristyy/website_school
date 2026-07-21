<?php
require '../../function/function_auth/auth.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Alumni</title>

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
                <h1 class="font-headline fw-bold m-0" style="color: var(--skn-primary);">Tambah Alumni</h1>
                <div class="flex-grow-1 border-top" style="border-color: var(--skn-secondary) !important;"></div>
            </div>
            <div class="card shadow-sm border-0 rounded-0" style="border-top: 4px solid var(--skn-primary) !important;">
                <div class="card-header bg-white border-bottom-0 pt-4 pb-0">
                    <p class="font-mono small text-muted">Masukkan detail Alumni di bawah ini.</p>
                </div>
                <div class="card-body p-4">
                    <form action="../../function/function_alumni/add_alumni.php" method="POST">
                        <div class="mb-3">
                            <label for="nama_alumni" class="form-label fw-semibold">Nama Alumni</label>
                            <input type="text" class="form-control" name="nama_alumni" id="nama_alumni"
                                placeholder="Masukkan nama alumni" required>
                        </div>

                        <div class="mb-3">
                            <label for="tahun_lulus" class="form-label fw-semibold">Tahun Lulus</label>
                            <input type="text" class="form-control" name="tahun_lulus" id="tahun_lulus"
                                placeholder="Masukkan tahun lulus" required>
                        </div>

                        <div class="mb-4">
                            <label for="alumni_jurusan" class="form-label fw-semibold">Alumni Jurusan</label>
                            <select name="alumni_jurusan" id="alumni_jurusan" class="form-control" required>
                                <option value="" disabled selected>Pilih Jurusan</option>
                                <option value="PPLG">PPLG</option>
                                <option value="TJKT">TJKT</option>
                                <option value="KULINER">KULINER</option>
                                <option value="TO">TO</option>
                                <option value="NKPI">NKPI</option>
                            </select>
                        </div>
                        <div class="d-flex gap-3 mt-5">
                            <button type="submit" class="btn fw-bold font-mono clip-diag btn-shadow text-uppercase px-4" style="background-color: var(--skn-amber); color: var(--skn-primary);">Simpan Berita</button>
                            <button type="reset" class="btn btn-outline-dark fw-bold font-mono rounded-0 text-uppercase px-4">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <!-- Bootstrap 5.3 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
