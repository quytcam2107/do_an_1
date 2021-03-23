<?php 
	$name = $phone = $email = $pw = $gender =$date = $notifical = "";
	if (isset($_POST['btn'])) {
		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$pw = md5($_POST['pw']);
		$gender = $_POST['gender'];
		$date = $_POST['dob'];
		$address =$_POST['address'];

		$conn = mysqli_connect('localhost','root','','project_2');
		if(!$conn) die("ket noi that bai".mysqli_connect_eror());
		$sql = "INSERT INTO customer VALUES(NULL,'$name','$phone','$email','$gender','$date','$address','$pw')";
		$result = mysqli_query($conn,$sql);
		if ($result == false) {
			echo "ERROR :".mysqli_error($conn);
		}else{
			$notifical = "Đăng kí thành công !";
		}
	}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Đăng kí</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/jpg" href="image/logo2.png"/>
	<link rel="stylesheet" href="../publish/font_awesome/font-awesome-4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		<style type="text/css">
		*{
			font-family: Roboto-Regular,'Helvetica Neue',Helvetica,Tahoma,Arial,Sans-serif;
		}
		body{
			margin: 0px;
			padding: 0px;
			box-sizing: border-box;
			color:black;
			font-family: Roboto-Regular,'Helvetica Neue',Helvetica,Tahoma,Arial,Sans-serif;
		}
		.div_tong{
			width: 1520px;
			height: 1050px;
			background: white;
			position: absolute;
			left: 0px;
			top: 0px;
		}
		.div_top{
			width: 100%;
			height: 60px;
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
			height: 80%;
			background: url(../publish/source3.gif);
			background-position: center center;
		}
		.div_footer{
			width: 100%;
			height: 15%;
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
			width: 80%;
			height: 100%;
			/*background: #E8AC1B;*/
			float: left;
		}
		.div_right{
			width: 10%;
			height: 100%;
			/*background: black;*/
			float: right;
		}
		.div_center_left{
			width: 80%;
			height: 100%;
			/*background: black;*/
			float: left;
		}
		.div_center_right{
			width: 20%;
			height: 100%;
			
			float: left;
			position: relative;
		}
		a.a_1{
			font-size: 30;
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
		.div_form{
			padding-left: 250px;
			width: 500px;
			height: 700px;
			/*background: url(../publish/source3.gif);*/
			background: #B5B0B0;
			
			margin: auto;
			margin-top: 10px;
			border-radius: 10px;
		}
		form{
			padding-top: 80px;
			color: #FF3600;
			font-weight: bold;
			width: 100%;
		}
		.div_banner{
			width: 100%;
      		height: 55px;
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
        color: white;
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
      .quantity{
      	position: absolute;
      	right: 0;
      	top: 24px;
      	right: 115px;
      	font-size: 21px;
      	border-radius: 5px 10px 4px 8px;
      }
	</style>
	<style type="text/css">
		input{
			padding-top: 10px;padding-bottom: 10px;
		}
		button{
			padding-top: 10px;padding-bottom: 10px;margin-left: 55px;
			padding-left: 30px;
			padding-right: 30px;
		}
		.div_footer{
		background: #525252;
		position: relative;
	}
	.ft_1{
		float: right;
		position: absolute;
		right: 0px;
		top: -8px;
		right: 320px;
	}
	.ft_1_con{
		float: right;
		position: absolute;
		right: 0px;
		top: 50px;
		right: 320px;
		color: white;
		text-decoration: none;
	}
	.ft_1_con2{
		float: right;
		position: absolute;
		right: 320px;
		top: 90px;
		text-decoration: none;
		color: white;
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
			<div class="div_center_right" >
				<label>
					<a class="a_1" href="#"><span class="span1"><i style="font-size: 28px;color: red;" id="i_1" class="fa fa-cart-plus">&nbsp</i>Giỏ hàng  </span>
						<?php 
								$total_quantity = 0;
								// if (isset($_SESSION['user'])) {
									if (isset($_SESSION['cart'])) {
									foreach ($_SESSION['cart'] as $key => $quantity) {
										$total_quantity += $quantity;
									}
								}
								// }
								echo "<span class='quantity' style='color:red;font-size:18px;'>$total_quantity</span>";
							 ?>
					</a>
				</label>
			</div>
		</div>
		<div class="div_right">
			<?php 

			 ?>
			<!-- <button class="hvr-underline-reveal" type="submit" name="#"><a style="text-decoration: none;color: black;" href="index.php?module=common&action=login">Đăng nhập</a></button>
			<button class="hvr-underline-reveal" type="submit" name="#">Đăng kí</button> -->
		</div>
		
	</div>
	<div class="div_product">
		<div class="div_banner">
			<ul class="ul_first">
			<li class="<?php if($action == "home") echo "active" ?>">
				<a class="the_a" href="index.php?module=home&action=home"><span class="span_list" style="line-height: 55px;">Trang Chủ</span></a>
			</li>
			
	      <li class="<?php if($action == "product_trousers") echo "active" ?>">
	      		<a class="the_a" href="#"><span class="span_list" style="line-height: 55px;">Thời Trang Nam</span><i id="fa_1" class="fa fa-angle-down"></i></a>	
        <ul>
          <li>
            <a class="the_a" href="index.php?module=products&action=product_menfashion"><span class="span_list" style="line-height: 55px;">Quần Jean</span></a>
          </li>
          <li>
            <a class="the_a" href="index.php?module=products&action=shirt"><span class="span_list" style="line-height: 55px;">Áo Sơ Mi</span></a>
          </li>
           <li>
            <a class="the_a" href="index.php?module=products&action=coat"><span class="span_list" style="line-height: 55px;">Áo Khoác</span></a>
          </li>
        </ul>
      </li>
      		<li  class="<?php if($action == "product_shirt") echo "active" ?>">
				<a class="the_a" href="#"><span class="span_list" style="line-height: 55px;">Thời Trang Nữ</span><i id="fa_1" class="fa fa-angle-down"></i></a>
				<ul>
		          <li>
		            <a class="the_a" href=""><span class="span_list" style="line-height: 55px;">Áo Sơ Mi Nữ</span></a>
		          </li>
		          <li>
		            <a class="the_a" href="#"><span class="span_list" style="line-height: 55px;">Áo Thun</span></a>
		          </li>
       		 </ul>
			</li>
		<li>
				<a class="the_a" href="index.php?module=products&action=product_accessories"><span class="span_list" style="line-height: 55px;">Phụ Kiện </span><i id="fa_1" class="fa fa-angle-down"></i></a>
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
		<div class="div_form">
			<h3>
				<?php 
					echo $notifical;
					if ($notifical != "") {
						echo "<a href=index.php?module=common&action=login>Đăng Nhập</a>";
					}
				 ?>
			</h3>
		<form method="POST" onsubmit="return validateForm()">
			<label>
				Họ tên :<br>
			<input type="text" name="name" placeholder="Hãy nhập họ tên" size="30"><br><br>
		</label>
		<label>
			Số điện thoại :<br>
			<input type="tel" name="phone" placeholder="Hãy nhập số điện thoại" size="30"><br><br>
		</label>
		<label>
			Email :<br>
			<input type="email" name="email" placeholder="Hãy nhập Email" size="30"><br><br>
		</label>
		<label>
			Mật khẩu :<br>
			<input type="password" name="pw" placeholder="Mật khẩu" size="30"><br><br>
		</label>
		<label>
			Nhập lại mật khẩu :<br>
			<input type="password" name="rpw" placeholder="Nhập lại Mật khẩu" size="30"><br><br>
		</label>
		<label>
			Giới tính :<br><br>
			<input type="radio" name="gender" value="1" checked> Nam
			<label>
				<input type="radio" name="gender" value="0"> Nữ
			</label>
			
		</label>
		<br><br>	
		<label>
			Ngày Sinh :
			<input type="date" name="dob">
			<br>
		</label>
		<label>
			Địa chỉ :
			<input type="text" name="address" placeholder="Nhập địa chỉ">
		</label>
		<br>
		<button type="submit" name="btn">Đăng kí</button>
		</form><br>
		<a href="index.php?module=common&action=login">Đã có tài khoản Đăng nhập tại đây</a>
		</div>
	</div>
	<div class="div_footer" style="color: white">
		<h4 style="padding-left: 100px;font-weight: bold;padding-top: 10px;"><i class="fa fa-handshake-o" aria-hidden="true" style="font-size: 25px;color: #BDE9F8;"></i> Chăm Sóc Khách Hàng </h4>
		<span style="padding-left: 100px;"><i class="fa fa-phone-square" aria-hidden="true" style="color: #10A1FD;font-size: 20px;"></i> &nbspHotline : <span style="color: red;">0352 806 324</span></span><br><br>
		<span style="padding-left: 100px;"><i class="fa fa-envelope" aria-hidden="true" style="color: #10A1FD;font-size: 20px;"></i> &nbspGmail : <span style="color: #E88787;">quyetluu217@gmail.com</span></span>
		<h4 style="padding-left: 500px;margin-top: -105px;"><i class="fa fa-globe" aria-hidden="true" style="font-size: 25px;color: #BDE9F8;"></i>&nbsp&nbspĐịa chỉ :</h4>
		<span style="padding-left: 500px;">&nbsp<i class="fa fa-map-marker" aria-hidden="true" style="color: red;font-size: 20px;">&nbsp</i>&nbsp&nbspChung cư CT3 - phường Yên Nghĩa - quận Hà Đông - Hà Nội</span>
		<h4 class="ft_1">Mạng xã hội :</h4><br><br>
		<a class="ft_1_con" href="https://www.facebook.com/quat2107/"><i class="fa fa-facebook-square" style="font-size: 25px;color: #0F29ED;" aria-hidden="true"></i>&nbsp&nbspFacebook</a>
		<a class="ft_1_con2" href="https://www.facebook.com/quat2107/"><i class="fa fa-instagram" style="font-size: 25px;color: #F16934;" aria-hidden="true"></i>&nbsp&nbspInstagram</a>
	</div>
	
</div>
</body>
</html>