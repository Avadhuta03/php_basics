<?php


class Connection
{



	public static function  make()
	{

			try{

			     return new PDO('mysql:host=127.0.0.1;dbname=php','phpuser','');

			}catch(PDOException $e){

				die($e->getMessage());
			}
	}


}




// static makes method globally accessible without requiring to create new instance
// Connection::make();



//--------without static --------------
// $connection = new connection();
// $connection->make();