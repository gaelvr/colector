<?php

require 'vendor/autoload.php';

$app = new \Slim\Slim();


$app->get("/", function() use($app){

});

$app->get("/archivo", function() use($app){
	echo "Dos";
});

$app->run();