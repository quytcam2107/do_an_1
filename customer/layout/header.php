<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://kit.fontawesome.com/yourcode.js"></script>
	<link rel="shortcut icon" type="image/jpg" href="image/logo2.png"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
	<style type="text/css">
		body{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			color:white;

		}
		.div_tong{
			width: 1520px;
			height: 1100px;
			background: white;

		}
		.div_top{
			width: 100%;
			height: 63px;
			/*background: #F58181;*/
		}
		/*.div_menu{
			width: 99%;
			height: 10%;
			padding: 10px 10px 10px 10px;
			background: #1554F4;
			margin: 0px auto;
		}*/

		/*.div_banner{
			width: 100%;
			height: 35%;
			background: white;
			position: relative;
		}*/
		.div_product{
			width: 100%;
			height: 83%;
			/*background: #ACECF6;*/
		}
		.div_footer{
			width: 100%;
			height: 10%;
			background: black;
		}
		.div_left{
			width: 10%;
			height: 100%;
			background-image: url(image/logo5.jpg);
			background-size: 140%;
			background-repeat: no-repeat;
			background-position: center;
			float: left;
			
		}
		.div_center{
			width: 72%;
			height: 100%;
			/*background: #E8AC1B;*/
			float: left;
		}
		.div_right{
			width: 18%;
			height: 100%;
			background: white;
			float: left;
		}
		.div_center_left{
			width: 90%;
			height: 100%;
			background: white;
			float: left;
		}
		.div_center_right{
			width: 10%;
			height: 100%;
			
			float: left;
			position: relative;
		}
		a.a_1{
			text-decoration: none;
			color: white;

		}
		.input1{
			 border: 2px solid grey; 
    		 -webkit-box-shadow: 
     		 inset 0 0 4px  rgba(0,0,0,0.1),
             0 0 16px rgba(0,0,0,0.1); 
    		-moz-box-shadow: 
     		 inset 0 0 4px  rgba(0,0,0,0.1),
            0 0 16px rgba(0,0,0,0.1); 
   			 box-shadow: 
      		inset 0 0 4px  rgba(0,0,0,0.1),
            0 0 16px rgba(0,0,0,0.1); 
    		padding: 10px;
    		background: white;
    		margin: 10px 0px 0px 290px;
    		border-radius: 15px;
    		font-family: Courier;
		}
		.input1:hover{
			border: 2px solid #F70808;
		}
		.hvr-shutter-in-horizontal {
		  padding: 10px 20px 10px 20px;
		  border-radius: 5px;
		  display: inline-block;
		  vertical-align: middle;
		  -webkit-transform: perspective(1px) translateZ(0);
		  transform: perspective(1px) translateZ(0);
		  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
		  position: relative;
		  background: #4C4C4F;
		  -webkit-transition-property: color;
		  transition-property: color;
		  -webkit-transition-duration: 0.3s;
		  transition-duration: 0.3s;
		  font-family: Courier;

		}
		.hvr-shutter-in-horizontal:before {
		  content: "";
		  position: absolute;
		  z-index: -1;
		  top: 0;
		  bottom: 0;
		  left: 0;
		  right: 0;
		  background: #e1e1e1;
		  -webkit-transform: scaleX(1);
		  transform: scaleX(1);
		  -webkit-transform-origin: 50%;
		  transform-origin: 50%;
		  -webkit-transition-property: transform;
		  transition-property: transform;
		  -webkit-transition-duration: 0.2s;
		  transition-duration: 0.2s;
		  -webkit-transition-timing-function: ease-out;
		  transition-timing-function: ease-out;
		}
			.hvr-shutter-in-horizontal:before {
		  content: "";
		  position: absolute;
		  z-index: -1;
		  top: 0;
		  bottom: 0;
		  left: 0;
		  right: 0;
		  background: #e1e1e1;
		  -webkit-transform: scaleX(1);
		  transform: scaleX(1);
		  -webkit-transform-origin: 50%;
		  transform-origin: 50%;
		  -webkit-transition-property: transform;
		  transition-property: transform;
		  -webkit-transition-duration: 0.2s;
		  transition-duration: 0.2s;
		  -webkit-transition-timing-function: ease-out;
		  transition-timing-function: ease-out;
		}
		.hvr-shutter-in-horizontal:hover, .hvr-shutter-in-horizontal:focus, .hvr-shutter-in-horizontal:active {
		  color: white;
		}
		.hvr-shutter-in-horizontal:hover:before, .hvr-shutter-in-horizontal:focus:before, .hvr-shutter-in-horizontal:active:before {
		  -webkit-transform: scaleX(0);
		  transform: scaleX(0);
		}
		.span1{
			margin-bottom: 0px;
			margin-left: 12px;
			font-size: 18px;
			color: black;
			position: absolute;
			top: 22px;
		}
		.span1:hover{
			color: #F22145;
		}

		.hvr-underline-reveal {
			border-radius: 5px;
		  display: inline-block;
		  vertical-align: middle;
		  -webkit-transform: perspective(1px) translateZ(0);
		  transform: perspective(1px) translateZ(0);
		  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
		  position: relative;
		  overflow: hidden;
		  padding: 5px;
		  margin: 18px -30px 0px 40px;
		}
		.hvr-underline-reveal:before {
		  content: "";
		  position: absolute;
		  z-index: -1;
		  left: 0;
		  right: 0;
		  bottom: 0;
		  background: #2098D1;
		  height: 4px;
		  -webkit-transform: translateY(4px);
		  transform: translateY(4px);
		  -webkit-transition-property: transform;
		  transition-property: transform;
		  -webkit-transition-duration: 0.2s;
		  transition-duration: 0.2s;
		  -webkit-transition-timing-function: ease-out;
		  transition-timing-function: ease-out;
		}
		.hvr-underline-reveal:hover:before, .hvr-underline-reveal:focus:before, .hvr-underline-reveal:active:before {
		  -webkit-transform: translateY(0);
		  transform: translateY(0);
		}

		.div_menu{
			     width: 100%;
      		height: 54px;
      		background: #525252;
          display: flex;
          font-size: 15px;
          border-bottom: 2px solid #525252;
          border-top: 1px solid #525252;
		}
		ul{
	      list-style-type: none;
	      padding: 0px;
	      height: 100%;
        z-index: 10;

    	}
    	li{
	      float: left;
	      width: 180px;
	      height: 54px;
	      background: #525252;
        text-align: center;
        z-index: 10;
        position: relative;
        border-bottom: 2px solid red;
    	}
      li:hover{
        border-bottom: 3px solid #0CD8E5;

      }
    	.the_a{
    		display: block;
        width: 100%;
    		height: 100%;
        text-decoration: none;
        font-weight: bold;
        z-index: 10;
        transition-duration: 0.5s;
    	}
    	.the_a:hover{
    	 color: white;
        font-size: 17px;
        z-index: 10;
       background: #454545;
      transition-duration: 0.5s;
      background: #BCB9B9;
        border-bottom: 3px solid #0CD8E5;
    	}
    	li ul{
      		display: none;
          z-index: 10;
          
   		 }
   		 li:hover ul{
      display: block;
      z-index: 10;
      
      } 
      .ul_first{
        margin-left: 330px;
        margin-top: 0px;
        
        z-index: 10;
      }
     
	.slideshow-container {
		  max-width: 1550px;
		  position: relative;
		  margin: auto;
background-size: 300px 100px;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0px 0px;
  background-color: #999BEF;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;

}

	.active {
	  background-color: #717171;
	}

/* Fading animation */
		.fade {
		  -webkit-animation-name: fade;
		  -webkit-animation-duration: 1.5s;
		  animation-name: fade;
		  animation-duration: 1.5s;
		  background-size: cover;
		}

		@-webkit-keyframes fade {
		  from {opacity: .4} 
		  to {opacity: 1}
		}

		@keyframes fade {
		  from {opacity: .4} 
		  to {opacity: 1}
		}

/* On smaller screens, decrease text size */
		@media only screen and (max-width: 300px) {
		  .text {font-size: 11px}
		}
		.div_dot{
		 position: absolute;
		 top: 290px;
		 left: 700px;
		}

		.span_list{
			color: white;
		}
		i{
			color: white;
		}
		i:hover{
			color: red;
		}
		img{
			width: 100%;
			height: 315px;
		}
		#i_1{
			color: red;
			font-size: 18px;
		}
		#lb_cart{
			line-height: 60px;
			font-size: 19px;
			padding-left: 0px;
			text-decoration-line: none;
		}
		#lb_cart:hover{
			color: red;	
		}
		.a_cart{
			font-size: 18px;
			color: red;
		}
		.sp_name_1{
			line-height: 60px;
			padding-right: 30px;
			color: black;
		}

		.a_logout{
			text-decoration: none;
			padding-left: 10px;
			font-size: 10px;
			font-style: italic;
			color: black;
			font-family: fantasy;
		}
		.fas.logout{
			color: red;

		}
		.far.icon_name{
			font-size: 24px;
			color: #0C98AD;
			padding-left: 2px;
		}
		.active{
			background: #A8A5A5;
			color: black;
			border-bottom: 2px solid #111CF4;
		}
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
				<input class="input1" type="text" name="#" placeholder="Bạn cần tìm gì ..." size="50">
				<button class="hvr-shutter-in-horizontal" type="submit">Tìm kiếm</button>
			</div>
			<div class="div_center_right">
				<label id="lb_cart">
					<i id="i_1" class="fas fa-cart-plus">&nbsp</i>
					<a class="a_cart" href="#" style="text-decoration: none;color: black;">Giỏ hàng</a>
				</label>
			</div>
		</div>
		<div class="div_right">
			<?php 
				if (!isset($_SESSION['user'])) {
					echo "<button class='hvr-underline-reveal' type='submit' name='btn_login'><a style='text-decoration: none;color: black;' href='index.php?module=common&action=login'>Đăng nhập</a></button>";
					echo "<button class='hvr-underline-reveal' type='submit' name=''><a style='text-decoration: none;color: black;' href='index.php?module=common&action=login'>Đăng kí</a></button>";
				}
				else{
					echo "<span class='sp_name_1'>".'<i class="far fa-user-circle icon_name"></i>'.'&nbsp'.$_SESSION['user']['name']."</span>";
					echo "";
					echo "<a class='a_logout' href='index.php?module=common&action=logout'><i class='fas fa-power-off logout'></i> Đăng Xuất</a>";
				}
			 ?>
			<!-- <button class="hvr-underline-reveal" type="submit" name="#"><a style="text-decoration: none;color: black;" href="index.php?module=common&action=login">Đăng nhập</a></button>
			<button class="hvr-underline-reveal" type="submit" name="#">Đăng kí</button> -->
		</div>
	</div>
	<div class="div_menu">
		<?php 

		 ?>
		<ul class="ul_first">
			<li class="" >
				<a class="the_a" href="index.php?module=home&action=home"><span class="span_list" style="line-height: 55px;">Trang Chủ</span></a>
			</li>
			
	      <li class="<?php if($action=="product_trousers") echo "active"?>">
        	<a class="the_a" href="index.php?module=products&action=product_trousers"><span class="span_list" style="line-height: 55px;">Quần </span>  <i class="fas fa-caret-down"></i></a>
        <ul>
          <li>
            <a class="the_a" href="#"><span class="span_list" style="line-height: 55px;">Quần Nam</span></a>
          </li>
          <li>
            <a class="the_a" href="#"><span class="span_list" style="line-height: 55px;">Quần Nữ</span></a>
          </li>
        </ul>
      </li>
      		<li class="<?php if($action=="product_shirt") echo "active"?>">
				<a class="the_a" href="index.php?module=products&action=product_shirt"><span class="span_list" style="line-height: 55px;">Áo </span><i class="fas fa-caret-down"></i></a>
				<ul>
		          <li>
		            <a class="the_a" href="#"><span class="span_list" style="line-height: 55px;">Áo Nam</span></a>
		          </li>
		          <li>
		            <a class="the_a" href="#"><span class="span_list" style="line-height: 55px;">Áo Nữ</span></a>
		          </li>
       		 </ul>
			</li>
		<li class="<?php if($action=="product_accessories") echo "active"?>">
				<a class="the_a" href="index.php?module=products&action=product_accessories"><span class="span_list" style="line-height: 55px;">Phụ Kiện </span><i class="fas fa-caret-down"></i></a>
				<ul>
		          <li>
		            <a class="the_a" href="#"><span class="span_list" style="line-height: 55px;">Phụ Kiện Nam</span></a>
		          </li>
		          <li>
		            <a class="the_a" href="#"><span class="span_list" style="line-height: 55px;">Phụ Kiện Nữ</span></a>
		          </li>
       		 </ul>
			</li>
		</ul>
		
	</div>
	
	<div class="div_product">
	
	