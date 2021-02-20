<?php
include "config.php";
if (isset($_POST['submit'])) {
    $namaLengkap = $_POST['nama'];
    $alamatLengkap = $_POST['alamat'];
    $nomorHp = $_POST['nomor'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO `pelanggan`(`id`, `nama`, `alamat`, `nomor hp`, `email`, `password`) VALUES ('$namaLengkap', '$alamatLengkap', '$nomorHp','$email' ,'$password')";

    $result = $conn->query($sql);

    if ($result == TRUE) {
        echo "Tidak berhasil";
    } else {
        echo "Error: " . $sql . "</br>" . $conn->error;
    }
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create page</title>
</head>

<body>
    <h1>Isi data form anda</h1>
    <form action="" method="POST">
        <fieldset>
            <label>Nama Lengkap : </label></br>
            <input type="text" name="nama" placeholder="name"></br></br>
            <label>Alamat Lengkap :</label></br>
            <input type="text" name="alamat" placeholder="alamat"></br></br>
            <label>Nomor HP :</label></br>
            <input type="number" name="nomor" placeholder="nomor"></br></br>
            <label>Email :</label></br>
            <input type="text" name="email" placeholder="email"></br></br>
            <label>Password : </label></br>
            <input type="text" name="password" placeholder="password"></br></br>
            <input type="submit" value="submit" name="submit">
        </fieldset>
    </form>
</body>

</html>