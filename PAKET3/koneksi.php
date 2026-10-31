<?php
$koneksi = mysqli_connect("localhost", "root", "", "rumahsakithayfa3");

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>