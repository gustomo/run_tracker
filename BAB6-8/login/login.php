<?php
session_start();

$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "runtracker";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['pasword'];


    $sql = "SELECT * FROM registrasi WHERE email_phone='$username' AND pasword='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
      
        $_SESSION['username'] = $username;
        header("../crud2/index.php"); 
        exit();
    } else {
        
        echo "Username/email atau password salah.";
    }
}

$conn->close();
?>
