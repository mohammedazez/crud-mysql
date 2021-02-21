<?php
include "config.php";
// Function update
if (isset($_GET['update'])) {
    $namaLengkap = $_GET['nama'];
    $user_id = $_GET['id'];
    $alamatLengkap = $_GET['alamat'];
    $nomorHp = $_GET['nomor'];
    $email = $_GET['email'];
    $password = $_GET['password'];


    $sql = "UPDATE `pelanggan` SET `nama`='$namaLengkap',`alamat`='$alamatLengkap',`nomor hp`='$nomorHP',`email`='$email',`password`='$password' WHERE `id`='$user_id'";

    $result = $conn->query($sql);

    if ($result == TRUE) {
        echo "Tidak berhasil di update";
    } else {
        echo "Error: " . $sql . "</br>" . $conn->error;
    }
    $conn->close();
}



// Function ambil id
if (isset($_GET['id'])) {
    $user_id = $_GET['id'];

    $sql = "SELECT * FROM `pelanggan` WHERE `id`";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $nama_lengkap = $row['nama'];
            $nama = $row['nama'];
            $alamat = $row['alamat'];
            $nomor = $row['nomor hp'];
            $email = $row['email'];
            $password = $row['password'];
            $id = $row['id'];
        }
    }
?>

    <h1>Update data anda</h1>
    <form action="" method="POST">
        <fieldset>
            <label>Nama Lengkap : </label></br>
            <input type="text" name="nama" placeholder="name" value="<?php echo $nama_lengkap; ?>"></br></br>
            <input type="hidden" name="user_id" value="<?php echo $id; ?>"></br></br>
            <label>Alamat Lengkap :</label></br>
            <input type="text" name="alamat" placeholder="alamat" value="<?php echo $alamat; ?>"></br></br>
            <label>Nomor HP :</label></br>
            <input type="number" name="nomor" placeholder="nomor" value="<?php echo $nomor; ?>"></br></br>
            <label>Email :</label></br>
            <input type="text" name="email" placeholder="email" value="<?php echo $email; ?>"></br></br>
            <label>Password : </label></br>
            <input type="text" name="password" placeholder="password" value="<?php echo $password; ?>"></br></br>
            <input type="submit" value="Update" name="update">
        </fieldset>

    <?php
} else {
    header("locatio : view.php");
}
    ?>