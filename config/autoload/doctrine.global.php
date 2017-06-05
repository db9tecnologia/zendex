<?php

use \Doctrine\DBAL\Driver\PDOMySql\Driver;

return [
    'doctrine' => [
        'connection' => [
            'orm_default' => [
                'driverClass' => Driver::class,
                'params' => [
                    'host' => '127.0.0.1',
                    'port' => 3306,
                    'user' => 'root',
                    'password' => '123456789',
                    'dbname' => 'asm_ss2',
                    'driverOptions' => [
                        \PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"
                    ]
                ]
            ]
        ]
    ]
];
