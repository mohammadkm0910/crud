<?php
$base_url = "http://localhost/crud/";
$base_dir = "/crud/";
$temp = explode("?",$_SERVER['REQUEST_URI']);
$current_route = str_replace($base_dir,"",$temp[0]);
unset($temp);

define("DB_HOST","localhost");
define("DB_USER","root");
define("DB_PASS","");
define("DB_NAME","crud");