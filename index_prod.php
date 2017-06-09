<?php
/**
 * Created by PhpStorm.
 * User: sam
 * Date: 09/06/17
 * Time: 10:06
 */

require 'loader.php';

Configuration::setParameters('prod');


$router = new Router();
$router->routerRequete();