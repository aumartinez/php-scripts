<?php
  $host = "localhost";
  $db = "database";
  $dbUser = "admin"
  $dbPass = "password";
  
  $conx = mysqli_connect($host, $dbUser, $dbPass, $db);
  
  if (!conx) {
    die ("MySQL connection failed: " . mysqli_connect_errno());
  }
?>
