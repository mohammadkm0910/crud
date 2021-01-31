<?php

namespace System\Traits;
trait View
{
    protected function view($dir, $vars = null)
    {
        $dir = str_replace(".","/",$dir);
        if ($vars) extract($vars);
        $path = realpath(dirname(__FILE__)."/../../application/view/$dir.php");
        if (file_exists($path))
            require_once($path);
        else
            echo "this view [$dir] not exist";
    }
    protected function asset($dir)
    {
        global $base_url;
        echo $base_url."public/$dir";
    }
    protected function url($url)
    {
        global $base_url;
        if ($url[0] == "/"){
            $url = substr($url,1,strlen($url) - 1);
        }
        echo $base_url.$url;
    }
    protected function includeProject($dir, $vars = null)
    {
        $dir = str_replace(".","/",$dir);
        if ($vars) extract($vars);
        $path = realpath(dirname(__FILE__)."/../../application/view/$dir.php");
        if (file_exists($path))
            require_once($path);
        else
            echo "this view [$dir] not exist";
    }
}