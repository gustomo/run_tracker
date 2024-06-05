<?php
include 'koneksi.php';

$id = $_GET['id'];
$query = "SELECT * FROM user WHERE id='$id'";
$result = mysqli_query($koneksi, $query);
$row = mysqli_fetch_assoc($result);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $gender = $_POST['gender'];
    $hobi = $_POST['hobi'];

    $query = "UPDATE user SET nama='$nama', gender='$gender', hobi='$hobi' WHERE id='$id'";
    mysqli_query($koneksi, $query);
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Data</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
<


    <h1>Update Data</h1>
    <form method="post" action="">
        Nama: <input type="text" name="nama" value="<?php echo $row['nama']; ?>" required><br>
        Gender: <input type="radio" name="gender" value="Male" <?php echo $row['gender'] == 'Male' ? 'checked' : ''; ?> required> Male
                <input type="radio" name="gender" value="Female" <?php echo $row['gender'] == 'Female' ? 'checked' : ''; ?> required> Female<br>
        Hobi: <input type="text" name="hobi" value="<?php echo $row['hobi']; ?>" required><br>
        <button type="submit">Update</button>
    </form>
    <a href="index.php">Kembali</a>
</body>
</html>
