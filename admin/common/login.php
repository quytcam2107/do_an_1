<?php 
	$user = $pass = "";
	if(isset($_POST['btn'])){
		$user = $_POST['user_admin'];
		$pass = $_POST['pass'];
		
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Đăng nhập Admin</title>
	<meta charset="utf-8">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<style type="text/css">
		body{
			 background-color: #F49999; /* For browsers that do not support gradients */
 			 background-image: linear-gradient(to  right, #F3BA8C, #A7D1F1,#F2C1C1);
		}
		.div_form{
			background: white;
			width: 500px;
			height: 300px;
			border:1px solid black;
			margin: auto;
			position: absolute;
			top: 200px;
			left: 550px;
			border-radius: 5px;
			font-family: Cambria;
		}
		table{
			width: 100%;
			
		}
		tr,td,th{
			padding: 10px;
			border-collapse: collapse;
			width: 50px;
			
		}
		h2{
			text-align: center;
			border-radius: 8px;

			box-shadow: blue 0px 0px 0px 2px inset, rgb(255, 255, 255) 10px -10px 0px -3px, rgb(31, 193, 27) 10px -10px;
			
		}
		button{
			padding: 5px;
			font-family: Cambria;
			color: white;
		}
		.button2 {
			border:0px solid black;
			background-color: #F49999;
 			background-image: linear-gradient(to  right, #2272E9, #F9316E);
			padding-left: 35px;
			padding-right: 35px;
			border-radius: 8px;
		}
		.button2:hover{
			font-weight: bold;
			border:1px solid black;
			background-color: #C2A4A4;
			border-radius: 10px;
		}
		.div_small{
			position: absolute;
			top: 70px;
			margin-left: 45px;
		}
		.td_left{
			border-right: 2px double red;
		}
		input{
			border-radius: 5px;
			font-color;red;
			padding: 10px;
		}
		input:hover{
			border-radius: 1px;
		}
		.div_h2{
				width: 90%;
			position: absolute;
			top: 10px;
			left: 10px;
			font-size: 18px;
 			 background: -webkit-linear-gradient(#eee, black);
  			-webkit-background-clip: text;
 			 -webkit-text-fill-color: transparent;
		}

	</style>

</head>
<body>
	<div class="div_form">
		<div class="div_h2"><h2>ĐĂNG NHẬP ADMIN</h2></div>
			<div class="div_small">
				<table>
					<form method="POST">
				<tr>
					<th class="td_left"><i class="fas fa-cloud"></i>User :</th>
					<td>
						<input type="text" name="user_admin" placeholder="Hãy nhập User" required size="30">
					</td><br>
				</tr>
				<tr>
					<th class="td_left">Pass :</th>

					<td>
						<input type="password" name="pass" placeholder="Hãy Nhập Password" size="30">
					</td>
				</tr>
				<tr>
					<td></td>
					<td height="70px">
						<button type="submit" name="btn" class="button button2">ĐĂNG NHẬP</button>
						
					</td>
					
				</tr>
					</form>
			</table>
	</div>
			</div>
</body>
</html>