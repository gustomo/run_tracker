<?php
include 'koneksi.php';

$id = $_GET['id'];
$query = "DELETE FROM data_pengguna WHERE id='$id'";
mysqli_query($koneksi, $query);

header('Location: awal.php');
?>
