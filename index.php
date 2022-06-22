<?php 
// use router\Project3\Router;
require 'vendor/autoload.php';
$router=new Router;
require 'routes.php';
$uri=trim($_SERVER['REQUEST_URI'],'/');
$router->direct($uri);
?>