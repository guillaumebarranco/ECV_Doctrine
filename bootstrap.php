<?php

require_once "vendor/autoload.php";


use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

// the connection configuration
$dbParams = array(
    'host'     => '127.0.0.1',
    'driver'   => 'pdo_mysql',
    'user'     => 'root',
    'password' => '',
    'dbname'   => 'cinema',
);

$config = Setup::createYAMLMetadataConfiguration(["mappings-yml/"], /* isDevMode*/ true);
$entityManager = EntityManager::create($dbParams, $config);