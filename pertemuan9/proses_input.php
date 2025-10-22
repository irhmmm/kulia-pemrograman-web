<?php
include 'koneksi.php';

$title = $_POST['title'];
$content = $_POST['content'];

$stmt = $mysqli->prepare("INSERT INTO diaries (title, content) VALUES (?, ?)");
$stmt->bind_param("ss", $title, $content);
$stmt->execute();

header("Location: index.php");
exit;
?>
