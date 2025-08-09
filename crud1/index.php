<?php

require 'koneksi.php';

$bukus = ambilData("SELECT * FROM buku");

if (isset($_GET['id'])) {
    if (hapus($_GET['id']) > 0) {
        echo "<script>
                alert('Data berhasil dihapus!');
                document.location.href = 'index.php';
              </script>";
    } else {
        echo "<script>
                alert('Data gagal dihapus!');
                document.location.href = 'index.php';
              </script>";
    }
}
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
        <table class="table table-striped table-bordered align-middle">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Nama Buku</th>
                    <th>Penulis</th>
                    <th>Penerbit</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($bukus as $index => $buku): ?>
                <tr>
                    <td><?= $index + 1; ?></td>
                    <td><?= htmlspecialchars($buku['nama']); ?></td>
                    <td><?= htmlspecialchars($buku['penulis']); ?></td>
                    <td><?= htmlspecialchars($buku['penerbit']); ?></td>
                    <td>
                        <a href="update.php?id=<?= urlencode($buku['id']); ?>" class="btn btn-sm btn-primary">Update</a>
                        <a href="delete.php?id=<?= urlencode($buku['id']); ?>" 
                           class="btn btn-sm btn-danger"
                           onclick="return confirm('Yakin ingin menghapus buku ini?');">
                           Delete
                        </a>
                    </td>
                </tr>
                <?php endforeach; ?>
                <?php if (empty($bukus)): ?>
                <tr>
                    <td colspan="5" class="text-center">Data buku kosong.</td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
