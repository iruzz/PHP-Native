<?php

$koneksi = mysqli_connect("localhost", "root", "", "crud1");

function ambildata($query) {
    include 'koneksi.php';
    $result = mysqli_query($koneksi, $query);
    $data = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    return $data;
}


?>