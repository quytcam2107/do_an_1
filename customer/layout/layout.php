<!DOCTYPE html>
<html>
<head>
	<title>Trang chủ</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="style_menu.css">
	<link rel="stylesheet" type="text/css" href="css_banner.css">
	<style type="text/css">
		
		
	</style>
</head>
<body>
<div class="div_tong">
	<div class="div_top">
		<a href="#">
			<div class="div_left">
			
			</div>
		</a>
		<div class="div_center">
			<div class="div_center_left">
				<input class="input1" type="text" name="#" placeholder="Tìm Kiếm" size="40">
				<button class="hvr-shutter-in-horizontal" type="submit">Tìm kiếm</button>
			</div>
			<div class="div_center_right">
				<label>
					<a class="a_1" href="#"><span class="span1"><i  class="fas fa-cart-plus">&nbsp</i>Giỏ hàng</span></a>
				</label>
			</div>
		</div>
		<div class="div_right">
			<button class="hvr-underline-reveal" type="submit" name="#">Đăng nhập</button>
			<button class="hvr-underline-reveal" type="submit" name="#">Đăng kí</button>
		</div>
	</div>
	<div class="div_menu">
		
		<ul class="ul_first">
			<li>
				<a class="the_a" href=""><span class="span_list" style="line-height: 55px;">Giới thiệu</span></a>
			</li>
			<li>
	        	<a class="the_a" href="#"><span class="span_list" style="line-height: 55px;">Liên hệ</span></a>
	      </li>
	      <li>
        	<a class="the_a" href="#"><span class="span_list" style="line-height: 55px;">Sản phẩm </span><i class="fas fa-caret-down"></i></a>
        <ul>
          <li>
            <a class="the_a" href="#"><span class="span_list" style="line-height: 55px;">Quần áo mùa hè</span></a>
          </li>
          <li>
            <a class="the_a" href="#"><span class="span_list" style="line-height: 55px;">Quần áo mùa đông</span></a>
          </li>
        </ul>
      </li>
      		<li>
				<a class="the_a" href=""><span class="span_list" style="line-height: 55px;">Quần áo </span><i class="fas fa-caret-down"></i></a>
				<ul>
		          <li>
		            <a class="the_a" href="#"><span class="span_list" style="line-height: 55px;">Quần áo Nam</span></a>
		          </li>
		          <li>
		            <a class="the_a" href="#"><span class="span_list" style="line-height: 55px;">Quần áo Nữ</span></a>
		          </li>
       		 </ul>
			</li>
		</ul>
		
	</div>
	<div class="div_banner">
		<div class="slideshow-container">
		<div class="mySlides fade" > 
		  <img src="https://thegioidohoa.com/wp-content/uploads/2015/10/thiet-ke-banner-an-tuong-cho-web-thoi-trang.jpeg">
		</div>
		<div class="mySlides fade" >
		  <img src="https://thietkehaithanh.com/wp-content/uploads/2013/08/thietkehaithanh-banner1.jpg">
		</div>
		<div class="mySlides fade" >
		  <img src="https://fashionminhthu.com.vn/wp-content/uploads/2018/12/fanpage-web-banner-6.jpg">
		</div>
		</div>
		<div style="text-align:center" class="div_dot">
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
	<div class="div_product">Product

	</div>
	<div class="div_footer">footer</div>
</div>
</body>
</html>