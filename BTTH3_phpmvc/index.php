<?php 
$controller = isset($_GET['c'])?$_GET['c']:'home';
$action = isset($_GET['a'])?$_GET['a']:'index';

$controller = ucfirst($controller);
$controller = $controller."Controller";
$path = "controllers/".$controller.".php";
if(!file_exists($path)){
    var_dump($path);
    die("Check your path");
}
include $path;
$myController = new $controller();
if(method_exists($myController, $action)){
    $myController->$action();
}else{
    echo "$action does not exist in $controller class";
}