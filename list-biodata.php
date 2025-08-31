<?php 
include "koneksi-db.php"; 
?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Biodata</title>
</head>
<body>
    <h2>Daftar Biodata Mahasiswa</h2>
    <a href="form-tambah.php">+ Tambah Data</a>
    <br><br>

    <form method="GET" action="">
        <input type="text" name="keyword" placeholder="Cari nama atau NIM">
        <button type="submit">Cari</button>
    </form>
    <br>

    <?php
    if (isset($_GET['keyword'])) {
        $keyword = $_GET['keyword'];
        $data = mysqli_query($koneksi, "SELECT * FROM biodata 
                  WHERE nama LIKE '%$keyword%' OR nim LIKE '%$keyword%'");
    } else {
        $data = mysqli_query($koneksi, "SELECT * FROM biodata");
    }

    $no = 1;
    while ($row = mysqli_fetch_assoc($data)) {
        echo "<p><b>".$no++.". ".$row['nama']."</b><br>";
        echo "NIM: ".$row['nim']."<br>";
        echo "Jenis Kelamin: ".$row['jenis_kelamin']."<br>";
        echo "Tanggal Lahir: ".$row['tanggal_lahir']."<br>";
        echo "<a href='detail-biodata.php?id=".$row['id']."'>Detail</a> | 
              <a href='form-edit.php?id=".$row['id']."'>Edit</a> | 
              <a href='hapus.php?id=".$row['id']."' onclick=\"return confirm('Yakin hapus data?')\">Hapus</a></p>";
        echo "<hr>";
    }
    ?>
</body>
</html>
