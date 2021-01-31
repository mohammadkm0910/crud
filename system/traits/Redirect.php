<?php

namespace System\Traits;
trait Redirect
{
    protected function redirect($url)
    {
        global $base_dir;
        $protocol = $_SERVER["REQUEST_SCHEME"]."://";
        header("Location: $protocol".$_SERVER["HTTP_HOST"].$base_dir.$url);
    }
    protected function back()
    {
        $http_referer = isset($_SERVER["HTTP_REFERER"]) ? $_SERVER["HTTP_REFERER"] : null;
        if ($http_referer != null){
            header("Location: $http_referer");
        } else {
            echo "rout not found";
        }

    }
}