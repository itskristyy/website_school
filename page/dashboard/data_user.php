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
            <div class="mb-4">
                <h1 class="font-bold text-3xl">Guestbook Display</h1>
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
                                    <a href="../../function/function_user/delete_user.php?id_user=<?php echo $row['id_user']; ?>" class="text-decoration-none">Hapus</a>
                                    <a href="../page_user/ubah_user.php?id_user=<?php echo $row['id_user']; ?>" class="text-decoration-none">Edit</a>
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