<?php

$hosting = "localhost";
$username = "root";
$password = "";
$database = "ppdbsmk";

$conn = mysqli_connect($hosting,$username,$password,$database);

if (!$conn) {
    echo "Koneksi Gagal";
}


?>