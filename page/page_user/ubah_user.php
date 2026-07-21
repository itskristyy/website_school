<?php
include "../../function/connect.php";

$id_user = $_GET['id_user'];

$get_data = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE id_user='$id_user'");
$row_data = mysqli_fetch_array($get_data);

?>