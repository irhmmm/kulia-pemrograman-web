<?php
include 'koneksi.php';
$result = $mysqli->query("SELECT * FROM diaries ORDER BY date ASC");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Diary irham  </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <header>
        <h2> Diary irham</h2>
        <a href="input.php" class="btn">+ Tambah Catatan</a>
    </header>
    <hr>

    <?php
    if ($result->num_rows > 0) {
        $no = 1;
        while ($row = $result->fetch_assoc()) {
            echo "<div class='card'>";
            echo "<div class='number-circle'>$no</div>";
            echo "<div class='card-content'>";
            echo "<h3>" . htmlspecialchars($row['title']) . "</h3>";
            echo "<p>" . nl2br(htmlspecialchars($row['content'])) . "</p>";
            echo "<small>Dibuat: " . $row['date'] . "</small><br>";
            echo "<a href='edit.php?id=" . $row['id'] . "' class='btn'>Edit</a> ";
            echo "<a href='hapus.php?id=" . $row['id'] . "' class='btn danger' onclick='return confirm(\"Hapus catatan ini?\");'>Hapus</a>";
            echo "</div></div>";
            $no++;
        }
    } else {
        echo "<p class='text-center'>Belum ada catatan.</p>";
    }
    ?>
</div>
</body>
</html>
