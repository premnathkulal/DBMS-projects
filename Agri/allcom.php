 <?php
		require  "init.php";
		session_start();
		$ser_name = $_SESSION['login_user'];
		$sql="select * from admin where admin_id='$ser_name'";
		$a = mysqli_query($con,$sql);
		$row = mysqli_fetch_assoc($a);
		$v=$row['s_user'];
		if($v == 'YES'){
			?>
			<script>
				window.location = "supercom.php";
			</script>
			<?php
		}else{
			?>
			<script>
				alert("YOU ARE NOT A SUPER USER");
				window.location = "comentpg.php";
			</script>
			<?php
		}
?>