<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $gender = $_POST['gender'];
    $hobi = $_POST['hobi'];

    $query = "INSERT INTO user (nama, gender, hobi) VALUES ('$nama', '$gender', '$hobi')";
    mysqli_query($koneksi, $query);
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data</title>
    <link rel="stylesheet" href="style2.css">
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
        Nama: <input type="text" name="nama" required><br>
        Gender: <input type="radio" name="gender" value="Male" required> Male
                <input type="radio" name="gender" value="Female" required> Female<br>
        Hobi: <input type="text" name="hobi" required><br>
        <button type="submit">Simpan</button>
    </form>
    <a href="index.php">Kembali</a>
</body>
</html>
