<?php
include '../connect.php';

// import data
$id_berita = $_GET['id_berita'];
$judul_berita = $_POST['judul_berita'];
$url_image = $_POST['url_image'];
$deskripsi_berita = $_POST['deskripsi_berita'];
$kategori_berita = $_POST['kategori_berita'];
$link_berita = $_POST['link_berita'];
$created_at = $_POST['created_at'];
$updated_at = $_POST['updated_at'];

$sql = mysqli_query($koneksi, "UPDATE tb_berita
                              SET judul_berita='$judul_berita', url_image='$url_image', 
                              deskripsi_berita='$deskripsi_berita', kategori_berita='$kategori_berita',
                              link_berita='$link_berita', created_at='$created_at', updated_at='$updated_at' 
                              WHERE id_berita='$id_berita'");

if ($sql) {
    header("Location: ../../page/dashboard/data_berita.php?msg=berhasil");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}