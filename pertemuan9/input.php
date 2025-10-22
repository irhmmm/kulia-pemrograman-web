<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Catatan</title>
</head>
<link rel="stylesheet" href="style.css">

<body>
<h2>Tambah Catatan Baru</h2>
<form action="proses_input.php" method="post">
    Judul: <br>
    <input type="text" name="title" required><br><br>
    Isi Catatan: <br>
    <textarea name="content" rows="8" cols="50" required></textarea><br><br>
    <input type="submit" value="Simpan">
    <a href="index.php">Batal</a>
</form>
</body>
</html>
