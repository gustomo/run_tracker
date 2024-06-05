<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama_pengguna = $_POST['nama_pengguna'];
    $kategori_olahraga = $_POST['kategori_olahraga'];
    $no_tlp = $_POST['no_tlp'];
    $lokasi = $_POST['lokasi'];
    $kondisi_fisik = $_POST['kondisi_fisik'];

    $query = "INSERT INTO data_pengguna (nama_pengguna, kategori_olahraga, no_tlp, lokasi, kondisi_fisik) VALUES ('$nama_pengguna', '$kategori_olahraga', '$no_tlp', '$lokasi', '$kondisi_fisik')";

    mysqli_query($koneksi, $query);
    header('Location: awal.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Data RunTracker</h1>
    <div class="container">
      <nav class="wrapper">
        <div class="brand">
          <div class="firstname">run</div>
          <div class="lastname">tracker</div>
        </div>
        <ul class="nav">
          <li><a href=".." class="satu">lokasi anda</a></li>
          <li><a href="" class="dua">maps</a></li>
          <li><a href="crud/index.php" class="tiga">login/sign</a></li>
          <li><img src="sampel2.jpg" alt="" /></li>
        </ul>
      </nav>
    </div>


    <h1>Tambah Data Baru</h1>
    <form method="post" action="">
        Nama: <input type="text" name="nama_pengguna" required><br>
        kategori olahraga: <input type="text" name="kategori_olahraga" required><br>
        nomer telepon  <input type="text" name="no_tlp"  required> <br>
        lokasi saat ini: <input type="text" name="lokasi" required><br>
        kondisi fisik: <input type="text" name="kondisi_fisik" required><br>
        <button type="submit">Simpan</button>
    </form>
    <a href="index.php">Kembali</a>
</body>
</html>