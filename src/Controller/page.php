<?php
// 1 : on ouvre le fichier
$monfichier = fopen('header.html', 'r+');
 
// 2 : on lit la première ligne du fichier
$ligne = fgets($monfichier);
 
// 3 : quand on a fini de l'utiliser, on ferme le fichier
fclose($monfichier);
?>