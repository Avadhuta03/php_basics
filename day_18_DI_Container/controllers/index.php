<?php

$users = App::get('database')->selectAllTasks('users');


require 'views/index.view.php';