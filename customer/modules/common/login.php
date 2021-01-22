<?php 
	$user = $password = $error = "" ;
	if (isset($_POST['btn_login'])) {
		$user = $_POST['user'];
		$password = $_POST['password'];
		$conn = mysqli_connect('localhost','root','','project_1');
		if(!$conn) die("ket noi that bai".mysqli_connect_eror()); 
		$sql = "SELECT id,name FROM customer WHERE (phone = '$user' OR email = '$user') AND password = '$password'";
		$result = mysqli_query($conn,$sql);
		if ($result == false) {
			echo "ERROR :".mysqli_error($conn);
		}
		else{
			if(mysqli_num_rows($result) == 1){
				$row = mysqli_fetch_assoc($result);
				$_SESSION['user']['id'] = $row['id'];
				$_SESSION['user']['name'] = $row['name'];
				header("location:index.php?module=home&action=home");
			}
			else{
				$error = "Tài khoản hoặc mật khẩu không chính xác";
			}
		}
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Đăng Nhập</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
	<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
	<!-- <link rel="stylesheet" type="text/css" href="css_banner.css"> -->
	<link rel="shortcut icon" type="image/jpg" href="image/logo2.png"/>
	<style type="text/css">
		body{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			color:black;
			
		}
		.div_tong{
			width: 1520px;
			height: 750px;
			background: white;

		}
		.div_top{
			width: 100%;
			height: 8%;
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
			height: 67%;
			
		}
		.div_footer{
			width: 100%;
			height: 25%;
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
			width: 75%;
			height: 100%;
			/*background: #E8AC1B;*/
			float: left;
		}
		.div_right{
			width: 15%;
			height: 100%;
			background: black;
			float: left;
		}
		.div_center_left{
			width: 90%;
			height: 100%;
			background: black;
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
			height: 400px;
			background: #28DCCD;
			margin: auto;
			margin-top: 10px;
			border-radius: 10px;
		}
		form{
			padding-top: 80px;
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
				<label>
					<a class="a_1" href="#"><span class="span1"><i id="i_1" class="fas fa-cart-plus">&nbsp</i>Giỏ hàng</span></a>
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
			<li>
				<a class="the_a" href="index.php?module=home&action=home"><span class="span_list" style="line-height: 55px;">Trang Chủ</span></a>
			</li>
			
	      <li>
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
      		<li>
				<a class="the_a" href=""><span class="span_list" style="line-height: 55px;">Áo </span><i class="fas fa-caret-down"></i></a>
				<ul>
		          <li>
		            <a class="the_a" href="#"><span class="span_list" style="line-height: 55px;">Áo Nam</span></a>
		          </li>
		          <li>
		            <a class="the_a" href="#"><span class="span_list" style="line-height: 55px;">Áo Nữ</span></a>
		          </li>
       		 </ul>
			</li>
		<li>
				<a class="the_a" href=""><span class="span_list" style="line-height: 55px;">Phụ Kiện </span><i class="fas fa-caret-down"></i></a>
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
		<form method="POST">
			<?php 
				echo "<p>$error</p>";
			 ?>
			<label id="lb_account">
				Tài Khoản :<br><br>
				<input style="padding-top: 10px;padding-bottom: 10px;" type="text" name="user" placeholder="Email Hoặc Số Điện Thoại" size="30">
			</label>
			<br><br>
			<label id="">
				Mật Khẩu :<br><br>
				<input style="padding-top: 10px;padding-bottom: 10px;" type="password" name="password" placeholder="Mật Khẩu"  size="30">
			</label>
			<br><br>
			<button style="padding-top: 10px;padding-bottom: 10px;margin-left: 55px;" type="submit" name="btn_login">Đăng Nhập</button>
		</form><br>
		<a href="">Chưa có tài khoản đăng kí tại Đây</a>
		</div>
	</div>
	<div class="div_footer">Footer</div>
</div>
</body>
</html>
