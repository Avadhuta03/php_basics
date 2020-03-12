<?php

return [

    'database' => [

        
        'dbname' => 'php',
        'username' => 'phpuser',
        'password' => 'phppass',
        'connection' =>'mysql:host=127.0.0.1',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
        ]


    ]


];