<div class="d-flex flex-column flex-shrink-0 p-4 text-white" style="width: 280px; min-height: 100vh; background-color: var(--skn-primary); border-right: 1px solid var(--skn-secondary);">
    <a href="#" class="d-flex align-items-center mb-4 me-md-auto text-white text-decoration-none">
        <span class="font-headline fs-4 fw-bold text-uppercase" style="color: var(--skn-amber);"><i class="bi bi-shield-lock me-2"></i>Skanifo Admin</span>
    </a>
    <hr style="border-color: rgba(255,255,255,0.2); margin-top: 0;">
    <ul class="nav nav-pills flex-column mb-auto font-mono small text-uppercase gap-2">
        <li class="nav-item">
            <a href="../dashboard/dashboard.php" class="nav-link text-white d-flex align-items-center gap-2 rounded-0 border-start border-4 border-transparent" style="transition: border-color 0.2s;">
                <i class="bi bi-speedometer2"></i> Dashboard
            </a>
        </li>
        <li class="nav-item">
            <a href="../dashboard/guestbook_list.php" class="nav-link text-white d-flex align-items-center gap-2 rounded-0 border-start border-4 border-transparent" style="transition: border-color 0.2s;">
                <i class="bi bi-envelope"></i> Guestbook List
            </a>
        </li>
        <!-- Dropdown Menu / Submenu -->
        <li class="nav-item">
            <a class="nav-link text-white dropdown-toggle d-flex align-items-center gap-2 rounded-0 border-start border-4 border-transparent" href="#" data-bs-toggle="collapse"
                data-bs-target="#dataMaster-collapse" aria-expanded="false">
                <i class="bi bi-newspaper"></i> Berita
            </a>
            <div class="collapse" id="dataMaster-collapse">
                <ul class="nav flex-column ms-4 mt-2 gap-1 border-start" style="border-color: rgba(255,255,255,0.2) !important;">
                    <li><a href="../dashboard/tambah_berita.php" class="nav-link py-1 px-3 text-white" style="color: rgba(255,255,255,.7) !important;">Tambah Berita</a></li>
                    <li><a href="../dashboard/data_berita.php" class="nav-link py-1 px-3 text-white" style="color: rgba(255,255,255,.7) !important;">Data Berita</a></li>
                </ul>
            </div>
        </li>
        <!-- Dropdown Menu / Submenu -->
        <li class="nav-item">
            <a class="nav-link text-white dropdown-toggle d-flex align-items-center gap-2 rounded-0 border-start border-4 border-transparent" href="#" data-bs-toggle="collapse"
                data-bs-target="#user-collapse" aria-expanded="false">
                <i class="bi bi-people"></i> User
            </a>
            <div class="collapse" id="user-collapse">
                <ul class="nav flex-column ms-4 mt-2 gap-1 border-start" style="border-color: rgba(255,255,255,0.2) !important;">
                    <li><a href="../dashboard/tambah_user.php" class="nav-link py-1 px-3 text-white" style="color: rgba(255,255,255,.7) !important;">Tambah User</a></li>
                    <li><a href="../dashboard/data_user.php" class="nav-link py-1 px-3 text-white" style="color: rgba(255,255,255,.7) !important;">Data User</a></li>
                </ul>
            </div>
        </li>
        <!-- Dropdown Menu / Submenu -->
        <li class="nav-item">
            <a class="nav-link text-white dropdown-toggle d-flex align-items-center gap-2 rounded-0 border-start border-4 border-transparent" href="#" data-bs-toggle="collapse"
                data-bs-target="#guru-collapse" aria-expanded="false">
                <i class="bi bi-people"></i> Guru
            </a>
            <div class="collapse" id="guru-collapse">
                <ul class="nav flex-column ms-4 mt-2 gap-1 border-start" style="border-color: rgba(255,255,255,0.2) !important;">
                    <li><a href="../dashboard/tambah_guru.php" class="nav-link py-1 px-3 text-white" style="color: rgba(255,255,255,.7) !important;">Tambah Guru</a></li>
                    <li><a href="../dashboard/data_guru.php" class="nav-link py-1 px-3 text-white" style="color: rgba(255,255,255,.7) !important;">Data Guru</a></li>
                </ul>
            </div>
        </li>
        <!-- Dropdown Menu / Submenu -->
        <li class="nav-item">
            <a class="nav-link text-white dropdown-toggle d-flex align-items-center gap-2 rounded-0 border-start border-4 border-transparent" href="#" data-bs-toggle="collapse"
                data-bs-target="#siswa-collapse" aria-expanded="false">
                <i class="bi bi-people"></i> Siswa
            </a>
            <div class="collapse" id="siswa-collapse">
                <ul class="nav flex-column ms-4 mt-2 gap-1 border-start" style="border-color: rgba(255,255,255,0.2) !important;">
                    <li><a href="../dashboard/tambah_siswa.php" class="nav-link py-1 px-3 text-white" style="color: rgba(255,255,255,.7) !important;">Tambah Siswa</a></li>
                    <li><a href="../dashboard/data_siswa.php" class="nav-link py-1 px-3 text-white" style="color: rgba(255,255,255,.7) !important;">Data Siswa</a></li>
                </ul>
            </div>
        </li>
        <!-- Dropdown Menu / Submenu -->
        <li class="nav-item">
            <a class="nav-link text-white dropdown-toggle d-flex align-items-center gap-2 rounded-0 border-start border-4 border-transparent" href="#" data-bs-toggle="collapse"
                data-bs-target="#alumni-collapse" aria-expanded="false">
                <i class="bi bi-people"></i> Alumni
            </a>
            <div class="collapse" id="alumni-collapse">
                <ul class="nav flex-column ms-4 mt-2 gap-1 border-start" style="border-color: rgba(255,255,255,0.2) !important;">
                    <li><a href="../dashboard/tambah_alumni.php" class="nav-link py-1 px-3 text-white" style="color: rgba(255,255,255,.7) !important;">Tambah Alumni</a></li>
                    <li><a href="../dashboard/data_alumni.php" class="nav-link py-1 px-3 text-white" style="color: rgba(255,255,255,.7) !important;">Data Alumni</a></li>
                </ul>
            </div>
        </li>
    </ul>
    <hr style="border-color: rgba(255,255,255,0.2);">
    <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle font-mono small"
            data-bs-toggle="dropdown" aria-expanded="false">
            <div class="rounded-circle d-flex align-items-center justify-content-center me-2 text-white" style="width: 32px; height: 32px; background-color: var(--skn-secondary);">
                <i class="bi bi-person-fill"></i>
            </div>
            <strong><?= htmlspecialchars($_SESSION['username'] ?? 'Admin') ?></strong>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow font-mono small rounded-0" style="background-color: var(--skn-primary); border: 1px solid var(--skn-secondary);">
            <li>
                <hr class="dropdown-divider" style="border-color: rgba(255,255,255,0.2);">
            </li>
            <li><a class="dropdown-item" href="../../function/function_auth/logout.php">Sign out</a></li>
        </ul>
    </div>
</div>

<style>
.nav-link.border-transparent { border-color: transparent; }
.nav-link:hover.border-transparent, .nav-link[aria-expanded="true"] { border-color: var(--skn-amber) !important; background-color: rgba(255,255,255,0.05); }
</style>