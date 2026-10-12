<?php

include "koneksi.php";

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

if ($username == '' || $password == '') {
    echo json_encode([
        "success" => false,
        "message" => "Username dan password wajib diisi"
    ]);
    exit;
}

$query = mysqli_query($conn, "SELECT * FROM users
    WHERE username='$username' AND password='$password'");

if (mysqli_num_rows($query) > 0) {

    $user = mysqli_fetch_assoc($query);

    echo json_encode([
        "success" => true,
        "message" => "Login berhasil",
        "id" => $user['id'],
        "username" => $user['username'],
        "nama" => $user['nama'],
        "role" => $user['role']
    ]);

} else {

    echo json_encode([
        "success" => false,
        "message" => "Username atau password salah"
    ]);
}

?>