<?php 
use Project3\router\Router;
require 'vendor/autoload.php';
$router=new Router;
require 'routes.php';
$uri=trim($_SERVER['REQUEST_URI'],'/');
$router->direct($uri);
?>