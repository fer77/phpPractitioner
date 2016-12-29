<?php

//* This will dump out the information from our form request:
// dd($_SERVER);
//* If we only want to fetch the name value:
//* This gets any GET or POST values.
//dd($_REQUEST);
//* or be explicit:
//dd('You typed ' . $_POST['name']);

$app['database']->insert('users', ['name' => $_POST['name']]);

//* Redirect after done with our query.
header('Location: /');

 ?>
