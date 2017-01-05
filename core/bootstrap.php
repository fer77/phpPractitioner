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

 ?>
