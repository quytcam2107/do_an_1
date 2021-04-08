<?php 
	if(!isset($_SESSION['user'])) {
		header("Location:index.php?module=common&action=login");
	}
	
 ?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $tittle; ?></title>
	<script type="text/javascript" src="../publish/ckeditor/ckeditor.js"></script>
	<link rel="shortcut icon" type="image/jpg" href="image/logo2.png"/>
	<!-- <script src='https://kit.fontawesome.com/a076d05399.js'></script> -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
	<link rel="stylesheet" href="../publish/font_awesome/font-awesome-4.7.0/css/font-awesome.min.css">
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" /> -->
	<style type="text/css">
		*{
			padding: 0;
			margin: 0;
			box-sizing: border-box;
		}
		body{
			background: #DAD5D5;

		}
		.div-container{
			background: white;
			width: 1200px;
			height: auto;
			margin: auto;
		}
		.header{
			height: 12vh;
			border-bottom: 3px double #DBB5B5;

		}
		.div-menu{
			width: 250px;
			height: auto;
			float: left;
			border-left: 3px solid #DBB5B5;
		}
		.div-content{
			
			width: 950px;
			height: auto;
			float: left;

		}
		.div_left{
			width: 199px;
			height: 100%;
			background: url(image/logo5.jpg);
			/*background-size: 250px 150px;*/
			background-size: 120%;
			background-repeat: no-repeat;
			background-position: center;
			float: left;
			border-left: 3px solid #DBB5B5;
		}
		.div_right{
			width: 1000px;
			height: 100%;
			float: left;
			
		}
		.div-menu ul{
			background: white;
			height: 153vh;
			list-style-type: none;
			/*border-right: 2px solid black;*/
			background: #A7A0A0;
		}
		.div-menu li{
			height: 10vh;
			border-top: 1px solid #DBB5B5;
			font-size: 15px;
			border-radius: 10px 10px;
		}
		.div-menu a{
			text-decoration: none;
			margin-left: 15px;
			line-height: 60px;
			color: black;
		}
		.div-menu a:hover{
			color: red;
		}
		li:hover{
			background: #28CDE6;
			border-bottom: 2px solid #EA5C5C;
			border-right: 1px solid #EA5C5C;
			font-weight: bold;
		}
		
		i{
			margin-top: 20px;
			text-align: left;
			margin-left: 20px;
		}

		a{
			font-size: 18px;
			
		}
		.sp_1{
			margin-left: 700px;
		}
		.sp_2{
			color: red;
			font-weight: bolder;
		}
		.active{
			background: #1BB6B8;
			font-weight: bolder;
			border-bottom: 4px solid #DBB5B5;
			
			font-size: 12px;
			color:  #0822E8;
		}
		#the_i{
			font-size: 25px;
			color: #083748;
		}
	</style>
</head>
<body>
<div class="div-container">
	<div class="header">
		<div class="div_left"></div>
		<div class="div_right">
			<p style="float: right;font-size: 20px;">
			<?php
				if (isset($_SESSION['user'])) {
					echo "Xin Chào,  "."<span style='color:red;font-family: cursive;font-weight: bolder;'>".$_SESSION['user']['name']."</span>";
				}
			 	?>
			 	<br>
			 	<a style="text-decoration: none;font-size: 15px;float: right;color: blue;" href=""><i class="fa fa-exchange" aria-hidden="true"></i> Thay Đổi Thông Tin</a><br>
			 	<a style="text-decoration: none;font-size: 15px;float: right;color: blue;" href="index.php?module=common&action=login">Đăng Xuất</a>
			 </p>
			 
		</div>
	</div>
	<div class="div-menu">
		<ul>
			<li class="<?php if($module == "products") echo "active"; ?>">
				<label>
					<i class="fa fa-inbox i_1" id="the_i" aria-hidden="true"></i><a href="index.php?module=products&action=list">Quản Lý Sản Phẩm</a>
					
				</label>
			</li>
			<li class="<?php if($module == "invoice") echo "active"; ?>">
				<label>
					<i class="fa fa-credit-card" id="the_i" aria-hidden="true"></i><a href="index.php?module=invoice&action=list">Quản Lý Hoá Đơn</a>
				</label>
			</li> 
			<li class="<?php if($module == "trademark") echo "active"; ?>">
				<label>
					<i class="fa fa-linode"  id="the_i" aria-hidden="true"></i>
					<a href="index.php?module=trademark&action=list">Quản Lý Thương Hiệu</a>
				</label>
			</li>
			<li class="<?php if($module == "type") echo "active"; ?>">
				<label>
					<i class="fa fa-th-large" id="the_i" aria-hidden="true"></i>
					<a href="index.php?module=type&action=list">Quản Lý Loại</a>
				</label>
			</li>
		</ul>
	</div>
	<div class="div-content">