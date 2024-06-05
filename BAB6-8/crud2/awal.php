<?php
include 'koneksi.php';

$query = "SELECT * FROM data_pengguna "; 
$result = mysqli_query($koneksi, $query);
?>


<!DOCTYPE html>
<html>
<head>
    <title>RunTracker</title>
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
          <li><a href=".." class="satu">home</a></li>
          <li><a href="" class="dua">admin</a></li>
          <li><a href="../crud/index.php" class="tiga">login/sign</a></li>
          <li><img src="sampel2.jpg" alt="" /></li>
        </ul>
      </nav>
    </div>

    <a class="add-new" href="tambah_data.php">Tambah Data Baru</a>
    <a class="add-new" href="generate_pdf.php">Unduh Report PDF</a>
    <table class="tb" border="1">
        <tr class ="isi">
            <th>ID</th>
            <th>Nama pengguna</th>
            <th>Kategori olahraga</th>
            <th>No tlp</th>
            <th>Lokasi saat ini</th>
            <th>Kondisi fisik</th>
            <th>Action</th>
        </tr>
        <?php $nol = 1; ?>
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
        <tr class="output">
            <td><?php echo $nol; ?></td>
            <td><?php echo $row['nama_pengguna']; ?></td>
            <td><?php echo $row['kategori_olahraga']; ?></td>
            <td><?php echo $row['no_tlp']; ?></td>
            <td><?php echo $row['lokasi']; ?></td>
            <td><?php echo $row['kondisi_fisik']; ?></td>
            <td>
                <a href="update.php?id=<?php echo $row['id']; ?>">Edit</a>
                <a href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
            </td>
        </tr>
        <?php $nol ++; ?>
        <?php endwhile; ?>
    </table>
    
</body>
</html>
