<?php
$servername = "localhost";
$username = "root"; // Sesuaikan dengan username database Anda
$password = ""; // Sesuaikan dengan password database Anda
$dbname = "runtracker";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email_phone = $_POST['email_phone'];
    $name = $_POST['name'];
    $pasword = $_POST['pasword'];
    $age = $_POST['age'];
    $weight = $_POST['weight'];
    $height = $_POST['height'];
    $domicile = $_POST['domicile'];

    $sql = "INSERT INTO registrasi (email_phone, name,pasword, age, weight, height, domicile)
            VALUES ('$email_phone', '$name', '$pasword', $age, $weight, $height, '$domicile')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
