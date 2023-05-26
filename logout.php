<?php 

session_start();
session_destroy();

echo "<script>alert('Logged Out Successfully.')</script>";
header("Location: index.php")  ;
?>