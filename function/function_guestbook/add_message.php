<?php
include './function/connect.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$message = $_POST['message'];
date_default_timezone_set('Asia/Jakarta');
$createdAt = date('d-m-Y');

$sql = "INSERT INTO tb_guestbook (nama, email, message, createdAt) VALUES ('$nama', '$email', '$message', '$createdAt')";
$result = mysqli_query($koneksi, $sql);
if ($result) {
    header("Location: ../../index.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}