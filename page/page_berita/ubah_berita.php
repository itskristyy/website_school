<?php
include "../../function/connect.php";
require '../../function/function_auth/auth.php';

$id_berita = $_GET['id_berita'];
$get_data = mysqli_query($koneksi, "SELECT * FROM tb_berita WHERE id_berita='$id_berita'");
$row_data = mysqli_fetch_array($get_data);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Berita</title>

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
                    <h2 class="h4 mb-0">Ubah Berita</h2>
                    <p class="text-muted small">Edit detail informasi berita di bawah ini.</p>
                </div>
                <div class="card-body p-4">
                    <form action="../../function/function_berita/edit_berita.php?id_berita=<?php echo $id_berita; ?>" method="POST">
                        <input type="hidden" name="created_at" value="<?php echo htmlspecialchars($row_data['created_at']); ?>">
                        <input type="hidden" name="updated_at" value="<?php echo date('Y-m-d'); ?>">

                        <div class="mb-3">
                            <label for="judul_berita" class="form-label fw-semibold">Judul Berita</label>
                            <input type="text" class="form-control" name="judul_berita" id="judul_berita"
                                value="<?php echo htmlspecialchars($row_data['judul_berita']); ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="url_image" class="form-label fw-semibold">Url Image</label>
                            <input type="text" class="form-control" name="url_image" id="url_image"
                                value="<?php echo htmlspecialchars($row_data['url_image']); ?>" required>
                        </div>

                        <div class="mb-4">
                            <label for="deskripsi_berita" class="form-label fw-semibold">Deskripsi Berita</label>
                            <textarea class="form-control" name="deskripsi_berita" id="deskripsi_berita" rows="4" required><?php echo htmlspecialchars($row_data['deskripsi_berita']); ?></textarea>
                        </div>

                        <div class="mb-4">
                            <label for="kategori_berita" class="form-label fw-semibold">Kategori Berita</label>
                            <select name="kategori_berita" id="kategori_berita" class="form-control" required>
                                <option class="uppercase" value="" disabled>Pilih Kategori</option>
                                <?php
                                $categories = ['prestasi', 'pengumuman', 'artikel', 'fasilitas', 'lainnya'];
                                foreach ($categories as $cat) {
                                    $selected = ($row_data['kategori_berita'] == $cat) ? 'selected' : '';
                                    echo "<option class='uppercase' value='$cat' $selected>$cat</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="link_berita" class="form-label fw-semibold">Link Berita</label>
                            <input type="text" class="form-control" name="link_berita" id="link_berita" required value="<?php echo htmlspecialchars($row_data['link_berita']); ?>"></input>
                        </div>

                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-warning px-4">Update Berita</button>
                            <a href="../dashboard/data_berita.php" class="btn btn-light px-4">Batal</a>
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