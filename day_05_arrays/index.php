<?php

$person = [

	'age' => 27,

	'hair' => "Black",

	'career' => 'Programmer',

];


//dumps anything 
// var_dump($person);

// die() --> stops further execution


// die(var_dump($person))  -->dumps and dies
// dd($person)  -->shortcut

// deletes from associative array
// unset($person['age']);


require('index.view.php');