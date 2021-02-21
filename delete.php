<?php
include "config.php";

if (isset($_GET['id'])) {
    $user_id = $_GET['id'];

    $sql = "DELETE FROM `pelanggan` WHERE `id`='$user_id'";

    $result = $conn->query($sql);

    // Buat kondisi jika berhasil dan gagal
    if ($result == TRUE) {
        echo "Hapus data berhasil";
    } else {
        echo "hapus gagal" . $sql . "</br>" . $conn->error;
    }
}
