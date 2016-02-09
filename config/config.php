<?php
require_once('../vendor/autoload.php');	
require_once('routing.php');


Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
    'cache' => false,
));

// echo $twig->render('test.html',array('toto'=>'Laure'));

$Connection = new \ORM\Connection('localhost', 'orm', 'root', '');
$EntityManager = new \ORM\Entity\Manager();


