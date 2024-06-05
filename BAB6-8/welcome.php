<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}


$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>



<div class="container">
      <nav class="wrapper">
        <div class="brand">
          <div class="firstname"><a href="logout.php">Logout</a></div>
        </div>
        <ul class="nav">
          <li><a href=".." class="satu">lokasi anda</a></li>
          <li><a href="" class="dua">maps</a></li>
          <li><a href="" class="tiga">login/sign</a></li>
          <li><img src="sampel2.jpg" alt="" /></li>
          
        </ul>
      </nav>
    </div>
    <!-- cokiiee -->
    <h1>Welcome, <?php echo htmlspecialchars($username); ?>!</h1>
    <p>Cookie Value: <?php echo htmlspecialchars($_COOKIE['username']); ?></p>
   
</body>
</html>
