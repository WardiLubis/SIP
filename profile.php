<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="profilejs.js"></script>
  
</head>

<body>
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
<hr>
<div class="container bootstrap snippet">
    <div class="row">
  		<div class="col-sm-10"><h1>Profile</h1></div>
    	<div class="col-sm-2"><a href="index.php" class="pull-right"><img title="profile image" class="img-circle img-responsive" src="assets/img/logolipp.png"></a></div>
    </div>
    <div class="row">
  		<div class="col-sm-3"><!--left col-->
      <div class="text-center">
        <img src="assets/img/logo.png" class="avatar img-circle img-thumbnail" alt="avatar">
      </div><br>

               
        </div><!--/col-3-->
    	<div class="col-sm-9">
             
          <div class="tab-content">
            <div class="tab-pane active" id="home">
                <hr>
                  <form class="form" action="##" method="post" id="registrationForm">
                      <div class="form-group">
                          <div class="col-xs-6">
                              <label for="first_name"><h4>Username</h4></label>
                              <p style="font-size:15px;"><?php echo $_SESSION['username'];?></p>
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="col-xs-6">
                              <label for="phone"><h4>Nomor Telepon</h4></label>
                              <p style="font-size:15px;">
                              <?php 
                                if($_SESSION['noHP'] == null){
                                    echo "nomor telepon belum di isi";
                                }else{
                                    echo $_SESSION['noHP'];
                                }
                              ?></p>
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="col-xs-6">
                              <label for="email"><h4>Email</h4></label>
                              <p style="font-size:15px; "><?php echo $_SESSION['email'];?></p>
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="col-xs-6">
                              <label for="email"><h4>Alamat</h4></label>
                              <p style="font-size:15px;">
                              <?php 
                                if($_SESSION['alamat'] == null){
                                    echo "alamat belum diisi";
                                }else{
                                    echo $_SESSION['alamat'];
                                }
                              ?></p>
                          </div>
                      </div>
                      <div class="form-group">
                           <div class="col-xs-12"  style="margin-top : 50px;">
                              	<button class="btn btn-lg btn-success" type="submit"> Ubah Profile</button>
                                <button class="btn btn-lg btn-success" style="background-color: #4286f4;" type="submit"> Buat Ternak</button>
                            </div>
                      </div>
              	</form>
          </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->
</body>