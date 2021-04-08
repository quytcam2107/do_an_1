<!-- <style type="text/css">
	.div_banner{
			width: 100%;
			height: 35%;
			background: white;
			position: relative;
		}
</style> -->
<div class="div_banner">
		<div class="slideshow-container">
		<div class="mySlides fade" > 
		  <img src="image/banner2.1.jpg">
		</div>
		<div class="mySlides fade" >
		  <img src="image/banner2.jpg">
		</div>
		<div class="mySlides fade" >
		  <img src="image/banner2.3.jpg">
		</div>
		</div>
		<div style="text-align:center;margin-top: 10px;" class="div_dot">
		  <span class="dot"></span> 
		  <span class="dot"></span> 
		  <span class="dot"></span> 
		</div>

		<script>
		var slideIndex = 0;
		showSlides();

		function showSlides() {
		  var i;
		  var slides = document.getElementsByClassName("mySlides");
		  var dots = document.getElementsByClassName("dot");
		  for (i = 0; i < slides.length; i++) {
		    slides[i].style.display = "none";  
		  }
		  slideIndex++;
		  if (slideIndex > slides.length) {slideIndex = 1}    
		  for (i = 0; i < dots.length; i++) {
		    dots[i].className = dots[i].className.replace(" active", "");
		  }
		  slides[slideIndex-1].style.display = "block";  
		  dots[slideIndex-1].className += " active";
		  setTimeout(showSlides, 2000); // Change image every 2 seconds
		}
		</script>
	</div>