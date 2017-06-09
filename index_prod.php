<?php
/**
 * Created by PhpStorm.
 * User: sam
 * Date: 09/06/17
 * Time: 10:06
 */

use oss\FrameworkPHP\framework\Router;

require 'loader.php';

oss\FrameworkPHP\framework\Configuration::setParameters('prod');


$router = new Router();
$router->routerRequete();