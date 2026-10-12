<?php

include "koneksi.php";

$query = mysqli_query($conn, "SELECT id FROM laporan ORDER BY id DESC");

$data = [];

while ($row = mysqli_fetch_assoc($query)) {
    $data[] = "Laporan #" . $row['id'];
}

echo implode(",", $data);

?>