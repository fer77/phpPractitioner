<?php 
//* 1
require 'functions.php';
//* 2
//* Create a file named 'functions.php'.
//* 3
//* Move your functions thtere.

$belchers = [
    'Bob',
    'Linda',
    'Tina',
    'Gene'
];

//* Rendering this on the console is time consuming and inefficient for a larger project.
// echo '<pre>';
// 	die(var_dump($belchers));
// echo '</pre>';

//* Instead we can do this:
// function dumper($one, $two, $three) {
// 	var_dump($one, $two, $three);
// }
// dumper('Hello ', 'big ', 'world!');

//* This can still be improved:
// function dd($val) {
// 	echo '<pre>';
// 		die(var_dump($val));
// 	echo '</pre>';
// }
//dd($belchers);
//* or
//dd('Hello');
//* or
dd(['Bob', 'Linda', 'Tina', 'Gene']);

require 'index.view.php';
 ?>