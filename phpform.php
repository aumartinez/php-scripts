<?php

class Form {
  private $fields = array();
  private $actionValue;
  private $submit = "Submit";
  private $formFields = 0;
  
  function __construct($actionValue, $submit) {
    $this->actionValue = $actionValue;
    $this->submit = $submit;
  }
  
  function buildForm() {
    echo "\n";
    echo "<form action=\"{$this->actionValue}\" method=\"post\">\n";
    
    for ($i = 0; $i < sizeof($this->fields); $i++) {
      echo "<p>\n";
      echo "<label>{$this->fields[$i]["label"]}</label><br />\n";
      echo "<input type=\"text\" name=\"{$this->fields[$i]["name"]}\" />\n";
      echo "</p>\n";
    }
    
    echo "<button type=\"submit\" name=\"submitForm\">{$this->submit}</button>\n";
    echo "</form>\n";
  }
  
  function addField($label, $name) {
    $this->fields[$this->formFields]["label"] = $label;
    $this->fields[$this->formFields]["name"] = $name;
    $this->formFields = $this->formFields + 1;
  }
}

?>

<!doctype html>
<html>
  <head>
    <title>PHP forms</title>
    
    <style>
      body {
        font-family: Arial, sans-serif;
        font-size: 16px;
        line-height: 1.5;
      }
      
      .wrapper {
        max-width: 600px;
        padding: 60px 15px;
        margin: auto;
      }
      
      .text-center {
        text-align: center;
      }
    </style>
  </head>
  <body>
    <div class="wrapper">
      <h1 class="text-center">
        A form pulled with a PHP class
      </h1>
      
      <hr />
      
      <?php
        $htmlForm = new Form($_SERVER["PHP_SELF"], "Submit this form");
        $htmlForm->addField("Name :", "name");        
        $htmlForm->addField("Last Name :", "lastname");
        $htmlForm->addField("Age :", "age");
        $htmlForm->buildForm();
      ?>
      
    </div>    
  </body>
</html>
