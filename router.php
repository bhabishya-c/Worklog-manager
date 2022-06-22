<?php
// namespace router\Project3;
class Router{
    protected $routes=[];

    function define($routes){
    $this->routes=$routes;
    }
    function direct($uri){
        if(array_key_exists($uri,$this->routes)){
            // return $this->routes[$uri];
            return $this->callAction(
                ...explode('@',$this->routes[$uri])
            );
        }
        throw new Exception('No routes defined for this URI');
        }

  function callAction($controller,$action){
    if(!method_exists($controller,$action)){
        throw new Exception(
           "{$controller} doesnot respond to the {$action} action."
    );
}
    return (new $controller)->$action();
}
}
?>