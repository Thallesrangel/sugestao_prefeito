<?php

require "environment.php";

$config = array();

if(ENVIRONMENT == 'dev') {
    define("BASE_URL", "http://localhost:8080/alcantara/");
    $config['dbname'] = 'dbsugestao';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
} else {
    define("BASE_URL", "http://localhost/estrutura-mvc/");
    $config['dbname'] = 'prod_estrutura_mvc';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'user';
    $config['dbpass'] = 'pass';
}

global $db;
try {

    $db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'],$config['dbuser'], $config['dbpass']);
} catch (PDOException $e) {
    echo "Erro: ".$e->getMessage();
    exit;
}