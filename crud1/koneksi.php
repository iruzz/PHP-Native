<?php



$koneksi = mysqli_connect("localhost", "root", "12345", "php_natip");

function ambilData($query) {
    global $koneksi;
    if (!$koneksi) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }
    $result = mysqli_query($koneksi, $query);
    $data = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    return $data;
}

function hapus($id) {
    global $koneksi;
    $query = "DELETE FROM buku WHERE id = $id";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}
?>