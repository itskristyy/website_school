<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Menghitung URL login.php secara dinamis supaya aman
$protocol  = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
$host      = $_SERVER['HTTP_HOST'];
$doc_root  = strtolower(str_replace('\\', '/', $_SERVER['DOCUMENT_ROOT']));
$dir_path  = strtolower(str_replace('\\', '/', __DIR__));
$web_path  = str_replace($doc_root, '', $dir_path);
$login_url = $protocol . '://' . $host . $web_path . '/login.php';

if (!isset($_SESSION['admin_id'])) {
    header("Location: $login_url");
    exit;
}


// Opsional: auto logout setelah tidak aktif selama 30 menit
$timeout = 1800;
if (isset($_SESSION['login_time']) && (time() - $_SESSION['login_time'] > $timeout)) {
    session_unset();
    session_destroy();
    header("Location: $login_url?expired=1");
    exit;
}
$_SESSION['login_time'] = time();