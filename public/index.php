<?php
session_start();
include_once("../application/config/db.php");
include '../application/helpers/common.php';

$request=$_GET['req'];

if(empty($request)){
	$request="home";
}

$arr=explode('/',$request);
$className=$arr[0];

if(!isset($arr[1]) || empty($arr[1]))
{
	$arr[1] = "home";
}


$filepath="../application/controller/$className.php";

if(file_exists($filepath))
{
	include($filepath);
    $cls=ucfirst($className)."Controller";
    $obj = new $cls();
    if (method_exists($obj, $arr[1])) {
    	$method_name = $arr[1];
    	unset($arr[1]);
    	unset($arr[0]);
  		call_user_func_array([$obj, $method_name], array($arr));
  	}else{
  		die("page not found!");
  	}

}else{
	echo "page Not found";
}

?>