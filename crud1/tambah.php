<?php

require 'koneksi.php';

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    form action="" method="post">
        <label for="nama">Nama Buku:</label>
        <input type="text" name="nama" id="nama" required>
        
        <label for="penulis">Penulis:</label>
        <input type="text" name="penulis" id="penulis" required>
        
        <label for="penerbit">Penerbit:</label>
        <input type="text" name="penerbit" id="penerbit" required>
        
        <button type="submit" name="submit">Tambah Buku</button>
    </form>
</body>
</html>