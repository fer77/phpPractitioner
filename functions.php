<?php 

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
