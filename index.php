<?php

require 'vendor/autoload.php';

function ServiceHandler() {
    
    $data = "Hello l'afip c'est le projet de puz!";

    return json_encode($data);
};

$app = new \Slim\App;

$app->get('/', 'ServiceHandler');
$app->post('/', 'ServiceHandler');

$app->run();
