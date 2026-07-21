<?php
session_start();
require __DIR__ . '/../connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = md5($_POST['password']);

    // Menggunakan prepared statement mysqli sesuai dengan koneksi $koneksi di connect.php
    $stmt = mysqli_prepare($koneksi, "SELECT * FROM tb_user WHERE username = ?");
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $admin = mysqli_fetch_assoc($result);


    if ($admin && $password === $admin['password']) {
        // Regenerate session ID cegah session fixation
        session_regenerate_id(true);

        $_SESSION['admin_id'] = $admin['id_user'];
        $_SESSION['username'] = $admin['username'];
        $_SESSION['login_time'] = time();

        header('Location: ../../page/dashboard/dashboard.php');
        exit;
    } else {
        $_SESSION['login_error'] = "Username atau password salah";
        header('Location: ../../login.php');
        exit;
    }
} else {
    header('Location: ../../login.php');
    exit;
}