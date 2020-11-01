<?php

$hostname = "localhost";
$db_user = "root";
$db_pwd = "";
$db_name ="osms";

$con =mysqli_connect($hostname,$db_user,$db_pwd,$db_name);

if(!$con){
	die("connection failed" .mysqli_connect_error());
}
else{
	//echo "connected";
}
?>