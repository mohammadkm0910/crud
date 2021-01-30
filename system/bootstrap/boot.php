<?php
session_start();

require_once("system/config.php");
require_once("system/bootstrap/Loader.php");
$loader = new \System\Bootstrap\Loader();
$loader->autoloader();
$router = new \System\router\Routing();
$router->run();