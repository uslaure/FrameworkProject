<?php
require_once('../config/routing.php');
echo('coucou');

$Connection = new \ORM\Connection('localhost', 'orm', 'root', '');
$EntityManager = new \ORM\Entity\Manager();


