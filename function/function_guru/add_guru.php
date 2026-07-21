<?php
include '../connect.php';

$nama_guru = $_POST['nama_guru'];
$guru_jurusan = $_POST['guru_jurusan'];
$nip = $_POST['nip'];

$sql = "INSERT INTO tb_guru (nama_guru, guru_jurusan, nip) 
                        VALUES ('$nama_guru', '$guru_jurusan', '$nip')";
$result = mysqli_query($koneksi, $sql);
if ($result) {
    header("Location: ../../page/dashboard/data_guru.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}