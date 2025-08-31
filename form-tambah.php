<!DOCTYPE html>
<html>
<head>
    <title>Tambah Biodata</title>
</head>
<body>
    <h2>Form Tambah Biodata</h2>
    <form method="POST" action="proses-tambah.php">
        <label>NIM:</label><br>
        <input type="text" name="nim" required><br><br>

        <label>Nama:</label><br>
        <input type="text" name="nama" required><br><br>

        <label>Jenis Kelamin:</label><br>
        <select name="jenis_kelamin" required>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select><br><br>

        <label>Tanggal Lahir:</label><br>
        <input type="date" name="tanggal_lahir" required><br><br>

        <button type="submit">Simpan</button>
    </form>
    <br>
    <a href="list-biodata.php">Kembali</a>
</body>
</html>
