<?php

$htmlHeader = "Content-Type: application/json";
header($htmlHeader);

if (isset($_GET["siteUrl"])) {
  $site = $_GET["siteUrl"];
}
else {
  echo json_encode(array(
     "siteStatus" => "No site specified"));
  exit();
}

$host = "localhost";
$db = "database";
$dbUser = "admin"
$dbPass = "password";
  
$conx = mysqli_connect($host, $dbUser, $dbPass, $db);

if (!$conx) {
  $result = array("siteStatus" => "Database Error");
  echo json_encode($row);
}
else {
  $site = mysqli_real_escape_string($conx, $site);
  
  $sql = "SELECT siteStatus 
          FROM siteStatus
          WHERE siteUrl ='{$site}'";
  
  $query = mysqli_query($conx, $sql);
  
  if ($query) {
    $result = mysqli_fetch_assoc($query);
    if (is_null($result)) {
      $result = array("siteStatus" => "Error - Site not found");
    }    
  }
  else {
    $result = array("siteStatus" => "General Error");
  }
  
  echo json_encode($result);
  mysqli_free_result($query);
  mysqli_close($conx);
} //End $conx condition

?>
