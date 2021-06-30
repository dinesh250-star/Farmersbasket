<?php 
 ob_start();
 session_start();



$_SESSION['username'] = null;
$_SESSION['id'] = null;
$_SESSION['email'] = null;
$_SESSION['password'] = null;
$_SESSION['contact'] = null;
$_SESSION['address'] = null;
$_SESSION['admin'] = null;
header("Location: login.php");
// ob_flush();


?>