 <?php
    include './function/connect.php';

    $id_user = $_GET['id_user'];
    $sql = mysqli_query($koneksi, "DELETE FROM tb_user WHERE id_user = '$id_user'");

    if ($sql) {
        header("Location: ../../index.php?msg=berhasil");
    } else {
        header("Location: ../../index.php?msg=gagal");
    }
    ?>