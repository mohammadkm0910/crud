<?php

namespace System\Traits;
trait View
{
    protected function view($dir,$vars=null)
    {
        $dir = str_replace(".","/",$dir);
        if ($vars) extract($vars);
        $path = realpath(dirname(__FILE__)."/../../application/view/$dir.php");
        if (file_exists($path))
            require_once($path);
        else
            echo "this view <q>$dir</q> not exist";
    }
    protected function asset($dir)
    {
        global $base_url;
        echo $base_url."public/$dir";
    }
    protected function url($dir)
    {
        global $base_url;
        if ($dir[0] == "/")
            $dir = substr($dir,1,strlen($dir) - 1);
        echo $base_url.$dir;
    }
    protected function partialLoad($dir,$vars=null)
    {
        $dir = str_replace(".","/",$dir);
        if ($vars) extract($vars);
        $path = realpath(dirname(__FILE__)."../../application/view/$dir.php");
        if (file_exists($path))
            require_once($path);
        else
            echo "this view <q>$dir</q> not exist";
    }
}