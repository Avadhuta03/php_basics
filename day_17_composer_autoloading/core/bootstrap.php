<?php

$app = [];

$app['config'] = require 'config.php';



/*using composer autoload obsoletes manual requiremnt of classes */

// require 'core/Router.php';
// require 'core/Request.php';
// require 'core/database/Connection.php';
// require 'core/database/QueryBuilder.php';



// $pdo = Connection::make();

$app['database'] = new QueryBuilder(
    
    Connection::make($app['config']['database'])

);
