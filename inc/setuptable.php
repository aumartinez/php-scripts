<?php

$host = "localhost";
$db = "database";
$dbUser = "admin"
$dbPass = "password";

$file = 'sql/sitestable.sql';
$sql = file_get_contents($conx, $sql);

$conx = mysqli_connect($host, $dbUser, $dbPass, $db);

if (!conx) {
  die("MySQL connection failed: " . mysqli_connect_errno());
}

$query = mysqli_query($conx, $sql);

if (!$query) {
  die("Error :" . mysqli_errno($conx));
}

mysqli_free_result($query);
mysqli_close($conx);

?>
