<?php

require_once('inc/classform.php');
require_once('inc/setuptable.php');

?>
<!doctype html>
<html>
  <head>
    <title>Get Site Status</title>
    
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
        Submit query to consume PHP webservice in JSON format
      </h1>
      
      <hr />
      
      <p>
        For this example use: "https://www.mycoolsite.org"
      </p>
      
      <?php
        $htmlForm = new Form("ws-json.php", "Submit query", "get");
        $htmlForm->addField("Site URL:", "siteUrl");
        $htmlForm->buildForm();
      ?>
    </div>
  </body>
</html>
