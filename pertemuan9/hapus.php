<?php
include 'koneksi.php';
$id = $_GET['id'];

$stmt = $mysqli->prepare("DELETE FROM diaries WHERE id=?");
$stmt->bind_param("i", $id);
$stmt->execute();

header("Location: index.php");
exit;
?>
