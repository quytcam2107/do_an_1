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
   		$password1 = $row['password'];
   }
   if (isset($_POST['btn'])) {
   		$password = md5($_POST['pw']);
         $npw = md5($_POST['npw']);
         

   		$sql = "UPDATE customer SET password = '$npw' WHERE id = '$id' AND password = '$password'";
   		$result = mysqli_query($conn,$sql);
   		if ($result == false) {
   			$error = "Lỗi không thể thay đổi thông tin";
   			echo "ERROR :".mysqli_error($conn);
   		}
   		else{
   			if(mysqli_affected_rows($conn) == 0){
            $error = "Thay đổi thất bại, hãy nhập đúng các trường thông tin".mysqli_error($conn);
            }
            else{
               $error = "Thay đổi thành công";
               header("location:index.php?module=common&action=change_profile");
            }
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
 		border: 1px solid black;
 		margin: auto;
 	}
 	form{
 		text-align: center;
 	}
 </style>
 <div class="div_change">
 	<br><br>
 	<div class="div_form">
 		<h4 style="color: red;text-align: center;">
 			<?php 
 			echo $error;
 		 ?>
 		 <?php 
 		 	
 		 		echo $success;
 		 	
 		  ?>
 		</h4>
 		
 		<form method="POST">
 			<label>
            Mật khẩu hiện tại:
            <input type="password" name="pw">     
         </label><br><br>
         <label>
            Mật khẩu mới :
            <input type="password" name="npw">
         </label><br><br>
        
         <br>

 		<button name="btn" type="submit">Thay đổi</button>
 	</form>	
<?php 
   echo $password1;
 ?>
 	</div>
 </div>
 <?php 
	$tittle = "Thay đổi thông tin";
	require_once("layout/footer.php");
 ?>