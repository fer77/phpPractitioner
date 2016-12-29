<?php

class QueryBuilder {

	protected $pdo;

	public function __construct($pdo) {
		$this->pdo = $pdo;
	}

	public function selectAll($table) {
		$statement = $this->pdo->prepare("select * from {$table}");
		$statement->execute();
		return $statement->fetchAll(PDO::FETCH_CLASS);
	}

	public function insert($table, $parameters)
	{
		//* insert into %s (%s) values (%s)
		//* insert into names (name, email) values (:name, :email)
		//$statement->execute(['name' => 'Joe', 'email' => 'joe@example.com'])
		//die(var_dump(array_keys($parameters)));
		// $sql = sprintf('insert into %s (%s) values (%s)', 'one', 'two', 'three');
		//* %s is a placeholder.
		//* 'one', 'two', 'three' are bound to each %s (repectively).
		//die(var_dump($sql));
		$sql = sprintf('insert into %s (%s) values (%s)', $table, implode(', ', array_keys($parameters)), ':' . implode(', :', array_keys($parameters)));
		//die(var_dump($sql));
		try {
			//* Build a query:
			$statement = $this->pdo->prepare($sql);
			//* Execute the query:
			$statement->execute($parameters);
		} catch (Exception $e) {
			//* Here we can re-direct to an error page or a 404.
			die('Whoops, you suck!');
		}
	}
}

 ?>
