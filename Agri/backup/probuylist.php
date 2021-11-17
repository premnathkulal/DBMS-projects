
 <!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<head>
   <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="css/cssstyle.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
		<head>
		<META HTTP-EQUIV="Pragma" CONTENT="no-cache">
		<META HTTP-EQUIV="Expires" CONTENT="-1">
		</head>
        <style>
      
               body {
				 background-color:#FFCC66;
                background-size: 100%;
                background-attachment: fixed;  
            }
            
			table{
				background-color:#FFFF99;
				border-radius:15px;
			}
			input[type=submit] {
			background-color: #4ffF50;
			color: white;
			padding: 8px 10px;
			border: none;
			
			border-radius: 5px;
			cursor: pointer;
			}
			input[type=text] {
			background:rgba(0,0,0,0.0);
			color: black;
			padding: 10px 10px;
			border: none;
			width:98%;
			border-radius: 5px;
			cursor: pointer;
			}
        </style>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
		</head>
    <body>
	  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="background:black;">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
             
        </div>
        <div id="navbar" class="navbar-collapse collapse" ">
          <form class="navbar-form navbar-center" role="form">
		  <div class="form-group" style="font-family:arial;">         
            <img src="img/cart.svg" width="100px" height="50px" />
            </div>
            <div class="form-group">
             <a class="navbar-brand"href="CostemerLogin.php"><font color="#4ffF50">Home</font></a>
            </div>
            <div class="form-group">
             <a class="navbar-brand" href="buyp1.php"><font color="#4ffF50">BuyProducts</font></a>
            </div>
			
              
         
            </form>
         
             
            
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
	
	<div style="position:fixed;left:80px;top:70px; font-family:arial;" >
	  <div class="container" >
    <h1><Center><b>YOUR BUYING LIST</b></CENTER></H1>

	</div>
	</div>
	
	
	<font color="black">
	
	<br><br><br><br><br><br><br>
        <?php
require  "init.php";
 session_start();
  $user_name = $_SESSION['login_user'];
 $user_psw = $_SESSION['login_psw'];
 
 $sql="select cos_id from costemer  where  cos_id='$user_name' and  passwrd = '$user_psw'";
 $result=mysqli_query($con,$sql);
 
if(!mysqli_num_rows($result)>0){
	 echo "error";
 }else{
	 $row = mysqli_fetch_assoc($result);
	 $cosi=$row['cos_id'];
	 $idd=200;
	 $l=100;
	while($idd!=0){
		$sq="select * from cosform where id='$idd'";
				
				$resul=mysqli_query($con,$sq);		
				$ro = mysqli_fetch_assoc($resul);
				
				 $cd=$ro["cos_id"];
				 $fd=$ro["for_id"];
				 $pn=$ro["pro_name"];
				 $wt=$ro["waight"];
				 $amt=$ro["amount"];
				 $tm=$ro["date"];
				 $yz=$ro["status"];
					if($cd == $cosi){
						
				
				?>
				<form action="" method="POST">
		 <?php
		$g=$l%2;
		$l--;
		
?>	
     <div class="col-md-6">
	 <br>
        <center><div> <table border="0" width="550" height="50">
	    <tr>
		
		<?php
				require  "init.php";
				$pkc="select * from products where pro_name='$pn'";
				$pfc="select f_state,for_name from former where for_id ='$fd'";
				$pkr=mysqli_query($con,$pkc);
				$pfr=mysqli_query($con,$pfc);
				$vv = mysqli_fetch_assoc($pkr);
				$vf = mysqli_fetch_assoc($pfr);
				$resp=$vv['pro_name'];
				$fors=$vf['f_state'];
				$forn=$vf['for_name'];
				
				
		?>
		
	     <td rowspan="22" width="200" height="150" ><img src="imageU1/proview.php?tool_id=<?php echo $resp ?>" width="170" height="200" /></td>
	    
		  <tr><td colspan="9"><label><h3><b><input type="text" name= "try" value="<?php echo "$pn"; ?>" readOnly style="color:red;"></b></h3></label></td>
		  
		  </tr>
		
		
		 <tr ><td colspan="2" ><label ><?php echo "$wt Kg"; ?></td>
		      <td colspan="2" dir = "ltr"><label ><?php echo"₹ $amt "; ?></td>
		 </tr>
		 
		 <tr>
			  <td colspan="2"><label align="right"><?php echo "$forn"; ?></label></td>
			  <td colspan="2"><label align="right"><?php echo "$fors"; ?></label></td>
		 </tr>
		   <tr ><td colspan="22"><label >Buying Date: <?php echo "$tm"; ?></td></tr>
		 <tr>
			  <td colspan="22"><input type="text" name= "ids" value="<?php echo "$idd"; ?>" readOnly style="color:rgba(0,0,0,0);"></td>
			  
		 </tr>
				
		   <tr> 
			<td colspan="3">
			<?php if($yz=='N')
			{ 
			?>			
				<b><input type="submit" value="Check" name="submit_btn" style="width:40%; background-color:Lime; color:black;"/></b>
			<?php } else { ?>
				<b><input type="submit" value="Recived" name="submit_btn" style="width:40%; background-color:red; color:black;"/></b>
			<?php }	?>
		       </td>
		  </tr>	
		  
		</tr>
	   </table>
		</div>  
        </div>
      
      </div>
		</form>
				
				<?php 
					}
				 $idd--;
				
			}
			if($l==100){
	?><h1><center><font color="red"><br><br><br><br>NO ITEM LIST FOUND </font></h1>
	<br><br><br><br><br><br><br><br><br><br><br>
	<?php
}
 }


 ?>
<?php
     if(isset($_REQUEST['submit_btn']))
    {
      $pn=$_POST['try'];
	  $ids=$_POST['ids'];
	  $ci=$_SESSION['login_user'];
				$xx="select status from cosform where id='$ids'";				
				$yy=mysqli_query($con,$xx);		
				$zz = mysqli_fetch_assoc($yy);
				$yz=$zz["status"];
				if($yz=='Y'){
					$sql = "DELETE FROM cosform WHERE pro_name='$pn'  and cos_id='$ci' and id='$ids'";
				}else{
				?>
					<script>
					alert("YOU PRODUCT IS ON THE WAY");
					</script>							
				<?php
				}
if ($con->query($sql) === TRUE) {
		?>
		<script>
		alert("THANK YOU FOR SHOPING");
		</script>
		<?php
		echo("<meta http-equiv='refresh' content='0'>");
 } 
 else {
    echo "" . $con->error;
}
    }
	
?>

<?php
     if(isset($_REQUEST['edit_btn']))
    {
      $pn=$_POST['try'];
	  $_SESSION['login_user']=$pn;
	  echo "$pn";
	}
?>




 <div class="footer footer-fixed-bottom" id="templatemo_footer_wrapper" align="center" >
<footer>
	<div id="templatemo_footer">
    
		<h3><i><font color="red">powerd_by </font>prems_creations</i></h3>

	</div>
	</footer>
	
</div>

 <!-- /container -->       
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>


	</body>
</html>














