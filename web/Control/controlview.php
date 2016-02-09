<?php
namespace Control;

use src\Controller\TestController;

class ControlView 
{
    public function index()
    {
        echo $twig->render('test.html',array('toto'=>'laure'));
    }
}