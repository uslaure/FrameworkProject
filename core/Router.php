<?php
Class Router
{
  private $_url;
  private $_routes = [];

public function run($route){
    global $routes;
    if (!empty($routes[$route])){
      $parts = explode(':', $routes[$route]);
      $controller_name = $parts[0] . 'Controller';
      require_once('../src/controller/' . $controller_name . '.php');
      $controller = new $controller_name;
      return $controller->$parts[1]();
} else
      throw new Exception('No route for : ' . $route);
  }

public function get($path, $callable){
    $route = new Routing($path, $callable);
    $this->_routes['GET'] = $route;
  }
  public function post($path, $callable){
    $route = new Routing($path, $callable);
    $this->_routes['POST'] = $route;
  }
  public function match(){
    if (isset($this->routes[$_SERVER['REQUEST_METHOD']])) {
      throw new \Exception('no routtes matches');
    }
  }
  public function match_view(){
    echo "<pre>";
    print_r($this->_routes);
    echo "</pre>";
  }
}
?>