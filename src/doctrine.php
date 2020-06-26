<?php


use doctrine\ORM\Tools\Setup;
use EntityManager\ORM\EntityManager;


$paths = [
    __DIR__.'/entity'
];

$isDevMode = true;

$dbParams = [
    'driver' => 'pdo_mysql',
    'user' => '',
    'password' => '',
    'dbname' => ''
];

$config = Setup::createAnnotationMetadataConfiguration($paths,$isDevMode);
$entityManager = EntityManager::create($dbParams,$config);

function getEntityManager(){
    global $entityManager;
    return $entityManager;
}