<?php
//The controller will now interact with the database:
$users = App::get('database')->selectAll('users');

require 'views/index.view.php';
//require 'arrays/filters.php'

 ?>
