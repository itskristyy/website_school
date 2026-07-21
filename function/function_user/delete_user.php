 <?php
    include '../connect.php';

    $id_user = $_GET['id_user'];
    $sql = mysqli_query($koneksi, "DELETE FROM tb_user WHERE id_user = '$id_user'");

    if ($sql) {
        header("Location: ../../page/dashboard/data_user.php?msg=berhasil");
    } else {
        header("Location: ../../page/dashboard/data_user.php?msg=gagal");
    }
    ?>