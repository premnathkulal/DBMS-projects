<?php
 
 require  "init.php";
 $name = $_GET["name"];
 $user_name = $_GET["uname"];
 $user_psw = $_GET["passwrd"];
 $state = $_GET["state"];
 $city = $_GET["city"];
 $pin = $_GET["pinc"];
 $phno = $_GET["pno"];
 
 
 $sql="select * from former  where  for_id='$user_name'";
 $result=mysqli_query($con,$sql);
 if(mysqli_num_rows($result)>0)
 {
	 	?>
	
	<script>
	alert("This user name is already exist");
	window.location="FormerRrgister.html" ;
	</script>
	
	<?php
	
	
 }
 else{
	 $sql="insert into former values('$user_name','$name','$user_psw','$state','$city','$pin','$phno');";
	 if(mysqli_query($con,$sql))
	 {
		 $status = "ok";
		?><script>
	alert("User Scucessfully Registerd");
	window.location="FormerLogin.html" ;
	</script><?php
	 }
	 else{
		 $status = "failed";
	 }
 }
 
  echo json_encode(array("reaction "=>$status));
  mysqli_close($con);
  
  ?>