<?php 
include "koneksi-db.php"; 
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM biodata WHERE id='$id'");
$row = mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Biodata</title>
</head>
<body>
    <h2>Form Edit Biodata</h2>
    <form method="POST" action="proses-edit.php">
        <input type="hidden" name="id" value="<?= $row['id']; ?>">

        <label>NIM:</label><br>
        <input type="text" name="nim" value="<?= $row['nim']; ?>" required><br><br>

        <label>Nama:</label><br>
        <input type="text" name="nama" value="<?= $row['nama']; ?>" required><br><br>

        <label>Jenis Kelamin:</label><br>
        <select name="jenis_kelamin" required>
            <option value="Laki-laki" <?= ($row['jenis_kelamin']=='Laki-laki')?'selected':''; ?>>Laki-laki</option>
            <option value="Perempuan" <?= ($row['jenis_kelamin']=='Perempuan')?'selected':''; ?>>Perempuan</option>
        </select><br><br>

        <label>Tanggal Lahir:</label><br>
        <input type="date" name="tanggal_lahir" value="<?= $row['tanggal_lahir']; ?>" required><br><br>

        <button type="submit">Update</button>
    </form>
    <br>
    <a href="list-biodata.php">Kembali</a>
</body>
</html>
