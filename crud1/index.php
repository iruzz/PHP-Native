<?php

require 'koneksi.php';

$bukus = ambilData("SELECT * FROM buku");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bukuu Novell</title>

    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
    <div class="container my-5">
        <h1 class="mb-4">Daftar Buku</h1>
        <?php foreach ($bukus as $buku): ?>
            <div class="card mb-3">
                <div class="card-body">
                    <h2 class="card-title"><?= htmlspecialchars($buku['nama']); ?></h2>
                    <p class="card-text"><strong>Penulis:</strong> <?= htmlspecialchars($buku['penulis']); ?></p>
                    <p class="card-text"><strong>Penerbit:</strong> <?= htmlspecialchars($buku['penerbit']); ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
