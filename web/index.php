<?php
require_once('../core/Router.php'); 
require_once('../config/routing.php'); 
require_once ('../vendor/autoload.php');

$uri = $_SERVER['REQUEST_URI'];
$dir = __DIR__;
$path = substr($dir, strlen($_SERVER['DOCUMENT_ROOT']) - 1);
$route = substr($uri, strlen($path));
$router = new Router();
$router->get('/hello/:name', function($name){
 	var_dump($name);
 });
 $router->post('/post/hello/:name', function($name){
	 var_dump($name);
 });
$response = $router->match($route);
echo $response;
var_dump($route);

Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
    'cache' => false,
));

echo $twig->render('test.html',array('toto'=>'laure'));

// require_once('../src/Controller/' .$_GET['page'] .'.php');
 
?>