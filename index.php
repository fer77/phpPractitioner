<?php
//require reusable code in a file, like functions, etc at the top here:
require 'functions.php';
$query = require 'bootstrap.php';
require 'Task.php';


//$name = $_GET['name']; //this 'super global' will get the value from the URL parameter http://localhost:8888/?key=value

//echo "Hello, " . $name; //This can also be written like: echo "Hello, " . $_GET["name"]; or <?= "Hello, " . $_GET["name"];

$greeting = "Hello: ";


// To link to your html file add a 'require' to this file:
//require 'arrays.php';
//require 'booleans.php';
//require 'functions-notes.php';
//require 'classes.php';
require 'intro-pdo.php';