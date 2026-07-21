<?php
include "../../function/connect.php";

$id_berita = $_GET['id_berita'];

$get_data = mysqli_query($koneksi, "SELECT * FROM tb_berita WHERE id_berita='id_berita");
$row_data = mysqli_fetch_array($get_data);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>