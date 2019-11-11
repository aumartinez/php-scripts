<?php
  class Form {
    private $fields = array();
    private $actionValue;
    private $submit = "Submit";
    private $formFields = 0;
    
    function __construct($actionValue, $submit, $method) {
      $this->actionValue = $actionValue;
      $this->submit = $submit;
      $this->method = $method;
    }
    
    function buildForm() {
      echo "\n";
      echo "<form action=\"{$this->actionValue}\" method=\"{$this->method}\">\n";
      
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
