<?php





f



function fetchAllTasks($pdo)
{


		$statement = $pdo->prepare('select * from todo');

		$statement->execute();


		return $statement->fetchALL(PDO::FETCH_CLASS, 'Task');

}




function checkAge($age)
{
	

	if($age>=21)
	{
		echo "You are allowed";
	}
	else
	{
		echo "You are not old enough!";
	}

}




function dd($data)
{

	echo "<pre>";

	die(var_dump($data));

	echo "</pre>";

}