<?php

include "koneksi.php";

$id = $_GET['id'] ?? '';

if ($id == '') {
    echo "Data tidak ada";
    exit;
}

$query = mysqli_query($conn, "SELECT * FROM laporan WHERE id='$id'");

$data = mysqli_fetch_assoc($query);

if (!$data) {
    echo "Laporan tidak ditemukan";
    exit;
}

echo $data['fasilitas'] . "|";
echo $data['kategori'] . "|";
echo $data['deskripsi'] . "|";
echo $data['status'];

?>