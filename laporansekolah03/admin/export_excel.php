<?php

include "../koneksi.php";

header("Content-Type: application/vnd.ms-excel; charset=utf-8");
header("Content-Disposition: attachment; filename=laporan_sekolah.xls");
header("Pragma: no-cache");
header("Expires: 0");

$query = mysqli_query($conn, "SELECT * FROM laporan ORDER BY id DESC");

echo "\xEF\xBB\xBF";

echo "<table border='1'>";

echo "<tr>";
echo "<th>No</th>";
echo "<th>Fasilitas</th>";
echo "<th>Kategori</th>";
echo "<th>Deskripsi</th>";
echo "<th>Status</th>";
echo "<th>Tanggal</th>";
echo "</tr>";

$no = 1;

while ($data = mysqli_fetch_assoc($query)) {

    echo "<tr>";

    echo "<td>" . $no++ . "</td>";
    echo "<td>" . htmlspecialchars($data['fasilitas']) . "</td>";
    echo "<td>" . htmlspecialchars($data['kategori']) . "</td>";
    echo "<td>" . htmlspecialchars($data['deskripsi']) . "</td>";
    echo "<td>" . htmlspecialchars($data['status']) . "</td>";
    echo "<td>" . $data['tanggal'] . "</td>";

    echo "</tr>";
}

echo "</table>";

?>