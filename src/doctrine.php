<?php


use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;


$paths = [
    __DIR__.'/Entity'
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