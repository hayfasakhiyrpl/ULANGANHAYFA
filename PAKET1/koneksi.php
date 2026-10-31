<?php
$koneksi = mysqli_connect("localhost", "root", "", "rumahsakithayfa");

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
