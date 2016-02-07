<?php
namespace Control;

use src\Controller\TestController;

class ControlView 
{
    public function index()
    {
        echo $twig->render('test.html.twig',array('toto'=>'laure'));
    }
}