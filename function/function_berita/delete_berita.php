 <?php
    include './function/connect.php';

    $id_berita = $_GET['id_berita'];
    $sql = mysqli_query($koneksi, "DELETE FROM tb_berita WHERE id_berita = '$id_berita'");

    if ($sql) {
        header("Location: ../../index.php?msg=berhasil");
    } else {
        header("Location: ../../index.php?msg=gagal");
    }
    ?>