<?php include 'koneksi.php'; ?>


<?php
$id = $_GET['id'];
$q = mysqli_query($conn, "SELECT * FROM diary WHERE id=$id");
$d = mysqli_fetch_array($q);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Catatan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Edit Catatan</h2>

<form action="" method="POST">
    <label>Judul</label><br>
    <input type="text" name="title" value="<?= $d['title']; ?>"><br><br>

    <label>Isi Catatan</label><br>
    <textarea name="content" rows="5" cols="40"><?= $d['content']; ?></textarea><br><br>

    <button type="submit" name="update">Update</button>
    <a href="index.php">Kembali</a>
</form>

<?php
if(isset($_POST['update'])){
    $title = $_POST['title'];
    $content = $_POST['content'];

    mysqli_query($conn, "UPDATE diary SET title='$title', content='$content' WHERE id=$id");
    echo "<script>alert('Update berhasil');window.location='index.php';</script>";
}
?>
</body>
</html>
