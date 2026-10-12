<?php

include "koneksi.php";

$user_id = $_GET['user_id'] ?? '';

if ($user_id == '') {
    echo "User tidak ada";
    exit;
}

$query = mysqli_query($conn, "SELECT * FROM laporan
    WHERE user_id='$user_id'
    ORDER BY id DESC");

while ($data = mysqli_fetch_assoc($query)) {

    echo $data['fasilitas'] . " | "
        . $data['kategori'] . " | "
        . $data['status'] . " | "
        . $data['tanggal'] . "<br>";
}

?>