<?php
include 'koneksi.php';

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die("Error: ID tidak valid atau tidak ditemukan.");
}

$id = $_GET['id'];

$sql = "SELECT * FROM diaries WHERE id = ?";
$stmt = $mysqli->prepare($sql);

if ($stmt === false) {
    die("Error saat menyiapkan query: " . $mysqli->error);
}

$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    die("Catatan dengan ID tersebut tidak ditemukan.");
}

$row = $result->fetch_assoc();
$stmt->close();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Catatan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Edit Catatan</h2>
    <form action="proses_edit.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        
        <label for="title">Judul:</label><br>
        <input type="text" id="title" name="title" value="<?php echo htmlspecialchars($row['title']); ?>" required><br><br>
        
        <label for="content">Isi Catatan:</label><br>
        <textarea id="content" name="content" rows="10" required><?php echo htmlspecialchars($row['content']); ?></textarea><br><br>
        
        <input type="submit" value="Update Catatan" class="btn">
        <a href="index.php" class="btn danger">Batal</a>
    </form>
</div>

</body>
</html>