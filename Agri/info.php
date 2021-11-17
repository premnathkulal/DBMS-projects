<?php
session_start();
 $user_name = $_GET["uname"];
 $user_psw = $_GET["passwrd"];
 $_SESSION['login_user']= $user_name; 
  $_SESSION['login_psw']=$user_psw;
header("location:formerLogin.php");
?>