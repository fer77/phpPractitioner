<?php 

class Connection {
	public static function make($config) {
		try {
			// return new PDO('mysql:host=127.0.0.1;dbname=todos', 'root', ''); //* Old unsecured way to refrence our database.  All of this is in our config.php.
			return new PDO(
				$config['connection'].';dbname='.$config['name'],
				$config['username'],
				$config['password'],
				$config['options']
			);
		} catch (PDOException $e) {
			die($e->getMessage()); //* Gives you the error.
		}
	}
}

//* public vs public static functions:
//* public functions need to be instantiated:
//* $connection = new Connection();
//* $connection->make();

//* static functions only need:
//* Connection::make();

 ?>