<?php
include "koneksi-db.php";
$id = $_GET['id'];

$query = "DELETE FROM biodata WHERE id='$id'";
if (mysqli_query($koneksi, $query)) {
    header("Location: list-biodata.php");
} else {
    echo "Error: " . mysqli_error($koneksi);
}
?>
