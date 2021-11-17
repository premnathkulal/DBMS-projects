<?php

$host="files.000webhost.com";
$user_name="root";
$user_password="";
$db_name="tulunad";

$con = mysqli_connect($host,$user_name,$user_password,$db_name);

if($con)
	echo "conection success";
else
	echo "Failed";

?>