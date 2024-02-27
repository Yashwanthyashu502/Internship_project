<?php
session_start();
error_reporting(0);
include('dbconnection.php');

if(isset($_POST['login']))
  {
    $user=$_POST['username'];
    $password=$_POST['password'];
	$vercode=$_POST['vercode'];
	$captchacode = $_SESSION["vercode"];
    $query=mysqli_query($con,"select id from tbluser where username='$user' && password='$password' ");
    $ret=mysqli_fetch_array($query);
	if (strcmp($captchacode, $vercode) !== 0) {
		
			$msg ="Invalid Captcha!!";
		}else {	
    if($ret>0){
      $_SESSION['ptmsaid']=$ret['id'];
     header('location:home.php');
    }
    else{
     $msg = "Invalid Detail.";
    }
  }
  }
  ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MCODS</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="admin/assets/img/favicon.png" rel="icon">
  <link href="admin/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="vendor/style.css" rel="stylesheet">
</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.php" class="d-flex align-items-center w-auto">
                  <div class="row">
                    <div class="col-12">
                      <img src="assets/img/heart-logo.png" alt="" width="550">
                    </div>
                    <div class="col-12 logo d-flex justify-content-center">
                      <span class="d-none d-lg-block" style="margin: 0 0 0 20px;">MCODS LOGIN</span>
                    </div>
                  </div>
                  
                  
                </a>
              </div><!-- End Logo -->

              <div class="card mb-1">
                <div class="card-body">
                  <div class="">
                    <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                  </div>
				
                  <form class="row g-3" action="#" method="post" name="login">
				  <p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Username</label>
                      <div class="input-group">
                        <input type="text" name="username" class="form-control" id="username" required>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                    </div>

                    <div class="col-12">
				   <input type="text" class="form-control" placeholder="Captcha"  name="vercode" maxlength="5" autocomplete="off" required> 
                      
                    </div>
					<div class="">
                            <img src="captcha.php" name="captchacode" style="width:30%; border-radius: .25rem;font-size: 30px; ">
							<a href="index.php" style="color:black;">Refresh Captcha</a>
                        </div>
                    <div class="col-12">
                      <!--<a href="queue_system.html" class="btn btn-primary w-100">Login</a>-->
					  <button id="submit" type="submit" name="login" class="btn btn-primary w-100">Login <i class="ti-arrow-right"></i></button>
                    </div>
                    <!--<div class="col-12 d-flex justify-content-center">
                      <p class="small mb-0">Don't have account? <a href="#">Create an account</a></p>
                    </div>-->
                  </form>

                </div>
              </div>

             
            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="vendor/apexcharts/apexcharts.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/chart.js/chart.umd.js"></script>
  <script src="vendor/echarts/echarts.min.js"></script>
  <script src="vendor/quill/quill.min.js"></script>
  <script src="vendor/simple-datatables/simple-datatables.js"></script>
  <script src="vendor/tinymce/tinymce.min.js"></script>
  <script src="vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="vendor/js/main.js"></script>

</body>

</html>