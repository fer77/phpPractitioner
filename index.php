<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Document</title>
    <style media="screen">
      header {
        background: #e3e3e3;
        padding: 2em;
        text-align: center;
      }
    </style>
  </head>
  <body>
    <header>

      <h1><?php
//<?php echo is equivelent to <?=

      $name = $_GET['name']; //this will get the value from the URL parameter http://localhost:8888/?key=value

      echo "Hello " . $name; //This can also be written like: echo "Hello, " . $_GET["name"]; or <?= "Hello, " . $_GET["name"];

      ?></h1>
<!-- PHPs closing tag ?> is necessary only when separating PHP code from other code, like in this example. -->

    </header>
  </body>
</html>
