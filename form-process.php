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
    array_push($_SESSION["error"], $value . " is required.");
  }
}

//Check for name input
if (!preg_match("/^[\w.]+$/", $_POST["name"])) {
  array_push($_SESSION["error"], "Name must be letters and numbers only.");
}

//Check for valid State selection
$validStates = array(
              "Alabama",
              "California",
              "Colorado",
              "Florida",
              "Illinois",
              "New Jersey",
              "New York",
              "Wisconsin"
              );

if (isset($_POST["state"]) && $_POST["state"] != "") {
  if (!in_array($_POST["state"], $validStates)) {
    array_push($_SESSION["error"], "Please choose a valid state");
  }
}

//Validating the ZIP code input
if (isset($_POST["zip"]) && $_POST["zip"] != "") {
  if (!preg_match("/^[\d]+$/", $_POST["zip"])) {
    array_push($_SESSION["error"], "ZIP should be only numbers.");
  }
  else if (strlen($_POST["zip"]) < 5 || strlen($_POST["zip"] > 9)) {
    array_push($_SESSION["error"], "ZIP codes are 5 to 9 digits long only.");
  }
}

//Check for phonetype input
if (isset($_POST["phone"]) && $_POST["phone"] != "") {
  if (!preg_match("/^[\d]+$/", $_POST["phone"])) {
    array_push($_SESSION["error"], "Phone numbers should be only digits.");
  }
  else if (strlen($_POST["phone"]) != 10) {
    array_push($_SESSION["error"], "Phone number is 10 digits long.");
  }
  
  if (!isset($_POST["phonetype"]) || $_POST["phonetype"] == "") {
    array_push($_SESSION["error"], "Please choose a phone number type.");
  }
  else {
    $validPhonetypes = array(
                        "work",
                        "home"
                        );
    
    if (!in_array($_POST["phonetype"], $validPhonetypes)) {
      array_push($_SESSION["error"], "Please choose a valid phone number type.");
    }
  }
}

//Validate email address
if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
  array_push($_SESSION["error"], "Email address is invalid.");
}

//Check for passwords match
if ($_POST["password"] != $_POST["verify"]) {
  array_push($_SESSION["error"], "Passwords don't match.");
}

//Final check
if (count($_SESSION["error"]) > 0 ) {  
  header("Location: validateform.php");  
  exit();
}
else {
  unset($_SESSION["form"]);  
  header("Location: success.php");
  exit();
}

?>
