<?php
session_start();
require 'loader.php';

$router = new Router();
$router->routerRequete();
?>