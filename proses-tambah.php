<?php
include "koneksi-db.php";

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$tanggal_lahir = $_POST['tanggal_lahir'];

$query = "INSERT INTO biodata (nim, nama, jenis_kelamin, tanggal_lahir) 
          VALUES ('$nim','$nama','$jenis_kelamin','$tanggal_lahir')";
if (mysqli_query($koneksi, $query)) {
    header("Location: list-biodata.php");
} else {
    echo "Error: " . mysqli_error($koneksi);
}
?>
