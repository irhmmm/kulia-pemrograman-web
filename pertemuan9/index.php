<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Diary - Catatan Pribadi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="page-wrapper">
        <h2>📘 Daftar Catatan Pribadi</h2>
        
        <div class="content-card">
            <a href="tambah.php">Tambah Catatan Baru</a>
            
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Isi Catatan</th>
                        <th>Tanggal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    $q = mysqli_query($conn, "SELECT * FROM diary ORDER BY id DESC");
                    
                    if (mysqli_num_rows($q) > 0) {
                        while ($d = mysqli_fetch_array($q)) {
                    ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= htmlspecialchars($d['title']); ?></td>
                        <td><?= htmlspecialchars(substr($d['content'], 0, 80)); ?><?= strlen($d['content']) > 80 ? '...' : ''; ?></td>
                        <td><?= date('d M Y H:i', strtotime($d['created_at'])); ?></td>
                        <td>
                            <a href="edit.php?id=<?= $d['id']; ?>">Edit</a>
                            <a href="hapus.php?id=<?= $d['id']; ?>" onclick="return confirm('Yakin ingin menghapus catatan ini?')">Hapus</a>
                        </td>
                    </tr>
                    <?php 
                        }
                    } else {
                    ?>
                    <tr>
                        <td colspan="5" style="text-align: center; padding: 40px; color: var(--text-tertiary);">
                            Belum ada catatan. Mulai menulis catatan pertama Anda!
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>