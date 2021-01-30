<?php
$base_dir = "/crud/";
$base_url = sprintf( "%s://%s%s",$_SERVER["REQUEST_SCHEME"],"localhost",$base_dir);
$temp = explode("?",$_SERVER["REQUEST_URI"]);
$current_route = str_replace($base_dir,"",$temp[0]);
unset($temp);