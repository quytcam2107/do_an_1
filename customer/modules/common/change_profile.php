<?php 
$error = $success ='';
   $id = $_SESSION['user']['id'];
   $sql = "SELECT * FROM customer WHERE id = '$id'";
   $result = mysqli_query($conn,$sql);
   if ($result == false) {
   		echo "ERROR".mysqli_error($conn);
   }else if(mysqli_num_rows($result) == 1){
   		$row = mysqli_fetch_assoc($result);
   		$name = $row['name'];
   		$phone = $row['phone'];
   		$email = $row['email'];
   		$gender = $row['gender'];
   		$date_of_birth = $row['date_of_birth'];
   		$address = $row['address'];
   		$password = $row['password'];
   }
   if (isset($_POST['btn'])) {
   		$name = $_POST['name'];
   		$phone = $_POST['phone'];
   		$email = $_POST['email'];
   		$gender = $_POST['gender'];
   		$date_of_birth = $_POST['dob'];
   		$address = $_POST['address'];
   		$sql = "UPDATE customer SET name = '$name',phone = '$phone',email = '$email',gender = '$gender',date_of_birth='$date_of_birth',address='$address' WHERE id = '$id'";
   		$result = mysqli_query($conn,$sql);
   		if ($result == false) {
   			$error = "Lỗi không thể thay đổi thông tin";
   			echo "ERROR :".mysqli_error($conn);
   		}
   		else{
   			header("Location:index.php?module=common&action=change_profile");
   			$error = "Thay đổi thành công !";
   		}
   }
 ?>
<?php 
	$tittle = "Thay đổi thông tin";
	require_once("layout/header.php");
 ?>
 <style type="text/css">
 	*{
 		color: black;
 	}
 	.div_product{
 		
 		height: 500px;
 	}
 	.div_tong{
 		width: 100%;
 		height: 700px;
 	}
 	.div_form{
 		width: 400px;
 		height: 400px;
 		border: 5px double #877E7E;
 		margin: auto;
 	}
 	form{
 		text-align: center;
 	}
 	.sp_change{
 		float: left;
 		margin-left: 80px;
 	}
 	.input_change{
 		float: right;
 		margin-right: 50px;
 	}
 </style>
 <div class="div_change">
 	<br><br>
 	<div class="div_form">
 		<h4 style="color: red;text-align: center;">
 			<?php 
 			echo $error;
 		 ?>
 		</h4>
 		
 		<form method="POST">
 			<br><br>
 		<label>
 			<span class="sp_change">Tên :</span>
 			<input class="input_change" type="text" name="name" required placeholder="Tên " value="<?php  echo $name;?>"><br><br>
 		</label>
 		<label>
 			<span class="sp_change">Số điện thoại :</span>
 			<input class="input_change" type="text" name="phone" placeholder="Số điện thoại" value="<?php  echo $phone;?>"><br><br>
 		</label>
 		<label>
 			<span class="sp_change">Email :</span>
 			<input class="input_change" type="text" name="email" placeholder="Email" value="<?php  echo $email;?>"><br><br>
 		</label>
 		<label>
 			<span class="sp_change">Giới tính :</span>
 			<input  type="radio" name="gender" value="1" <?php if($gender == 1) echo "checked"?>> Nam
 			<input  type="radio" name="gender" value="0" <?php if($gender == 0) echo "checked"?>> Nữ
 		</label><br><br>
 		<label>
 			<span class="sp_change">Ngày sinh :</span>
 			<input class="input_change" type="date" name="dob" value="<?php echo $date_of_birth; ?>"><br><br>
 		</label>
 		<label>
 			<span class="sp_change">Địa chỉ :</span>
 			<input class="input_change" type="text" name="address" value="<?php echo $address ?>"><br><br>
 		</label>
 		<!-- <label>
 			Mật khẩu :
 			<input type="password" name="pw" value="<?php echo $password; ?>"><br><br>
 		</label> -->
 		<!-- <label>
 			Nhập lại mật khẩu :
 			<input type="password" name="rpw"><br><br>
 		</label> -->
 		<button name="btn" type="submit">Thay đổi</button>
 		<button>
 			<a style="text-decoration: none;" href="index.php?module=common&action=change_password">Thay đổi mật khẩu</a>
 		</button>
 	</form>	

 	</div>
 </div>
 <?php 
	$tittle = "Thay đổi thông tin";
	require_once("layout/footer.php");
 ?>