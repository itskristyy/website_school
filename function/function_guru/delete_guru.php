 <?php
 include '../connect.php';

 $id_guru = $_GET['id_guru'];
 $sql = mysqli_query($koneksi, "DELETE FROM tb_guru WHERE id_guru = '$id_guru'");

 if ($sql) {
     header("Location: ../../page/dashboard/data_guru.php?msg=berhasil");
 } else {
     header("Location: ../../page/dashboard/data_guru.php?msg=gagal");
 }
 ?>