<?php
include "koneksi-db.php";

$id = $_POST['id'];
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$tanggal_lahir = $_POST['tanggal_lahir'];

$query = "UPDATE biodata SET nim='$nim', nama='$nama', jenis_kelamin='$jenis_kelamin', tanggal_lahir='$tanggal_lahir' WHERE id='$id'";
if (mysqli_query($koneksi, $query)) {
    header("Location: list-biodata.php");
} else {
    echo "Error: " . mysqli_error($koneksi);
}
?>
