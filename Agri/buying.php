<?php 
include "init.php";
session_start();
   $cosn= $_SESSION['login_user'];
   $fid=$_GET['e'];
   $pron=$_GET['a'];
   $wt=$_GET['d'];
						date_default_timezone_set('Asia/Kolkata');
   					    $date = date('Y/m/d h:i:s a', time());
  $sql="select * from vegsel  where  for_id='$fid' and pro_name='$pron' ";			
  $resul=mysqli_query($con,$sql);
  $ro = mysqli_fetch_assoc($resul);
  $lwt=$ro['weight'];
  $amt=$ro['amount'];
  
  if($wt>$lwt){
	  
	  
	      ?>
		 <script>
		 alert("Larger than the available product");
		 window.location="buyp1.php?pass=Fp";
		 </script>
		 <?php
	  
	 
  }else{
	 if($wt<=29){
		 ?>
		 <script>
		 alert("Minimum weight is 30 Kg");
		 window.location="buyp1.php";
		 </script>
		 <?php
	 }else{ 
	 
		 $finalrate = ($wt*$amt)+50;
		 $leftwt = $lwt - $wt;
		 $upl = "insert into cosform(cos_id,for_id,pro_name,waight,amount,date,status)values ('$cosn','$fid','$pron','$wt','$finalrate','$date','N')";
		 if(mysqli_query($con,$upl))
		 {
		 $upt="update vegsel set weight='$leftwt' where for_id = '$fid' and  pro_name='$pron'";
		  if(mysqli_query($con,$upt))
			{
			 ?>
	<script>
	alert("Successfull!! Total : <?php echo "$wt"; ?>Kg  Amount : <?php echo "$finalrate"; ?>");
	window.location="probuylist.php";
	
	</script>
	
	<?php
			}
	 else{
		 $status = "failed";
	 }
		 }else{
			$status = "failed";
		 }
	 }
  }
  
?>