
    <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px; min-height: 100vh;">
    <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <span class="fs-4">Admin Panel</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="../dashboard/dashboard.php" class="nav-link" aria-current="page">
                Dashboard
            </a>
        </li>
        <li class="nav-item">
            <a href="../dashboard/guestbook_list.php" class="nav-link" aria-current="page">
                Guestbook List
            </a>
        </li>
        <!-- Dropdown Menu / Submenu -->
        <li class="nav-item mt-2">
            <a class="nav-link text-white dropdown-toggle" href="#" data-bs-toggle="collapse"
                data-bs-target="#dataMaster-collapse" aria-expanded="false">
                Berita
            </a>
            <div class="collapse" id="dataMaster-collapse">
                <ul class="nav flex-column ms-3 mt-2">
                    <li><a href="../dashboard/tambah_berita.php" class="nav-link text-white py-1">Tambah Berita</a></li>
                    <li><a href="../dashboard/data_berita.php" class="nav-link text-white py-1">Data Berita</a></li>
                </ul>
            </div>
        </li>
        <!-- Dropdown Menu / Submenu -->
        <li class="nav-item mt-2">
            <a class="nav-link text-white dropdown-toggle" href="#" data-bs-toggle="collapse"
                data-bs-target="#user-collapse" aria-expanded="false">
                User
            </a>
            <div class="collapse" id="user-collapse">
                <ul class="nav flex-column ms-3 mt-2">
                    <li><a href="../dashboard/tambah_user.php" class="nav-link text-white py-1">Tambah User</a></li>
                    <li><a href="../dashboard/data_user.php" class="nav-link text-white py-1">Data User</a></li>
                </ul>
            </div>
        </li>
    </ul>
    <hr>
    <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
            data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
            <strong><?= htmlspecialchars($_SESSION['username'] ?? 'Admin') ?></strong>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="function/function_auth/logout.php">Sign out</a></li>
        </ul>
    </div>
</div>