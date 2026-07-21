<?php
include '../connect.php';

$judul_berita = $_POST['judul_berita'];
$url_image = $_POST['url_image'];
$deskripsi_berita = $_POST['deskripsi_berita'];
$kategori_berita = $_POST['kategori_berita'];
$link_berita = $_POST['link_berita'];
$created_at = date('Y-m-d');
$updated_at = date('Y-m-d');

$sql = "INSERT INTO tb_berita (judul_berita, url_image, deskripsi_berita, kategori_berita, link_berita, created_at, updated_at) 
                        VALUES ('$judul_berita', '$url_image', '$deskripsi_berita', '$kategori_berita', '$link_berita', '$created_at', '$updated_at')";
$result = mysqli_query($koneksi, $sql);
if ($result) {
    header("Location: ../../page/dashboard/data_berita.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}