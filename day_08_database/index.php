<?php



require 'database/connection.php';

require 'database/queryBuilder.php';

require 'Task.php';


$pdo = Connection::make();

$query = new QueryBuilder($pdo);

$tasks = $query->selectAll('todo');










require('index.view.php');












