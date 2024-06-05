<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];

    
    $_SESSION['username'] = $username;

   
    setcookie("username", $username, time() + 3600, "/");

    
    header("Location: welcome.php");
    exit();
}
?>


