<?php

$koneksi = mysqli_connect("localhost", "", "", "php_natip");

function ambilData($query) {
    include 'koneksi.php';
    $result = mysqli_query($koneksi, $query);
    $data = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    return $data;
}


?>