<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Diary</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Tambah Catatan</h2>

<form action="" method="POST">
    <label>Judul</label><br>
    <input type="text" name="title"><br><br>

    <label>Isi Catatan</label><br>
    <textarea name="content" rows="5" cols="40"></textarea><br><br>

    <button type="submit" name="simpan">Simpan</button>
    <a href="index.php">Kembali</a>
</form>

<?php
if(isset($_POST['simpan'])){
    $title = $_POST['title'];
    $content = $_POST['content'];

    mysqli_query($conn, "INSERT INTO diary (title, content) VALUES ('$title', '$content')");
    echo "<script>alert('Catatan Disimpan');window.location='index.php';</script>";
}
?>
</body>
</html>
