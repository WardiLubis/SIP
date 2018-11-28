<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Sistem Informasi Peternakan Malang</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/user.css">
    <link rel="icon SIP" type="image/png" href="assets/img/logotitle.png">
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
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="#"><i class="glyphicon glyphicon-phone"></i>SISTEM INFORMASI PETERNAKAN</a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active" role="presentation"><a href="halamanLapak.php">Temukan Ternak</a></li>
                    <li role="presentation"><a href="#bottom" class="page-scroll">Kontak</a></li>
                    <li role="presentation"><a href="profile.php"><strong><?php echo $_SESSION['username'];?></strong></a></li>
                    <li role="presentation"><a href="index.html" class="page-scroll">Log Out</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="jumbotron hero">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-push-7 phone-preview">
                    <div class="iphone-mockup"><img src="assets/img/iphonesip.png" class="device">
                    </div>
                </div>
                <div class="col-md-6 col-md-pull-3 get-it">
                    <h1>SISTEM INFORMASI PETERNAKAN</h1>
                    <p class="teks01">Situs pusat informasi peternakan di kota malang raya.</p>
                    <p><a class="btn btn-success btn-lg" role="button" href="halamanLapak.php">Temukan ternak</a></p>
                </div>
            </div>
        </div>
    </div>
    <section class="testimonials">
        <h2 class="text-center">Pusatnya informasi peternakan Malang Raya</h2>
        <blockquote>
            <p></p>
            <footer></footer>
        </blockquote>
    </section>
    <!-- Footer -->
<footer class="page-footer font-small blue-grey lighten-5">
    <div style="background-color: #21d192;">
      <div class="container">
        <div class="row py-4 d-flex align-items-center">
            <h6 class="mb-0" >Get connected with us!</h6>
        </div>
      </div>
    </div>
    <div class="row mt-3 dark-grey-text">
        <div class="col-md-3 col-lg-4 col-xl-3 mb-4">
          <h6 class="text-uppercase font-weight-bold">Sistem Informasi Peternakan</h6>
          <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>Jalan Veteran No.8, Ketawanggede, Kecamatan Lowokwaru, Ketawanggede, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145</p>
        </div>
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                <h6 class="text-uppercase font-weight-bold">Useful links</h6>
                <p>
                  <a class="dark-grey-text" href="register.php">Daftar</a>
                </p>
                <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                
        </div>
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                <h6 id="bottom" class="text-uppercase font-weight-bold">Contact</h6>
                <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                  <i class="fa fa-home mr-3"></i> Lowokwaru, Kota Malang, Jawa Timur 65145</p>
                <p>
                  <i class="fa fa-envelope mr-3"></i> saifulwardi@gmail.com</p>
                <p>
                  <i class="fa fa-phone mr-3"></i> 085244886608</p>
                <p>
                  <i class="fa fa-print mr-3"></i> 085244886608</p>
        </div>
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.437184721972!2d112.6124845147792!3d-7.953691594271177!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd600c9c3727a93aa!2sFakultas+Ilmu+Komputer+Universitas+Brawijaya!5e0!3m2!1sid!2sid!4v1540975449558" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
    <div class="footer-copyright text-center text-black-50 py-3">© 2018 Copyright:
      <a class="dark-grey-text" href="index.html"> SIP-malang.com</a>
    </div>
  </footer>
  <!-- Footer -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/pagescroll.js"></script>
</body>
</html>