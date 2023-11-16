<?php
    require "../../model/pdo.php";
  
	if(isset($_POST['guiemail'])&&($_POST['guiemail'])) {   
	   $error = [];
	   
	   if(empty($_POST['email'])){
		   $error['email'] = "Bạn cần nhập email";
	   }else{
		   $email=$_POST['email'];
	   }
	   
	   if(!empty($error)){

	   }else{
		   $sql = "select * from nguoidung WHERE `email`='".$email."' ";
		   $checkEmail=pdo_query_one($sql);
	   }
	  
	 
	   if(is_array($checkEmail)){
			$thongbao = "<p>Mật khẩu của bạn là ".$checkEmail['pass']." </p><p>Đăng nhập thôi nào!!!</p>";
	   }else{
		   $thongbao = "Tài khoản không tồn tại";
	   }
	  
   }    
		
    
 
  
?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Quên mật khẩu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">
  	<style>
		.thongbao{
			color: red;
		}
	</style>
	</head>
	<body class="img js-fullheight" style="background-image: url(images/bg.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Quên mật khẩu</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	
                  <?php

                  ?>
		      	<form action="" method="post">
                    
                    <div class="form-group">
                    <input id="password-field" type="text" class="form-control" placeholder="Email" name="email" value="<?php if(isset($email)) echo $email?>">   
					<b><p class ="thongbao"><?php if(isset($error['email'])) echo $error['email']?></p></b>  
                    </div>

                    <div class="form-group">
                        <input type="submit" name="guiemail" id="" value="Gửi email" class="form-control btn btn-primary submit px-3">
						
                    </div>
                    <div class="form-group d-md-flex">
                        <div class="w-50">
                            <label class="checkbox-wrap checkbox-primary">Remember Me
                                <input type="checkbox" checked>
                                <span class="checkmark"></span>
                            </label>
                        </div>                                   
                    </div>
	          </form>

			  <div>
				<p class="mb-0">Don't have an account? <a href="login.php" class="text-white-50 fw-bold">Sign In</a></p>
			  </div>
  				<b><p class="thongbao">
                <?php
                  if(isset($thongbao)&&($thongbao!="")){
                    echo $thongbao;
                  }
                ?>
                </p></b>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

