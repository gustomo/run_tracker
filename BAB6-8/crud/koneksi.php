<?php
$servername = 'localhost';
$username = 'root';
$password = ''; // jika tidak ada password, dikosongkan saja
$database = 'runtracker';

// Membuat koneksi
$koneksi = mysqli_connect($servername, $username, $password, $database);

// Mengecek koneksi
if (!$koneksi) {
    die('Connection Failed: ' . mysqli_connect_error());
}
?>
