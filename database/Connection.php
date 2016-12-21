<?php 

class Connection {
	public static function make() {
		try {
			return new PDO('mysql:host=127.0.0.1;dbname=todos', 'root', '');
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