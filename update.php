<?php
include "config.php";
// Function update

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

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Update data anda</title>
    </head>

    <body>
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
        </form>
    </body>

    </html>
<?php
} else {
    header("locatio : view.php");
}
?>