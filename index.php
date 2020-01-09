<?php





// $animals = [

// 	'Tiger',
// 	'Lion',
// 	'Elephant',
// 	'Rabbit',
// 	'Panda'

// ];


// $animals[] = 'Giraffe';  //inserts item into array


$person = [

	'age' => 25,
	'eyes' => 'black',
	'career' => 'web developer'
];


$person['name'] = 'avadhuta03';  //passing item into associative array

unset($person['eyes']);   //removes item from array



var_dump($person);    //dumps the array


die(var_dump($person));  //dumps and dies


require 'index.view.php';

