<!---------------------------------------------------------------GOVERNMENT--------------------------------------------------------------------->
	     <section class="resume-section p-3 p-lg-5 d-flex d-column" style="background-color:black; width:100%;">
		
		<div class="my-auto" style="width:100%;">
					<div class="w3-content w3-section" style="width:100%;  position:right;"> 
					<div class="container" style="width:100%; height:25%; ">
								<img class="mySlides w3-animate-fading" src="img/ban1.jpg" style="width:100%; height:400px; position:right;">
					</div>
					<div class="container" style="width:100%; height:25%; ">
								<img class="mySlides w3-animate-fading" src="img/2.jpg" style="width:100%; height:400px;  position:right;">
					</div>
					<div class="container" style="width:100%; height:25%;">
								<img class="mySlides w3-animate-fading" src="img/3.jpg" style="width:100%; height:400px;">
					</div>
					<div class="container" style="width:100%; height:25%;">
								<img class="mySlides w3-animate-fading" src="img/4.jpg" style="width:100%; height:400px;">
					</div>

					</div>
			</div>

 </section>
	
	
	<!----------------------------------------------------------------------------------------------------------------------------------------------->
	
	
	
	 <script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 4000);    
}
</script>