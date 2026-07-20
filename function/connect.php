<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "db_school";

//buat koneksi ke database
$koneksi = mysqli_connect($server, $username, $password, $database);

if (!$koneksi) {
    die ("Koneksi Gagal: ". mysqli_connect_error());
}
?>