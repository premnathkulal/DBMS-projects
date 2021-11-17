<?php
 
 require "init.php";
 session_start();
 $user_name = $_SESSION['login_user'];
 $pna = $_GET["product"];
 $pqua = $_GET["quality"];
 $wt = $_GET["wt"];
 $typ = $_GET["type"];
 $amt = $_GET["amt"];

						date_default_timezone_set('Asia/Kolkata');
   					    $date = date('Y/m/d h:i:s a', time());
						
 $sql="select * from vegsel  where  for_id='$user_name'and pro_name='$pna'";
 $result=mysqli_query($con,$sql);
 if(mysqli_num_rows($result)>0)
 { 
	?>
	
	<script>
	alert("The item is already exist please update your product");
	window.location.href ="m.php";
	</script>
	
	<?php
	
	
 }
 else{
	 $sql="insert into vegsel(for_id,pro_name,pro_type,quality,weight,amount,time) values('$user_name','$pna','$typ','$pqua','$wt','$amt','$date');";
	 if(mysqli_query($con,$sql))
	 {
		 $status = "ok";
		 header( 'Location: m.php' );
	 }
	 else{
		?>
	
	<script>
	alert("Please enter the valied data");
	window.location.href = "m.php";
	</script>
	
	<?php
	
	
	 }
 }
 
  echo json_encode(array("reaction "=>$status));
  mysqli_close($con);
  
 ?>