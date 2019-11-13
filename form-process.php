<?php
session_start();

$submit = (isset($_POST["submitForm"])) ? true : false;

if (!$submit) {
  header("Location: validateform.php");
  exit();  
}

$_SESSION["form"] = true;

if (isset($_SESSION["error"])) {
  unset($_SESSION["error"]);
}

$required = array(
            "name",
            "email",
            "password",
            "verify"
            );

$_SESSION["error"] = array();

//Check required fields
foreach ($required as $value) {
  if (!isset($_POST[$value]) || $_POST[$value] == "") {
    $_SESSION["error"][] = $value . " is required.";
  }
}

//Final check
if (count($_SESSION["error"]) > 0 ) {  
  header("Location: validateform.php");
  echo "here";
  exit();
}
else {
  unset($_SESSION["form"]);
  header("Location: success.php");
  exit();
}

?>
