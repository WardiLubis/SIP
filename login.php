<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="in">
<head>
	<title>Login SIP</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style>
	::-webkit-scrollbar {
    width: 10px;
}

::-webkit-scrollbar-track {
    background: #f1f1f1; 
}
 
::-webkit-scrollbar-thumb {
    background: #8ee2f1; 
}

::-webkit-scrollbar-thumb:hover {
    background: #8ee2f1; 
}
</style>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-85 p-b-20">
            <form method="post" action="login.php">
    <?php include('errors.php'); ?>
    <span class="login100-form-title p-b-70">
            Selamat Datang
          </span>
          <span class="login100-form-avatar">
            <a href="index.html">
              <img src="images/logoSIP.jpg" alt="Sistem Informasi Peternakan"></a>
          </span>
          <br>
          <span class="login100-form-SIP">
            SISTEM INFORMASI PETERNAKAN
          </span>

          <div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Enter username">
            <input class="input100" type="text" name="username">
            <span class="focus-input100" data-placeholder="Username"></span>
          </div>

          <div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
            <input class="input100" type="password" name="password">
            <span class="focus-input100" data-placeholder="Password"></span>
          </div>

          <div class="container-login100-form-btn">
            <button class="login100-form-btn" type="submit" name="login_user" href="index.php">
              Login
            </button>
          </div>

          <ul class="login-more p-t-190">
            <li class="m-b-8">
              <span class="txt1">
                Lupa
              </span>

              <a href="#" class="txt2">
                Username / Password?
              </a>
            </li>

            <li>
              <span class="txt1">
                Belum punya akun?
              </span>

              <a href="register.php" class="txt2">
                Daftar
              </a>
            </li>
          </ul>
          
  </form>
			</div>
		</div>
	</div>
	
	<div id="dropDownSelect1"></div>	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script src="js/main.js"></script>

</body>
</html>