<?php
 
 require "init.php";
 session_start();
 $user_name = $_SESSION['login_user'];
 $pa = $_GET["product"];
 $pna = strtoupper($pa);
 $pqua = $_GET["quality"];
 $wt = $_GET["wt"];
 $typ = $_GET["type"];
 $amt = $_GET["amt"];

						
   					    $date = date('Y/m/d h:i:s a', time());
						
	 $sql = "select * from products where pro_name = '$pna'";
	 $result=mysqli_query($con,$sql);
	  if(!mysqli_num_rows($result)>0){
		  ?>
		  <script>
	         alert("THIS PRODUCT  IS NOT POSSIBLE TO SELL \n PLEASE CONTACT ADMINISTRATER!!!!!!!");
	         window.location.href = "mm.php";
	    </script>
		<?php
	  }
 
	 $sql="insert into vegsel(for_id,pro_name,pro_type,quality,weight,amount,time) values('$user_name','$pna','$typ','$pqua','$wt','$amt','$date');";
	 if(mysqli_query($con,$sql))
	 {
       ?>
		<script>
	        alert("Succesfully added yor product to the queue");
	         window.location.href = "mm.php";
	    </script>
	<?php 
	 }
	 else{
		?>
	
	<script>
	alert("Please enter the valied data");
	window.location.href = "mm.php";
	</script>
	
	<?php
	
	
	 }
 
 
  echo json_encode(array("reaction "=>$status));
  mysqli_close($con);
  
 ?>