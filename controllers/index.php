<?php
//The controller will now interact with the database:
$users = $app['database']->selectAll('users');

require 'views/index.view.php';
//require 'arrays/filters.php'

 ?>
