 <?php
    include '../connect.php';

    $id_alumni = $_GET['id_alumni'];
    $sql = mysqli_query($koneksi, "DELETE FROM tb_alumni WHERE id_alumni = '$id_alumni'");

    if ($sql) {
        header("Location: ../../page/dashboard/data_alumni.php?msg=berhasil");
    } else {
        header("Location: ../../page/dashboard/data_alumni.php?msg=gagal");
    }
    ?>