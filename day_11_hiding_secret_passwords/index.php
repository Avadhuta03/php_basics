<?php


$query = require 'bootstrap.php';

require 'Task.php';



$tasks = $query->selectAllTasks('todo');


require 'index.view.php';