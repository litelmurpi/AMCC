<?php

// Informasi Database
$host = "localhost";
$user = "root";
$pass = "";
$db = "db_amcc";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    echo "Koneksi Gagal" . mysqli_connect_error();
} else {
    // tidak menampilkan apapun
}
