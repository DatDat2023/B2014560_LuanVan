<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="./resource/login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./resource/login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./resource/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./resource/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./resource/login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="./resource/login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./resource/login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./resource/login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="./resource/login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./resource/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="./resource/login/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter" style="background-image: url(t.jfif)">
		<div class="container-login100" >
			<div class="wrap-login100 p-t-50 p-b-90" style="background-image: url(tk.jpg)">
				<form class="login100-form validate-form flex-sb flex-w" method="post">
					<span class="login100-form-title p-b-51" style="font-family:times;color:white">
					ⓁⓄⒼⒾⓃ
					</span>
					<p style="color:red;">
					<?php
						echo $message??"";
					?>
					</p>
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Username is required"  style="width:350px; margin-left:20px;">
						<input class="input100" type="text" name="username" placeholder="Tài khoản">
						<span class="focus-input100"></span>
					</div>
					
					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required"  style="width:350px; margin-left:20px;">
						<input class="input100" type="password" name="pass" placeholder="Mật khẩu">
						<span class="focus-input100"></span>
					</div>
					<div class="container-login100-form-btn m-t-17"  style="width:350px; margin-left:20px;">
						<button class="login100-form-btn">
							Đăng nhập
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="./resource/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="./resource/login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="./resource/login/vendor/bootstrap/js/popper.js"></script>
	<script src="./resource/login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="./resource/login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="./resource/login/vendor/daterangepicker/moment.min.js"></script>
	<script src="./resource/login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="./resource/login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="./resource/login/js/main.js"></script>

</body>
</html>