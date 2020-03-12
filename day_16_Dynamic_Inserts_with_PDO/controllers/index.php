<?php

$users = $app['database']->selectAllTasks('users');


require 'views/index.view.php';