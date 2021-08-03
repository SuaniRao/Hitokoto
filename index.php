<?php
header("Content-type: text/html; charset=utf-8");
$path = dirname(__FILE__);
if (isset($_GET['lang'])&&!empty($_GET['lang'])){
	$lang=$_GET['lang'];
	$file=file($path."/".$lang.".txt");
}else{
	$file=file($path."/default.txt");
}
echo trim($file[mt_rand(0,count($file)-1)]);
?>