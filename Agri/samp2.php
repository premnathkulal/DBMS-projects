<html>
<head>
<title> hello </title>
</head>
<body>
<script type ="text/javascript">
s=0;
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
<h1>Hello world</h1>
</body>
</html>