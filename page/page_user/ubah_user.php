<?php
include "../../function/connect.php";

require '../../function/function_auth/auth.php';

$id_user = $_GET['id_user'];

$get_data = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE id_user='$id_user'");
$row_data = mysqli_fetch_array($get_data);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah User</title>


    <!-- Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
</head>

<body>


    <main class="d-flex flex-nowrap">
        <!-- Sidebar -->
        <?php require '../../components/sidebar.php'; ?>

        <form action="../../function/function_user/edit_user.php?id=<?php echo $id_user; ?>" method="post">
            <input type="text" name="username" id="username" placeholder="Username"
                value="<?php echo $row_data['username']; ?>" required />
            <input type="number" name="nip" id="nip" placeholder="NIP" value="<?php echo $row_data['nip']; ?>"
                required />
            <input type="password" name="password" id="password" placeholder="Password"
                value="<?php echo $row_data['password']; ?>" required />
            <input type="submit" value="Update" />
        </form>
    </main>
    <!-- Bootstrap 5.3 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>