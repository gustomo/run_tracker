<?php
include 'koneksi.php';

$query = "SELECT * FROM user "; 
$result = mysqli_query($koneksi, $query);
?>

<?php

?>

<!DOCTYPE html>
<html>
<head>
    <title>RunTracker</title>
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

    <a class="add-new" href="create.php">Tambah Data Baru</a>
    <table class="tb" border="1">
        <tr class ="isi">
            <th>ID</th>
            <th>Nama</th>
            <th>Gender</th>
            <th>Hobi</th>
            <th>Aksi</th>
        </tr>
        <?php $nol = 1; ?>
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
        <tr class="output">
            <td><?php echo $nol; ?></td>
            <td><?php echo $row['nama']; ?></td>
            <td><?php echo $row['gender']; ?></td>
            <td><?php echo $row['hobi']; ?></td>
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
