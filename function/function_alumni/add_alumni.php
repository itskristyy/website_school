<?php
include '../connect.php';

$nama_alumni = $_POST['nama_alumni'];
$alumni_jurusan = $_POST['alumni_jurusan'];
$tahun_lulus = $_POST['tahun_lulus'];

$sql = "INSERT INTO tb_alumni (nama_alumni, alumni_jurusan, tahun_lulus) 
                        VALUES ('$nama_alumni', '$alumni_jurusan', '$tahun_lulus')";
$result = mysqli_query($koneksi, $sql);
if ($result) {
    header("Location: ../../page/dashboard/data_alumni.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}