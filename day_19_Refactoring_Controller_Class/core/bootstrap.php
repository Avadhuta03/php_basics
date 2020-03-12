<?php





App::bind('config', require 'config.php');



// die(var_dump(App::get('config')));



// $app = [];

// $app['config'] = require 'config.php';



// /*using composer autoload obsoletes manual requiremnt of classes */

// // require 'core/Router.php';
// // require 'core/Request.php';
// // require 'core/database/Connection.php';
// // require 'core/database/QueryBuilder.php';



// // $pdo = Connection::make();

// $app['database'] = new QueryBuilder(
    
//     Connection::make($app['config']['database'])

// );


App::bind('database', new QueryBuilder(

	Connection::make(App::get('config')['database'])

));



function view($name, $data = [])
{

	extract($data);

	return require "views/{$name}.view.php";

}


function redirect($path)
{

	header("Location: /{$path}");
}
