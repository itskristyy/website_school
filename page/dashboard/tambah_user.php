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
                    <h2 class="h4 mb-0">Tambah User Baru</h2>
                    <p class="text-muted small">Masukkan detail informasi pengguna di bawah ini.</p>
                </div>
                <div class="card-body p-4">
                    <form action="../../function/function_user/add_user.php" method="POST">
                        <div class="mb-3">
                            <label for="username" class="form-label fw-semibold">Username</label>
                            <input type="text" class="form-control" name="username" id="username" placeholder="Masukkan username" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="nip" class="form-label fw-semibold">NIP / ID Pegawai</label>
                            <input type="text" class="form-control" name="nip" id="nip" placeholder="Masukkan NIP" required>
                        </div>
                        
                        <div class="mb-4">
                            <label for="password" class="form-label fw-semibold">Password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan password" required>
                        </div>
                        
                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-primary px-4">Simpan User</button>
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