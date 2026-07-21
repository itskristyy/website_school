<?php
include '../connect.php';

$nama_siswa = $_POST['nama_siswa'];
$siswa_jurusan = $_POST['siswa_jurusan'];
$nipd = $_POST['nipd'];

$sql = "INSERT INTO tb_siswa (nama_siswa, siswa_jurusan, nipd) 
                        VALUES ('$nama_siswa', '$siswa_jurusan', '$nipd')";
$result = mysqli_query($koneksi, $sql);
if ($result) {
    header("Location: ../../page/dashboard/data_siswa.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}