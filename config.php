<?php 

//* Associative array
return [
	//* Another associative array
	'database' => [
		'name' => 'todos',
		'username' => 'root',
		'password' => '',
		'connection' => 'mysql:host=127.0.0.1',
		//* options section is good for adding debbugging cenarios.
		'options' => [
		//* For example if there is an error this will give us that information:
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
		]
	]
]
//* Add this to our 'bootsrap.php'
 ?>