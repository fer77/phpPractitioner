<?php
//The controller will now interact with the database:
$tasks = $app['database']->selectAll('todos');

require 'views/index.view.php'

 ?>
