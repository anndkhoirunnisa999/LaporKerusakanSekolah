<?php

include "koneksi.php";

$user_id = $_GET['user_id'] ?? '';

if ($user_id == '') {
    echo "User tidak ada";
    exit;
}

$data = file_get_contents("php://input");

if (!$data) {
    echo "Foto tidak diterima";
    exit;
}

$namaFile = "laporan_" . time() . ".jpg";
$lokasi = "foto/" . $namaFile;

if (file_put_contents($lokasi, $data)) {

    $query = mysqli_query($conn, "UPDATE laporan
        SET foto='$namaFile'
        WHERE user_id='$user_id'
        AND (foto IS NULL OR foto='')
        ORDER BY id DESC
        LIMIT 1");

    if ($query) {
        echo "Foto berhasil disimpan";
    } else {
        echo "Foto tersimpan, tetapi database gagal diperbarui";
    }

} else {
    echo "Gagal menyimpan foto";
}

?>