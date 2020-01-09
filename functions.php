<?php


function dd($data)
{
	echo '<pre>';
	var_dump($data);
	echo '</pre>';
}



function checkAge($age)
{

	if($age>=21)
	{
		echo 'Come In!';
	}
	else
	{
		echo 'You are not allowed!';
	}
}