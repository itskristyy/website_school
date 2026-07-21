<?php
session_start();

// Ambil error dari session flash (dikirim oleh handler)
$error = '';
if (isset($_SESSION['login_error'])) {
    $error = $_SESSION['login_error'];
    unset($_SESSION['login_error']);
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Skanifo Admin</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@400;500&family=Public+Sans:wght@400;500;600&family=Space+Grotesk:wght@600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body style="background-color: var(--skn-primary);">

    <section class="min-vh-100 d-flex flex-column align-items-center justify-content-center p-3 p-md-5">
        <div class="container" style="max-width: 900px;">
            <div class="row g-0 bg-white border" style="border-color: var(--skn-secondary) !important; box-shadow: 8px 8px 0px 0px var(--skn-secondary);">

                <!-- Left Side: Branding -->
                <div class="col-12 col-md-5 d-none d-md-flex flex-column justify-content-between p-5 border-end text-white" style="background-color: var(--skn-primary); border-color: var(--skn-secondary) !important;">
                    <div>
                        <div class="d-inline-block font-mono small px-2 py-1 mb-4" style="background-color: var(--skn-secondary);">[SYS_AUTH]</div>
                        <h1 class="font-headline fw-bold text-uppercase fs-2 mb-3">Skanifo<br>Admin<br>Portal</h1>
                        <p class="font-mono small" style="color: rgba(255,255,255,.8);">Restricted access. Please log in with your administrative credentials.</p>
                    </div>
                    <div class="font-mono small mt-5" style="color: rgba(255,255,255,.5);">
                        &copy; <span id="currentYear"></span> Skanifo.
                    </div>
                </div>

                <!-- Right Side: Form -->
                <div class="col-12 col-md-7 p-4 p-md-5 d-flex flex-column justify-content-center">

                    <!-- Mobile Branding (hides on md+) -->
                    <div class="d-md-none mb-4 text-center">
                        <h1 class="font-headline fw-bold text-uppercase fs-3 mb-2" style="color: var(--skn-primary);">Skanifo Admin</h1>
                        <span class="font-mono small px-2 py-1 text-white" style="background-color: var(--skn-secondary);">[SYS_AUTH]</span>
                    </div>

                    <div class="mb-4">
                        <h2 class="font-headline fs-4 fw-bold" style="color: var(--skn-primary);">Login Administrator</h2>
                        <p class="font-mono small text-muted">Masukkan username dan password Anda.</p>
                    </div>

                    <?php if (!empty($error)): ?>
                        <div class="alert alert-danger font-mono small rounded-0 border-0 border-start border-4 border-danger" role="alert">
                            <i class="bi bi-exclamation-triangle-fill me-2"></i><?= htmlspecialchars($error) ?>
                        </div>
                    <?php endif; ?>

                    <form action="function/function_auth/login.php" method="POST" class="needs-validation" novalidate>
                        <div class="mb-4">
                            <label for="username" class="form-label font-mono small fw-bold">USERNAME</label>
                            <input type="text" class="form-control rounded-0 border-0 border-bottom bg-light px-3 py-2" name="username" id="username" placeholder="Masukkan username..." style="border-color: var(--skn-primary) !important;" required>
                        </div>

                        <div class="mb-5">
                            <label for="password" class="form-label font-mono small fw-bold">PASSWORD</label>
                            <input type="password" class="form-control rounded-0 border-0 border-bottom bg-light px-3 py-2" name="password" id="password" placeholder="Masukkan password..." style="border-color: var(--skn-primary) !important;" required>
                        </div>

                        <div class="d-grid gap-3">
                            <button type="submit" class="btn fw-bold font-mono clip-diag btn-shadow text-uppercase w-100 border-0" style="background-color: var(--skn-amber); color: var(--skn-primary); padding: 12px;">
                                <i class="bi bi-box-arrow-in-right me-2"></i>Login
                            </button>

                            <a href="index.php" class="btn btn-outline-dark font-mono small rounded-0 text-uppercase text-decoration-none text-center" style="padding: 10px;">
                                <i class="bi bi-arrow-left me-2"></i>Kembali ke Beranda
                            </a>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>

    <!-- Script for current year -->
    <script>
        document.getElementById('currentYear').textContent = new Date().getFullYear();
    </script>
</body>

</html>