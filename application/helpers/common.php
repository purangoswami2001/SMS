<?php

function load($data=[],$view,$layout="default")
{

	$viewPath="../application/view/$view";

	$layoutPath="../application/view/layouts/$layout/main.php";
    include($layoutPath);
     
     
}

function getMessage()
{
	if(!empty($_SESSION['message']))
	{
		$msg=$_SESSION['message'];
		unset($_SESSION['message']);
		return $msg;
   }else
   {
   	 return "";
   }
}

function setMessage($msg)
{
	if(!empty($msg))
	{
		$_SESSION['message']=$msg;
	}
}

function dx($value)
{
   echo "<pre>";
   print_r($value);
   echo "</pre>";
   die;
}

function d($value)
{
   echo "<pre>";
   print_r($value);
   echo "</pre>";
}

?>