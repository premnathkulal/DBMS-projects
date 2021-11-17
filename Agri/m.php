
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
				background-color:#FFFF99;
                background-size: 100%;
                background-attachment: fixed;  
            }
            
			table{
				 background:rgba(0,0,0,0.5); 
				border-radius:16px;
			}
			input[type=submit] {
			background-color: #4ffF50;
			color: white;
			padding: 10px 10px;
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
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-center" role="form">
		   <div class="form-group">
          
            <img src="img/mic.png" width="100px" height="50px" />
            </div>
            <div class="form-group">  
             <a class="navbar-brand"href="formerLogin.php"><font color="#4ffF50"> Home</a>
            </div>
            <div class="form-group">
             <a class="navbar-brand" href="sell.html"><font color="#4ffF50"> Sell</a>
            </div>
               <div class="form-group">
             <a class="navbar-brand" href="edit.html"><font color="#4ffF50"> Update</a>
            </div>
            
           
         
            </form>
         
             
            
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
	
	<div style="position:fixed;left:80px;top:70px; color:red;" >
	  <div class="container" >
    <h1><Center><b><u>YOUR SELLINGS</u></CENTER></H1>

	</div>
	</div>
	
	
	<font color="yellow">
	
	<br><br><br><br><br><br><br>
        <?php
		$uoo = 0;
require  "init.php";
 session_start();
  $user_name = $_SESSION['login_user'];
 $user_psw = $_SESSION['login_psw'];
 $sql="select for_id from former  where  for_id='$user_name' and  passwrd = '$user_psw'";

 $result=mysqli_query($con,$sql);
 
if(!mysqli_num_rows($result)>0){
	 echo "error";
 }else{
	 $row = mysqli_fetch_assoc($result);
	 $form=$row['for_id'];
	 $idd=300;
	 $l=100;
	while($idd!=0){
		$sq="select * from vegsel where id='$idd'";
		 $resul=mysqli_query($con,$sq);
		
			
				
				$ro = mysqli_fetch_assoc($resul);
				
				 $fd=$ro["for_id"];
				 $pn=$ro["pro_name"];
				 $qlt=$ro["quality"];	
				 $wt=$ro["weight"];
				 $amt=$ro["amount"];
				 $tm=$ro["time"];
				 $type=$ro["pro_type"];
					if($fd == $form){
						
				
				?>
				<form action="" method="POST">
		 <?php
		$g=$l%2;
		$l--;
		
?>	
     <div class="col-md-6" >
	 <br>
        <center><div> <table border="0" width="550" height="230">
	    <tr>
		
		<?php
				require  "init.php";
				$pkc="select * from products where pro_name='$pn'";
				$pkr=mysqli_query($con,$pkc);
				$vv = mysqli_fetch_assoc($pkr);
				$resp=$vv['pro_name'];
				$uoo++;
		?>
		
	     <td rowspan="7" width="200" height="150" ><img src="imageU1/proview.php?tool_id=<?php echo $resp ?>" width="170" height="200" /></td>
	    
		  <tr><td colspan="9"><label ><h3><input type="text" name= "try" value="<?php echo "$pn"; ?>" readOnly style="color:pink;"/></label></td></tr></h3>
			 <tr><td colspan="9"><label ><?php echo "$type"; ?></td></tr>
		 <tr ><td colspan="9"><label ><?php echo "$qlt"; ?></td></tr>
		  
		  
		  
		 <tr >
		 <td colspan="1" dir="ltr"><label ><?php echo "$wt Kg Left "; ?></td>
		 <td colspan="2"><label ><?php echo "₹ $amt per Kg"; ?></td>
		 </tr>
		 
		 
		 
	  <tr ><td colspan="9"><label >Last Update time : <?php echo "$tm"; ?></td></tr>
		
		 
		 <tr>
		
		 <?php if($wt<=0) {?>
		  <td colspan="5"><input type="submit" value="Remove" name="submit_btn"style="width:65%; background:red;"/></td>
		 <?php }else {?>
		  <td colspan="5"><input type="submit" value="Remove" name="submit_btn"style="width:65%;"/></td>
		 <?php } ?>
		 
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
	?><h1><center><font color="red"><br> no item i s selled at now </font></h1>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<?php
}
 }


 ?>
<?php
     if(isset($_REQUEST['submit_btn']))
    {
      $pn=$_POST['try'];
	  $fi=$_SESSION['login_user'];
$sql = "DELETE FROM vegsel WHERE pro_name='$pn' and for_id='$fi'";
       
if ($con->query($sql) === TRUE) {
		?>
		<script>
		alert("ok");
		</script>
		<?php
		echo("<meta http-equiv='refresh' content='0'>");
 } 
 else {
    echo "Error deleting record: " . $con->error;
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




  
<?php if($uoo>=3) {?> 
	
  	<div id="templatemo_footer_wrapper" align="center">
<?php } else {  ?>
	<div id="templatemo_footer_wrapper" align="center" style="position:fixed; left:0; bottom:0; width:100%;">	

<?php } ?>
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


