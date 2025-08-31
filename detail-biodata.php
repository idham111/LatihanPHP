<?php 
include "koneksi-db.php"; 
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM biodata WHERE id='$id'");
$row = mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Detail Biodata</title>
</head>
<body>
    <h2>Detail Biodata</h2>
    <p><b>NIM:</b> <?= $row['nim']; ?></p>
    <p><b>Nama:</b> <?= $row['nama']; ?></p>
    <p><b>Jenis Kelamin:</b> <?= $row['jenis_kelamin']; ?></p>
    <p><b>Tanggal Lahir:</b> <?= $row['tanggal_lahir']; ?></p>
    <a href="list-biodata.php">Kembali</a>
</body>
</html>
