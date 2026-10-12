<?php

include "koneksi.php";

$total = mysqli_num_rows(mysqli_query($conn, "SELECT id FROM laporan"));

$menunggu = mysqli_num_rows(mysqli_query($conn, "SELECT id FROM laporan WHERE status='Menunggu'"));

$diproses = mysqli_num_rows(mysqli_query($conn, "SELECT id FROM laporan WHERE status='Diproses'"));

$selesai = mysqli_num_rows(mysqli_query($conn, "SELECT id FROM laporan WHERE status='Selesai'"));

echo $total . "|" . $menunggu . "|" . $diproses . "|" . $selesai;

?>