<?php
require '../../function/function_auth/auth.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Berita</title>

    <!-- Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <main class="d-flex flex-nowrap">
        <!-- Sidebar -->
        <?php require '../../components/sidebar.php'; ?>

        <!-- Main Content -->
        <div class="container-fluid p-4">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-white border-bottom-0 pt-4 pb-0">
                    <h2 class="h4 mb-0">Tambah Berita Baru</h2>
                    <p class="text-muted small">Masukkan detail informasi berita di bawah ini.</p>
                </div>
                <div class="card-body p-4">
                    <form action="../../function/function_berita/add_berita.php" method="POST">
                        <div class="mb-3">
                            <label for="judul_berita" class="form-label fw-semibold">Judul Berita</label>
                            <input type="text" class="form-control" name="judul_berita" id="judul_berita"
                                placeholder="Masukkan judul berita" required>
                        </div>

                        <div class="mb-3">
                            <label for="url_image" class="form-label fw-semibold">Url Image</label>
                            <input type="text" class="form-control" name="url_image" id="url_image"
                                placeholder="Masukkan url image" required>
                        </div>

                        <div class="mb-4">
                            <label for="deskripsi_berita" class="form-label fw-semibold">Deskripsi Berita</label>
                            <input type="text" class="form-control" name="deskripsi_berita" id="deskripsi_berita"
                                placeholder="Masukkan deskripsi berita" required>
                        </div>

                        <div class="mb-4">
                            <label for="kategori_berita" class="form-label fw-semibold">Kategori Berita</label>
                            <select name="kategori_berita" id="kategori_berita" class="form-control" required>
                                <option value="" disabled selected>Pilih Kategori</option>
                                <option value="prestasi">prestasi</option>
                                <option value="pengumuman">pengumuman</option>
                                <option value="artikel">artikel</option>
                                <option value="fasilitas">fasilitas</option>
                                <option value="lainnya">lainnya</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="link_berita" class="form-label fw-semibold">link Berita</label>
                            <input type="text" class="form-control" name="link_berita" id="link_berita"
                                placeholder="Masukkan link berita" required>
                        </div>

                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-primary px-4">Simpan Berita</button>
                            <button type="reset" class="btn btn-light px-4">Reset</button>
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