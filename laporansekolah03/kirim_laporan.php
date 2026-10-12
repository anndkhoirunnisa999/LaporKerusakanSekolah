<?php

include "koneksi.php";

$user_id = $_POST['user_id'] ?? '';
$fasilitas = $_POST['fasilitas'] ?? '';
$kategori = $_POST['kategori'] ?? '';
$deskripsi = $_POST['deskripsi'] ?? '';

if ($user_id == '' || $fasilitas == '' || $kategori == '' || $deskripsi == '') {
    echo json_encode([
        "success" => false,
        "message" => "Data laporan belum lengkap"
    ]);
    exit;
}

$query = mysqli_query($conn, "INSERT INTO laporan
    (user_id, fasilitas, kategori, deskripsi, status, tanggal)
    VALUES
    ('$user_id', '$fasilitas', '$kategori', '$deskripsi', 'Menunggu', NOW())");

if ($query) {
    echo json_encode([
        "success" => true,
        "message" => "Laporan berhasil disimpan"
    ]);
} else {
    echo json_encode([
        "success" => false,
        "message" => "Laporan gagal disimpan"
    ]);
}

?>