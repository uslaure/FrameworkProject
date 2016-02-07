<?php

namespace src\Controller;
class TestController{
     public function __construct()
    {
        $this->orm = new \vendor\droxuym\supinternet-orm\src\Connection();
    }
    public function render($view, Array $params) {
        return new \web\Control\ControlView();
    }
    public function getEntityManager() {
        return $this->orm->getEntityManager();
    }

 }