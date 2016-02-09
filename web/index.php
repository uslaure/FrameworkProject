<?php
require_once('../vendor/autoload.php');	
require_once('../core/Router.php'); 
require_once('../config/config.php');
require_once('.././src/controller/TestController.php');


$uri = $_SERVER['REQUEST_URI'];
$dir = __DIR__;
$path = substr($dir, strlen($_SERVER['DOCUMENT_ROOT']) - 1);
$route = substr($uri, strlen($path));
$router = new Router();
$response = $router->run($route);


Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
    'cache' => false,
));

echo $twig->render('test.html',array(
	'name'=>'Franck',
	'age'=> '35',
	'expression' => 'Rien ne sert de courrir, il faut partir à point!'
	));

 
?>