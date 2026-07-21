<?php
include "../../function/connect.php";

require '../../function/function_auth/auth.php';

$id_user = $_GET['id_user'];

$get_data = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE id_user='$id_user'");
$row_data = mysqli_fetch_array($get_data);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah User</title>


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
                <h1 class="font-headline fw-bold m-0" style="color: var(--skn-primary);">Ubah User</h1>
                <div class="flex-grow-1 border-top" style="border-color: var(--skn-secondary) !important;"></div>
            </div>
            <div class="card shadow-sm border-0 rounded-0" style="border-top: 4px solid var(--skn-primary) !important;">
                <div class="card-header bg-white border-bottom-0 pt-4 pb-0">
                    <p class="font-mono small text-muted">Edit detail informasi pengguna di bawah ini.</p>
                </div>
                <div class="card-body p-4">
                    <form action="../../function/function_user/edit_user.php?id=<?php echo $id_user; ?>" method="post">
                        <div class="mb-3">
                            <label for="username" class="form-label fw-semibold">Username</label>
                            <input type="text" class="form-control" name="username" id="username" placeholder="Masukkan username" value="<?php echo htmlspecialchars($row_data['username']); ?>" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="nip" class="form-label fw-semibold">NIP / ID Pegawai</label>
                            <input type="number" class="form-control" name="nip" id="nip" placeholder="Masukkan NIP" value="<?php echo htmlspecialchars($row_data['nip']); ?>" required>
                        </div>
                        
                        <div class="mb-4">
                            <label for="password" class="form-label fw-semibold">Password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan password" value="<?php echo htmlspecialchars($row_data['password']); ?>" required>
                        </div>
                        
                        <div class="d-flex gap-3 mt-5">
                            <button type="submit" class="btn fw-bold font-mono clip-diag btn-shadow text-uppercase px-4" style="background-color: var(--skn-amber); color: var(--skn-primary);">Update User</button>
                            <a href="../dashboard/data_user.php" class="btn btn-outline-dark fw-bold font-mono rounded-0 text-uppercase px-4 py-2">Batal</a>
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
