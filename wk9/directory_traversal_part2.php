<?php
error_reporting(E_ALL);
$path=isset($_GET['q']) ? $_GET['q'] : '.';
if(file_exists($_GET[$path]) and ($path==".")){
    print "<pre>";
    print_r(scandir($path));
    print "</pre>";
}
?>