<?php
include './function/connect.php';

// import data
$id = $_GET['id'];
$username = $_POST['username'];
$nip = $_POST['nip'];
$password = md5($_POST['password']);

$sql = mysqli_query($koneksi, "UPDATE tb_user
                              SET username='$username', nip='$nip', password='$password' 
                              WHERE id_user='$id'");

if ($sql) {
    header("Location: ../../index.php?msg=berhasil");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}