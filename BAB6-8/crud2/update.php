<?php
include 'koneksi.php';

$id = $_GET['id'];
$query = "SELECT * FROM data_pengguna WHERE id='$id'";
$result = mysqli_query($koneksi, $query);
$row = mysqli_fetch_assoc($result);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama_pengguna = $_POST['nama_pengguna'];
    $kategori_olahraga = $_POST['kategori_olahraga'];
    $no_tlp = $_POST['no_tlp'];
    $lokasi = $_POST['lokasi'];
    $kondisi_fisik = $_POST['kondisi_fisik'];

    $query = "UPDATE data_pengguna  SET nama_pengguna='$nama_pengguna', kategori_olahraga='$kategori_olahraga', no_tlp='$no_tlp',lokasi='$lokasi',kondisi_fisik='$kondisi_fisik' WHERE id='$id'";
    mysqli_query($koneksi, $query);
    header('Location: awal.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Data</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>



    <h1>Update Data</h1>
    <form method="post" action="">
    Nama: <input type="text" name="nama_pengguna" value="<?php echo $row['nama_pengguna']; ?>" required><br>

        kategori olahraga: <input type="text" name="kategori_olahraga" required><br>
        nomer telepon  <input type="text" name="no_tlp"  required> <br>
        lokasi saat ini: <input type="text" name="lokasi" required><br>
        kondisi fisik: <input type="text" name="kondisi_fisik" required><br>
        <button type="submit">Simpan</button>
        <button type="submit">Update</button>
    </form>
    <a href="awal.php">Kembali</a>
</body>
</html>
