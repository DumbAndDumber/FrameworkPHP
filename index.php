<?php
session_start();
use oss\FrameworkPHP\framework\Router;

require 'loader.php';

$router = new Router();
$router->routerRequete();
