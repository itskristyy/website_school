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
                <h1 class="font-headline fw-bold m-0" style="color: var(--skn-primary);">Data User</h1>
                <div class="flex-grow-1 border-top" style="border-color: var(--skn-secondary) !important;"></div>
            </div>
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>ID User</th>
                        <th>Username</th>
                        <th>NIP</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include '../../function/connect.php';
                    $no = 1;
                    $data = mysqli_query($koneksi, "SELECT * FROM tb_user");
                    if (mysqli_num_rows($data) > 0) {
                        while ($row = mysqli_fetch_array($data)) {
                            ?>
                            <tr>
                                <td><?php echo htmlspecialchars($row['id_user']); ?></td>
                                <td><?php echo htmlspecialchars($row['username']); ?></td>
                                <td><?php echo htmlspecialchars($row['nip']); ?></td>
                                <td>
                                    <a href="../page_user/ubah_user.php?id_user=<?php echo $row['id_user']; ?>" class="btn fw-bold font-mono clip-diag btn-shadow text-uppercase px-3 py-1 me-2" style="background-color: var(--skn-amber); color: var(--skn-primary); font-size: 0.8rem;">Edit</a>
                                    <a href="../../function/function_user/delete_user.php?id_user=<?php echo $row['id_user']; ?>" class="btn fw-bold font-mono btn-outline-danger rounded-0 text-uppercase px-3 py-1" style="font-size: 0.8rem;" onclick="return confirm('Yakin hapus?');">Hapus</a>
                                </td>
                            </tr>
                            <?php
                        }
                    } else {
                        echo "<tr><td colspan='4' class='text-center'>Belum ada data guestbook.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </main>

    <!-- Bootstrap 5.3 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
