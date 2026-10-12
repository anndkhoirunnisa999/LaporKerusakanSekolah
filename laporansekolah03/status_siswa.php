
<?php
include "koneksi.php";

header("Content-Type: application/json; charset=UTF-8");

$user_id = $_GET['user_id'] ?? '';

if ($user_id == '' || !ctype_digit($user_id)) {
    echo json_encode([
        "success" => false,
        "message" => "User ID tidak valid"
    ]);
    exit;
}

$stmt = mysqli_prepare(
    $conn,
    "SELECT
        COUNT(*) AS total,
        SUM(status = 'Menunggu') AS menunggu,
        SUM(status = 'Diproses') AS diproses,
        SUM(status = 'Selesai') AS selesai
     FROM laporan
     WHERE user_id = ?"
);

mysqli_stmt_bind_param($stmt, "i", $user_id);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);
$data = mysqli_fetch_assoc($result);

echo json_encode([
    "success" => true,
    "total" => (int)$data['total'],
    "menunggu" => (int)$data['menunggu'],
    "diproses" => (int)$data['diproses'],
    "selesai" => (int)$data['selesai']
]);
?>
