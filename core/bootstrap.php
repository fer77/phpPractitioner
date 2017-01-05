<?php

App::bind('config', require 'config.php'); //* This is saying: find the configuration array and store it in our container and associate it with a key named 'config'.  When we need this array we add the 'config' label and save it:
//die(var_dump(App::get('config')));
//* We'll need to run:
//* 'composer dump-autoload'
//* Composer will requery everything and dump it into that file.  This comand will have to be run every time we add a new file.

$config = App::get('config');

// $app = [];
//
// $app['config'] = require 'config.php';

//* Composer adds our classes into the classmap automagicaly:
// require 'core/Router.php';
// require 'core/Request.php';
// require 'core/database/Connection.php';
// require 'core/database/QueryBuilder.php';

App::bind('database', new QueryBuilder(
  Connection::make(App::get('config')['database'])));

// $app['database'] = new QueryBuilder(
//   Connection::make($app['config']['database'])
// );

function view($name, $data = [])
{
  extract($data); //* Does the oposite of compact. Extract is going to create a variable equal to the value passed, ie:
                    //* ['name' => 'joe', 'age' = 25];
                    //* extract will create a name and an age variable like this:
                    //* $name = 'joe';
                    //* $age = 25;

  return require "views/{$name}.view.php";
}

function redirect($path)
{

  header("Location: /{$path}");
}

 ?>
