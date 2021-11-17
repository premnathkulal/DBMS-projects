<html>
<head>
<title> hello </title>
</head>
<body>
<script type ="text/javascript">
s=0;
</script>

<script type ="text/javascript">
	setInterval(function(){
 var post_id = s;
 document.write("<?php 
 $i=10;
 if($i!=10){
 echo "H";
 }
 ?>
 ");
 document.write(post_id);
 
 s++;
 if(s==5){
	s=0 
 }
}, 500);
</script>
</body>
</html>