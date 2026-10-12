<?php

include "../koneksi.php";

$query = mysqli_query($conn, "SELECT * FROM laporan ORDER BY id DESC");

$total = mysqli_num_rows(mysqli_query($conn, "SELECT id FROM laporan"));
$menunggu = mysqli_num_rows(mysqli_query($conn, "SELECT id FROM laporan WHERE status='Menunggu'"));
$diproses = mysqli_num_rows(mysqli_query($conn, "SELECT id FROM laporan WHERE status='Diproses'"));
$selesai = mysqli_num_rows(mysqli_query($conn, "SELECT id FROM laporan WHERE status='Selesai'"));

?>

<!DOCTYPE html>
<html>
<head>

    <title>Admin - LaporSekolah</title>

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f7fb;
            color: #172033;
        }

        .header {
            background: #0b1f3a;
            color: white;
            padding: 28px 50px;
        }

        .header h1 {
            margin: 0;
            font-size: 28px;
        }

        .header p {
            margin: 8px 0 0;
            color: #b9c7dc;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 35px auto;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            margin-bottom: 30px;
        }

        .card {
            background: white;
            padding: 22px;
            border-radius: 14px;
            box-shadow: 0 5px 18px rgba(11, 31, 58, 0.08);
        }

        .card h3 {
            margin: 0;
            color: #65748b;
            font-size: 14px;
        }

        .card p {
            margin: 10px 0 0;
            font-size: 30px;
            font-weight: bold;
            color: #0b1f3a;
        }

        .table-box {
            background: white;
            padding: 25px;
            border-radius: 14px;
            box-shadow: 0 5px 18px rgba(11, 31, 58, 0.08);
            overflow-x: auto;
        }

        .table-box h2 {
            margin-top: 0;
            color: #0b1f3a;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background: #0b1f3a;
            color: white;
            padding: 13px;
            text-align: left;
        }

        td {
            padding: 13px;
            border-bottom: 1px solid #e5e9f0;
        }

        tr:hover {
            background: #f5f8fc;
        }

        img {
            width: 80px;
            height: 60px;
            object-fit: cover;
            border-radius: 8px;
        }

        .buttons {
            margin-top: 25px;
        }

        button {
            background: #0b1f3a;
            color: white;
            border: none;
            padding: 12px 22px;
            border-radius: 8px;
            cursor: pointer;
            font-weight: bold;
            margin-right: 10px;
        }

        button:hover {
            background: #163b68;
        }

        @media (max-width: 800px) {

            .cards {
                grid-template-columns: repeat(2, 1fr);
            }

        }

    </style>

</head>

<body>

<div class="header">
    <h1>LaporSekolah</h1>
    <p>Dashboard Admin • Rekapitulasi Laporan Fasilitas</p>
</div>

<div class="container">

    <div class="cards">

        <div class="card">
            <h3>TOTAL LAPORAN</h3>
            <p><?= $total; ?></p>
        </div>

        <div class="card">
            <h3>MENUNGGU</h3>
            <p><?= $menunggu; ?></p>
        </div>

        <div class="card">
            <h3>DIPROSES</h3>
            <p><?= $diproses; ?></p>
        </div>

        <div class="card">
            <h3>SELESAI</h3>
            <p><?= $selesai; ?></p>
        </div>

    </div>

    <div class="table-box">

        <h2>Daftar Laporan</h2>

        <table>

            <tr>
                <th>No</th>
                <th>Fasilitas</th>
                <th>Kategori</th>
                <th>Deskripsi</th>
                <th>Foto</th>
                <th>Status</th>
                <th>Tanggal</th>
            </tr>

            <?php
            $no = 1;

            while ($data = mysqli_fetch_assoc($query)) {
            ?>

            <tr>

                <td><?= $no++; ?></td>

                <td><?= $data['fasilitas']; ?></td>

                <td><?= $data['kategori']; ?></td>

                <td><?= $data['deskripsi']; ?></td>

                <td>

                    <?php if ($data['foto'] != '') { ?>

                        <img src="../foto/<?= $data['foto']; ?>">

                    <?php } else { ?>

                        Tidak ada

                    <?php } ?>

                </td>

                <td><?= $data['status']; ?></td>

                <td><?= $data['tanggal']; ?></td>

            </tr>

            <?php } ?>

        </table>

        <div class="buttons">

            <button onclick="window.print()">
                CETAK LAPORAN
            </button>

            <button onclick="window.location.href='export_excel.php'">
                EXPORT EXCEL
            </button>

</div>

    </div>

</div>

</body>
</html>