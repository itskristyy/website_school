 <?php
    include '../connect.php';

    $id_berita = $_GET['id_berita'];
    $sql = mysqli_query($koneksi, "DELETE FROM tb_berita WHERE id_berita = '$id_berita'");

    if ($sql) {
        header("Location: ../../page/dashboard/data_berita.php?msg=berhasil");
    } else {
        header("Location: ../../page/dashboard/data_berita.php?msg=gagal");
    }
    ?>