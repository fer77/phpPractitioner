<?php 

//* created for intro-pdo:
function connectToDb() {
	try {
		return new PDO('mysql:host=127.0.0.1;dbname=todos', 'root', '');
	} catch (PDOException $e) {
		die($e->getMessage()); //* Gives you the error.
	}
}

function fetchAllTasks($pdo) {
	$statement = $pdo->prepare('select * from todos');
	$statement->execute();
	return $statement->fetchAll(PDO::FETCH_CLASS, 'Tasks');
}

function dd($val) {
	echo '<pre>';
		die(var_dump($val));
	echo '</pre>';
}

function bouncer($age) {
	if (age < 21) {
		echo 'You are not allowed to come in.';
	} else {
		echo 'Comon in!';
	}	
}

 ?>
