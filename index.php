<?php

//    $name = $_GET['name']; //this 'super global' will get the value from the URL parameter http://localhost:8888/?key=value

//    echo "Hello, " . $name; //This can also be written like: echo "Hello, " . $_GET["name"]; or <?= "Hello, " . $_GET["name"];

    $greeting = "Hello from view.html";
// To link to your html file add a 'require' to this file:
    require 'index.view.php';
