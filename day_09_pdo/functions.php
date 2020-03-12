<?php





function connectToDb(){

	try{

		return new PDO('mysql:host=127.0.0.1;dbname=php','phpuser','');
	
	}catch(PDOException $e)
	{
		die($e->getMessage());
	}


}


function fetchAllTasks($pdo)
{
	$statement = $pdo->prepare('select * from todo');

	$statement->execute();
	
	return $statement->fetchAll(PDO::FETCH_CLASS,'Task');

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