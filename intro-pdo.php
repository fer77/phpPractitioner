<?php 

//* Handling exceptions.  These can be things like mysql not being installed in our machine, etc...
//* Always wrap PDOs in try/catch.
//* This try/catch can be placed inside a function and moved to our functions.php
// function connectToDb() {
// 	try {
//* php data objects(PDO): offers an interface to conect with your data base.
// 		$pdo = new PDO('mysql:host=127.0.0.1;dbname=todos', 'root', '');
// 	} catch (PDOException $e) {
//		die('Could not connect'); //* Gives you this message when something goes wrong.
// 		die($e->getMessage()); //* Gives you the error.
// 	}
// }
$pdo = connectToDb();

//function fetchAllTasks($pdo) {
	//* 1. Preparing an SQL querry:
	//$statement = $pdo->prepare('select * from todos');
	//* Do not use 'mysql_connect();' always use PDO.

	//* 2. Execute the statement:
	//$statement->execute();

	//var_dump($statement->fetchAll());
	//dd($statement->fetchAll(PDO::FETCH_OBJ)); //* PDO::FETCH_OBJ fetches results and places them  in objects.
	//$tasks = $statement->fetchAll(PDO::FETCH_OBJ);
	//$tasks = $statement->fetchAll(PDO::FETCH_CLASS, 'Task');$statement->fetchAll(PDO::FETCH_CLASS, 'Task');
	//return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');$statement->fetchAll(PDO::FETCH_CLASS, 'Task');
//}
$tasks = fetchAllTasks($pdo);

//var_dump($tasks[0]->description);

require 'index.view.php';
 ?>