<?php

class TestController
{
  public function bonjour()
  {
    return '<h1>Bonjour MIchel</h1>';
  }

  // public function index()
  //   {
  //       echo $twig->render('test.html',array('toto'=>'laure'));
  //   }
}


// namespace src\Controller;
// class TestController{
//      public function __construct()
//     {
//         $this->orm = new \vendor\droxuym\supinternet-orm\src\Connection();
//     }
//     public function render($view, Array $params) {
//         return new \web\Control\ControlView();
//     }
//     public function getEntityManager() {
//         return $this->orm->getEntityManager();
//     }

//  }