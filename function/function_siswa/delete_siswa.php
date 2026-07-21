 <?php
 include '../connect.php';

 $id_siswa = $_GET['id_siswa'];
 $sql = mysqli_query($koneksi, "DELETE FROM tb_siswa WHERE id_siswa = '$id_siswa'");

 if ($sql) {
     header("Location: ../../page/dashboard/data_siswa.php?msg=berhasil");
 } else {
     header("Location: ../../page/dashboard/data_siswa.php?msg=gagal");
 }
 ?>