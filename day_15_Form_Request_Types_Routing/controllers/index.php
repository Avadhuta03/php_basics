<?php

$tasks = $app['database']->selectAllTasks('todo');


require 'views/index.view.php';