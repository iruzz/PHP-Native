<?php

require 'koneksi.php';

$bukus = ambildata("SELECT * FROM buku");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bukuu Novell</title>
</head>
<body>
    <?php foreach ($bukus as $buku): ?>
        <h2><?= htmlspecialchars($buku['judul']); ?></h2>
        <p>Penulis: <?= htmlspecialchars($buku['penulis']); ?></p>
        <p>Tahun Terbit: <?= htmlspecialchars($buku['tahun_terbit']); ?></p>
        <hr>
    <?php endforeach; ?>
</body>
</html>
