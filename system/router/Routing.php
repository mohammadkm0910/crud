<?php


namespace System\router;
use ReflectionMethod;
class Routing
{
    private $current_route;
    public function __construct()
    {
       global $current_route;
       $this->current_route = explode("/",$current_route);
    }
    public function run()
    {
        global $base_url;
        $path = realpath(dirname(__FILE__)."/../../application/controller/".$this->current_route[0].".php");
        if (!file_exists($path)){
            if (file_exists(realpath(dirname(__FILE__)."/../../application/controller/Home.php"))){
                header("Location: $base_url"."home");
            } else {
                echo "404 - file not exists!!";
                exit;
            }
        }
        require_once ($path);
        sizeof($this->current_route) == 1 ? $method = "index" : $method = $this->current_route[1];
        $class = "Application\Controller\\".$this->current_route[0];
        $object = new $class;
        if (method_exists($object,$method)){
            $reflection = new ReflectionMethod($class,$method);
            $parameterCount = $reflection->getNumberOfParameters();
            if ($parameterCount <= count(array_splice($this->current_route,2))){
                call_user_func_array(array($object,$method),array_splice($this->current_route,2));
            } else {
                echo "404- parameter error!";
            }
        } else {
            echo "404 - method not exits!!";
        }
    }
}
