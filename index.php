<?php
//require reusable code in a file, like functions, etc at the top here:
require 'vendor/autoload.php'; //* This file needs to be included at our entry point in order to have composer autoload the classes in the project.
require 'functions.php';
require 'notes/Task.php';
require 'core/bootstrap.php';
require 'notes/intro-pdo.php';
use App\Core\Router;
use App\Core\Request;
//require 'arrays.php';
//require 'booleans.php';
//require 'functions-notes.php';
//require 'classes.php';
//require 'routes.php';

//$router = new Router;

//$name = $_GET['name']; //this 'super global' will get the value from the URL parameter http://localhost:8888/?key=value

//echo "Hello, " . $name; //This can also be written like: echo "Hello, " . $_GET["name"]; or <?= "Hello, " . $_GET["name"];

$greeting = "Hello: ";

// dd(trim($_SERVER['REQUEST_URI'], '/'));
//$uri = trim($_SERVER['REQUEST_URI'], '/'); //* Moved to core/Request.php
//* trim get rid of white spaces, if an argument is passed it'll get rid of that, in this case we pass '/'

//require $router->direct($uri);

//* This will require the file that is returned to us:
//require Router::load('routes.php')->direct($uri);
//* We no longer need to require anything with our controller:
// require
            Router::load('app/routes.php')->direct(Request::uri(), Request::method()); //* This will tell the router what type of request it is.
                                  //* Router->direct determines the controller we require.
                                              //* Request::uri is required(loaded) in our bootstrap file.
