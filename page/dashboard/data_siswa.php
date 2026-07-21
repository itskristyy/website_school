<?php
require '../../function/function_auth/auth.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>

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
                <h1 class="font-headline fw-bold m-0" style="color: var(--skn-primary);">Data Siswa</h1>
                <div class="flex-grow-1 border-top" style="border-color: var(--skn-secondary) !important;"></div>
            </div>
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>ID Siswa</th>
                        <th>Nama Siswa</th>
                        <th>Jurusan Siswa</th>
                        <th>NIPD</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include '../../function/connect.php';
                    $no = 1;
                    $data = mysqli_query($koneksi, "SELECT * FROM tb_siswa");
                    if (mysqli_num_rows($data) > 0) {
                        while ($row = mysqli_fetch_array($data)) {
                            ?>
                            <tr>
                                <td><?php echo htmlspecialchars($row['id_siswa']); ?></td>
                                <td><?php echo htmlspecialchars($row['nama_siswa']); ?></td>
                                <td><?php echo htmlspecialchars($row['siswa_jurusan']); ?></td>
                                <td><?php echo htmlspecialchars($row['nipd']); ?></td>
                                <td>
                                    <a href="../../function/function_siswa/delete_siswa.php?id_siswa=<?php echo $row['id_siswa']; ?>" class="btn fw-bold font-mono btn-outline-danger rounded-0 text-uppercase px-3 py-1" style="font-size: 0.8rem;" onclick="return confirm('Yakin hapus?');">Hapus</a>
                                </td>
                            </tr>
                            <?php
                        }
                    } else {
                        echo "<tr><td colspan='4' class='text-center'>Belum ada data Siswa.</td></tr>";
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
