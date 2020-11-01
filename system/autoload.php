<?php

$autoload = spl_autoload_register(function($classname){
    include("system/libs/Load.php");
    include("system/libs/Main.php");
    include("system/libs/Database.php");
    include("system/libs/Model.php");
    include("app/controllers/".$classname.".php");
});
if(isset($_GET["url"])){
    $url=$_GET["url"];
    $url=rtrim($url,"/") ;
    $url=explode("/",$url);
    $classname=$url[0];
    if(class_exists($classname)){
        $class = new $url[0]();
        if(isset($url[1])){
            $method=$url[1];
            $class->$method();
        }elseif(isset($url[2])){
            $method=$url[1];
            $param=$url[2];
            $class->$method($param);
        }
    }


}
if(!isset($_GET["url"])){ $default = new Home();$default->default(); }