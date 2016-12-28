<?php

// Arrays

$belchers = [
    'Bob',
    'Linda',
    'Tina',
    'Gene'
];
//* If we wanted to add to the array we simply write:
$belchers[] = 'Lousie';

// Associative Arrays

$belcher = [
    'age' => 31,
    'occupation' => 'Restaurant owner'
];

//* To add a new key and value
$belcher['name'] = 'Bob';

//* To remove a key and value
unset($belcher['name']);

//* To get the value of a key in an array
//echo $belcher['occupation'];

//* To see what's in an array
//var_dump($belcher);
//die(var_dump($belcher));
