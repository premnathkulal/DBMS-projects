<?php
 
 require  "init.php";
 $name = $_GET["name"];
 $user_name = $_GET["uname"];
 $user_psw = $_GET["passwrd"];
 $sql="select * from users  where  uname='$user_name'";
 $result=mysqli_query($con,$sql);
 if(mysqli_num_rows($result)>0)
 {
	 $status = "exist";
 }
 else{
	 $sql="insert into users(name,uname,passwrd) values('$name','$user_name','$user_psw');";
	 if(mysqli_query($con,$sql))
	 {
		 $status = "ok";
	 }
	 else{
		 $status = "failed";
	 }
 }
 echo "red";
  echo json_encode(array("response"=>$status));
  mysqli_close($con);
  
  ?>