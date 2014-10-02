<?php

require './vendor/autoload.php';

$app = new \Slim\Slim();


$app->get("/", function() use($app){
	echo "<h1>Inicio</h1>";
});

$app->get("/post", function() use($app){
	echo "<h1>Post</h1>";
});

$app->get("/archivo", function() use($app){
	echo "<h1>Archivo</h1>";
});

$app->get("/categorias", function() use($app){
	echo "<h1>Categorias</h1>";
});



$app->run();