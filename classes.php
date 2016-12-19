<?php 

//* Good practice is to name your classes nouns.  Classes are representations or blu prints for a concept in your app.
class Task {
	//* Properties:
	public $description;
	public $completed = false;

	//* Method: function declared within a class.
	//* __construct: automatically triggers on instantiation.
	public function __construct($description) {
		//* The 'instance' of a class is an 'object' and a property can be assigned to 'this' object:
		$this ->description = $description;
	}
	public function complete() {
		$this->completed = true;
	}
	public function isComplete() {
		return $this->completed;
	}
}
//$task = new Task('Go to store'); //* Instanciated a new task object.
//$task->complete(); //* Complete the task.

//dd($task);
//var_dump($task->isComplete());

$tasks = [
	new Task('Study'),
	new Task('Pay bills'),
	new Task('Clean the car')
];
//dd($tasks);

$tasks[0]->complete();

require 'index.view.php';
 ?>