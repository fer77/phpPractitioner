<?php
//require reusable code in a file, like functions, etc at the top here:
require 'functions.php';
require 'Task.php';
require 'core/bootstrap.php';

//$router = new Router;


//$name = $_GET['name']; //this 'super global' will get the value from the URL parameter http://localhost:8888/?key=value

//echo "Hello, " . $name; //This can also be written like: echo "Hello, " . $_GET["name"]; or <?= "Hello, " . $_GET["name"];

$greeting = "Hello: ";


// To link to your html file add a 'require' to this file:
//require 'arrays.php';
//require 'booleans.php';
//require 'functions-notes.php';
//require 'classes.php';
require 'intro-pdo.php';
//require 'routes.php';

// dd(trim($_SERVER['REQUEST_URI'], '/'));
//$uri = trim($_SERVER['REQUEST_URI'], '/'); //* Moved to core/request.php
//* trim get rid of white spaces, if an argument is passed it'll get rid of that, in this case we pass '/'

//require $router->direct($uri);

//* This will require the file that is returned to us:
 //require Router::load('routes.php')->direct($uri);
 require Router::load('routes.php')->direct(Request::uri());
