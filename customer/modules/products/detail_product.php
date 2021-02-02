<?php 
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$sql = "SELECT * FROM product WHERE id ='$id'";
		$result = mysqli_query($conn,$sql);
		if ($result == false) {
			echo "ERROR :".mysqli_error($conn);
		}
		else{
		$row = mysqli_fetch_assoc($result);
		$name = $row['name'];
		$price = $row['price'];
		$color = $row['color'];
		$status = $row['status'];
		// $url = $row['image_product'];
		$description = $row['description'];
		$year = $row['year_manufacturing'];
		$type = $row['id_type'];
		$size = $row['id_size'];
		$trademark = $row['id_trademark'];
		
		}
	}
	
 ?>
<?php 
	require_once("layout/header.php");
 ?>
 <style type="text/css">

 	.div_detail{
 		width: 1100px;
 		height: 80%;
 		color: black;
 		margin: auto;
 		background: #DADDDE;
 		margin-top: 50px;
 		border-radius: 15px;
 	}
 	img{
 		width: 50px;
 		height: 50px;
 	}
 	.img_avatar{
 		padding-left: 50px;
 		padding-top: 50px;
 	}
 	.colum{
 		width: 100px;
 		height: 100px;
 	}
 	.avatar_view{
 		width: 380px;
 		height: 370px;
 		max-width: 380px;
 		margin-left: 40px;
 		max-height: 370px;
 	}
 	.container{
 		padding-top: 50px;

 		padding-left: 30px;
 	}
 	.row{
 		padding-top: 20px;
 		padding-left: 50px;
 	}
 	.left{
 		width: 49%;
 		height: 100%;
 		background: /*#E3E3E3*/;
 		float: left;
 		border-right: 5px double black;
 	}
 	.right{
 		width: 50%;
 		height: 100%;
 		/*background: pink;*/
 		float: left;
 	}
 	label{
 		padding-left: 50px;
 	}
 	.btn_add{
 		padding:20px 50px 20px 50px;border: 0px;background: #1CA9FA;margin-left: 100px;
 		font-size: 15px;
 		display: block;
 	}
 	.btn_over{
 		padding:20px 50px 20px 50px;border: 0px;background: #A56767;margin-left: 100px;
 		color: black;
 	}
 	.btn_comming{
 		padding:20px 50px 20px 50px;border: 0px;background: #05D2CB;margin-left: 100px;
 		color: black;
 	}
 	.btn_not{
 		padding:20px 50px 20px 50px;border: 0px;background: #FFFFFF;margin-left: 100px;
 		color: black;
 	}
 	.a_cart{
 		text-decoration: none;
 		color: black;
 	}
 </style>
 
 <div class="div_detail">
 	<div class="left" >
 		 <div class="container" >
		  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
		  <?php 
		  	$id = $_GET['id'];	
		  		$sql2 = "SELECT url FROM image_product WHERE id = '$id'";
 				$result2 = mysqli_query($conn,$sql2);
 				$row2 = mysqli_fetch_assoc($result2);
 				if (isset($row2['url'])) {
 					$url2= $row2['url'];
 				}


 				$row3 = mysqli_fetch_assoc($result2);
 				if (isset($row3['url'])) {
 					$url3= $row3['url'];
 				}

				$row4 = mysqli_fetch_assoc($result2);
 				if (isset($row4['url'])) {
 					$url4 = $row4['url'];
 				}

 				$row5 = mysqli_fetch_assoc($result2);
 				if (isset($row5['url'])) {
 					$url5= $row5['url'];
 				}
 				
 				$row6 = mysqli_fetch_assoc($result2);
 				if (isset($row6['url'])) {
 					$url6= $row6['url'];
 				}

		   ?>
		  <img class="avatar_view"  src="<?php echo $url2 ?>" id="expandedImg" style="border: 1px solid black;">
		  <div id="imgtext"></div>
		</div>
		
		<div class="row"><h5>Ảnh Chi Tiết Sản Phẩm :</h5>
		  <div style="float: left;margin-left:-10px;padding-top: 0px;border: 1px solid #DEA7A7;" class="column" >
		    <img src="<?php echo $url3; ?>"   style="width:100px;height: 100px;" onclick="myFunction(this);">
		  </div>
		  <div style="float: left;margin-left:10px;padding-top: 0px;border: 1px solid #DEA7A7;" class="column">
		    <img src="<?php echo $url4; ?>"  style="width:100px;height: 100px;" onclick="myFunction(this);">
		  </div>
		  <div style="float: left;margin-left:10px;padding-top: 0px;border: 1px solid #DEA7A7;" class="column">
		    <img src="<?php echo $url5; ?>"  style="width:100px;height: 100px;" onclick="myFunction(this);">
		  </div>
		  <div style="float: left;margin-left:10px;padding-top: 0px;border: 1px solid #DEA7A7;" class="column">
		    <img src="<?php echo $url6; ?>"  style="width:100px;height: 100px;" onclick="myFunction(this);">
		  </div>
		 
		</div>
 	</div>
 	<div class="right">

 		<h2 style="text-align: center;"> <?php echo $name; ?> </h2>
 		<label>
 			Giá :
 			<?php 
 				echo "<span>$price</span>"."  VND";
 			 ?>
 		</label>
 		<br><br>
 		<label>
 			Tình Trạng :
 			<span style="font-weight: bolder;">
 				<?php if($status == 1) echo "Còn Hàng";
 						if($status == 0) echo "Hết Hàng";
 						if($status == 2) echo "Hàng Sắp Về";
 						if($status == -1) echo "Không Kinh Doanh"; ?>
 			</span>
 			<!-- <select readonly style="width: 100px;">
 				<?php 
 					echo "<option value='$status'>";
 						if($status == 1) echo "Còn Hàng";
 						if($status == 0) echo "Hết Hàng";
 						if($status == 2) echo "Hàng Sắp Về";
 						if($status == -1) echo "Hết Hàng";
 					echo "</option>";
 				 ?>
 			</select> -->
 			
 		</label>
 		<br><br>
 		<form method="POST">
 		<label>
 			Size :
 		</label>
 		<br><br>
 			<?php 
 				if ($status == 1) {
 					
 					echo "<button class='btn_add'  type='submit' name='btn_add_cart'>";
 					echo "<a class='a_cart' href=index.php?module=invoice&action=cart&id=$id>Thêm vào giỏ hàng";
 					echo "</a>";
 					echo "</button>";
 					// ;
 				}
 				if ($status == 0) {
 					echo "<button class='btn_over' disabled type='submit' name='btn_add_cart2'>Hết Hàng</button>";
 				}
 				if ($status == 2) {
 					echo "<button class='btn_comming'  type='submit' name='btn_add_cart3'>Đặt Hàng</button>";
 				}
 				if ($status == -1) {
 					echo "<button class='btn_not'  type='submit' name='btn_add_cart4'>Không kinh doanh</button>";
 				}
 			 ?>
 		</form>
 		<h2 style="margin-left: 20px;">Mô tả :</h2>
 		<label>	Màu :
 			<span style="padding-left: 80px;">
 			
 			<?php 
 				$arrColor =array(0=>"Đen",1=>"Xanh Dương",2=>"Đỏ",3=>"Vàng",4=>"Nâu",5=>"Cam",6=>"Xanh Lá Cây",7=>"Trắng",8=>"Tím",9=>"Bạc");
 				$color = $row['color'];
 				echo $arrColor[$color];
 			 ?>
 			</Span>
 			
 		</label>
 		<br><br>
 		<label>
 			Loại :
 			<span style="padding-left: 80px;">

 			<?php 
 				$sql2 = "SELECT * FROM type WHERE id = '$type'";
 				$result2=mysqli_query($conn,$sql2);
 				$row2 = mysqli_fetch_assoc($result2);
 				echo $row2['name_type'];
 			 ?>
 			</Span>
 		</label>
 		<br><br>
 		<label>
 			Năm SX :
 			<span style="padding-left: 52px;">

 			<input type="text" name="year" value="<?php echo $year ?>" readonly style="text-align: center;border: 0px;background: #E6E6E6;border-radius: 5px 10px;padding-left: 10px;padding-right: 10px;padding-top: 10px;padding-bottom: 10px;font-weight: bolder;" size="5">
 			</Span>
 		</label>
 		<br><br>
 		<label>
 			
 			<?php 
 			if ($trademark != 17) {
 				$sql3 = "SELECT * FROM trademark WHERE id = '$trademark'";
 				$result3=mysqli_query($conn,$sql3);
 				$row3 = mysqli_fetch_assoc($result3);
 				$trademarkq =  $row3['name_trademark'];
 				echo "Thương Hiệu : <span style='padding-left: 20px;'>";
 				echo $trademarkq;
 			}
 				

 			 ?>
 			 </Span>
 		</label>
 		<br><br>
 		<label>
 			Chi Tiết :
 			<span style="position: absolute;left: 920px;">
 				
 			<?php 
 				echo $description;
 			 ?>
 			 
 			</span>
 		</label>
 		<br><br>
 		
 	</div>
 	
 </div>
 <script>
function myFunction(imgs) {
  var expandImg = document.getElementById("expandedImg");
  var imgText = document.getElementById("imgtext");
  expandImg.src = imgs.src;
  imgText.innerHTML = imgs.alt;
  expandImg.parentElement.style.display = "block";
}
</script>
 <?php 
	require_once("layout/footer.php");
 ?>