<?php
// set the expiration date to one hour ago
setcookie("username", "", time() - 3600,"/",$domain = "localhost");
header('Location: ../../Pages/signin.php');
?>