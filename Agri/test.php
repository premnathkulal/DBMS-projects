<html>
<head></head>
<body>
 <?php
 require  "init.php";
  $user_name = $_GET["try"];
  echo "$user_name"; 
$sql = "DELETE FROM sample WHERE jol='$user_name'";

if ($con->query($sql) === TRUE) {
       echo "<script>alert('success');</script>";
   
} else {
    echo "Error deleting record: " . $con->error;
}
?>
<h1>hi</h1>
</body>
</html>