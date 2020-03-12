<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=212.237.29.81;dbname=Osteopatia',
    'username' => 'Bobmysql',
    'password' => '@Giomar.63!',
    'charset' => 'utf8',
    'attributes' => [
        PDO::ATTR_PERSISTENT => true, //www.percona.com/blog/2006/11/12/are-php-persistent-connections-evil/
        PDO::ATTR_EMULATE_PREPARES => false // ensures mysql float/double is returned as php float
    ],
    //enable schema information (e.g. column names, column types, constraints)
    'enableSchemaCache' => true,
    // Duration of schema cache.
    'schemaCacheDuration' => 3600,
    // Name of the cache component used to store schema information
    'schemaCache' => 'cache',
];
