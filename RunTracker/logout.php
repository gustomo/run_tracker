<?php
session_start();
session_unset();
session_destroy();

setcookie("username", "", time() - 3600, "/"); // Hapus cookie

header("Location: index.html");
exit();
?>
