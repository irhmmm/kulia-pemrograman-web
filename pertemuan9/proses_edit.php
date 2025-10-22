<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'] ?? null;
    $title = $_POST['title'] ?? '';
    $content = $_POST['content'] ?? '';

    if (empty($id) || empty($title) || empty($content)) {
        die("Error: ID, Judul, dan Konten tidak boleh kosong.");
    }

    $sql = "UPDATE diaries SET title=?, content=? WHERE id=?";

    $stmt = $mysqli->prepare($sql);
    if ($stmt === false) {
        die("Error saat menyiapkan query: " . $mysqli->error);
    }
    
    $stmt->bind_param("ssi", $title, $content, $id);

    if ($stmt->execute()) {
        header("Location: index.php?status=update_sukses");
        exit(); 
    } else {
        echo "Error: Gagal memperbarui data. " . $stmt->error;
    }
    $stmt->close();

} else {
    header("Location: index.php");
    exit();
}

$mysqli->close();
?>