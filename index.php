<?php

require 'vendor/autoload.php';

function ServiceHandler() {
    
    $data = "Hello l'afip c'est le projet de puz!";

    return print_r($data);
};

$app = new \Slim\App;

$app->get('/', 'ServiceHandler');
$app->post('/', 'ServiceHandler');

$app->run();
