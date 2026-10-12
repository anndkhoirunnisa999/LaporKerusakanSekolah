<?php

include "koneksi.php";

$total = mysqli_fetch_assoc(
    mysqli_query($conn, "SELECT COUNT(*) AS jumlah FROM laporan")
)['jumlah'];

$menunggu = mysqli_fetch_assoc(
    mysqli_query($conn, "SELECT COUNT(*) AS jumlah FROM laporan WHERE status='Menunggu'")
)['jumlah'];

$diproses = mysqli_fetch_assoc(
    mysqli_query($conn, "SELECT COUNT(*) AS jumlah FROM laporan WHERE status='Diproses'")
)['jumlah'];

$selesai = mysqli_fetch_assoc(
    mysqli_query($conn, "SELECT COUNT(*) AS jumlah FROM laporan WHERE status='Selesai'")
)['jumlah'];

echo "Total Laporan: " . $total . "\n";
echo "Menunggu: " . $menunggu . "\n";
echo "Diproses: " . $diproses . "\n";
echo "Selesai: " . $selesai;

?>