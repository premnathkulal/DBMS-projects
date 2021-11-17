<html>
<head>
<title>hi</title>
<style>
.overlay {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.7);
  transition: opacity 500ms;
  visibility: hidden;
  opacity: 0;
}
.overlay:target {
  visibility: visible;
  opacity: 1;
}

.popup {
  margin: 70px auto;
  padding: 20px;
  background: #fff;
  border-radius: 5px;
  width: 30%;
  position: relative;
  transition: all 5s ease-in-out;
}

.popup h2 {
  margin-top: 0;
  color: #333;
  font-family: Tahoma, Arial, sans-serif;
}
.popup .close {
  position: absolute;
  top: 20px;
  right: 30px;
  transition: all 200ms;
  font-size: 30px;
  font-weight: bold;
  text-decoration: none;
  color: #333;
}
.popup .close:hover {
  color: #06D85F;
}
.popup .content {
  max-height: 30%;
  overflow: auto;
}
</style>
</head>
<body>
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
	         window.location.href = "sell.html";
	    </script>
		<?php
	  }
 
	 $sql="insert into vegsel(for_id,pro_name,pro_type,quality,weight,amount,time) values('$user_name','$pna','$typ','$pqua','$wt','$amt','$date');";
	 if(mysqli_query($con,$sql))
	 {
       ?>
	   	 
			 		<div class="box">
    <a class="button" href="#popup1" id="modal"></a>
</div>
<script type="text/javascript">
document.getElementById("modal").click();
</script>
				<div id="popup1" class="overlay">
    <div class="popup">
        <h2>SUCCESFULLY ADDED YOUR PRODUCT TO THE LIST<BR> </H2>
        <a class="close" href="mm.php">&times;</a>
        <div class="content">
            <font color="black"><?php echo nl2br("<b>$pna  \n\n  TYPE = $typ \n\n  QUALITY = $pqua \n\n  WEIGHT = $wt Kg \n\n  AMMOUNT = $amt Rs\n\n") ?></font>
        </div>
    </div>
</div>
	<?php 
	 }
	 else{
		?>
	
	<script>
	alert("Please enter the valied data");
	window.location.href = "sell.html";
	</script>
	
	<?php
	
	
	 }

  mysqli_close($con);
  
 ?>
 </body>
 </html>