<?php
include '../connect.php';

$username = $_POST['username'];
$nip = $_POST['nip'];
$password = md5($_POST['password']);

$sql = "INSERT INTO tb_user (username, nip, password) 
        VALUES ('$username', '$nip', '$password')";
$result = mysqli_query($koneksi, $sql);
if ($result) {
    header("Location: ../../page/dashboard/data_user.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}