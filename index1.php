<?php
session_start();

include('dbconnection.php');
if(isset($_POST['submit']))
  {
    $ddate=$_POST['ddate'];
    $pname=$_POST['pname'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
	$occupation=$_POST['occupation'];
	$address=$_POST['address'];
    $tnoyrs=$_POST['tnoyrs'];
	$tfreq=$_POST['tfreq'];
	$anoyrs=$_POST['anoyrs'];
	$afreq=$_POST['afreq'];
	$oralhygine=$_POST['oralhygine'];
	$diet=$_POST['diet'];
	$chiefcomplaint=$_POST['chiefcomplaint'];
	$illnessorigin=$_POST['illnessorigin'];
	$illnessduration=$_POST['illnessduration'];
	$eatingproblems=$_POST['eatingproblems'];
	$typeofpain=$_POST['typeofpain'];
	$painrelief=$_POST['painrelief'];
	$swelling=$_POST['swelling'];
	$feverbodypain=$_POST['feverbodypain'];
	$sleepproblems=$_POST['sleepproblems'];

     
    $query=mysqli_query($con, "insert into  tblpatientdetails(ddate,pname,age,gender,mobile,email,occupation,address,tobaccoNoYrs,tobaccoFreq,alchoholNoYrs,alchoholFreq,oralhygine,diet,chiefcomplaint,illnessorigin,illnessduration,problemswhileeat,typeofpain,painreliefmethods,swelling,feverbodypain,sleepproblems) value('$ddate','$pname','$age','$gender','$mobile','$email','$occupation','$address','$tnoyrs','$tfreq','$anoyrs','$afreq','$oralhygine','$diet','$chiefcomplaint','$illnessorigin','$illnessduration','$eatingproblems','$typeofpain','$painrelief','$swelling','$feverbodypain','$sleepproblems')");
    if ($query) {
echo "<script>alert('Details has been added successfully.');</script>";

  }
  else
    {
      $msg="Something Went Wrong. Please try again";
    }
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons    <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <link rel="icon" type="image/x-icon" href="favicon.png">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <img src="logo.jpeg" alt="logo">
        <span class="d-none d-lg-block">MCODS AI CARE</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

   

    

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.html">
          <i class="bi bi-grid"></i>
          <span>Home</span>
        </a>
      </li><!-- End Dashboard Nav -->

     <li class="nav-item">
          
      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#pd">
          <span >Personal Details</span>
        </a>
      </li><!-- Personal Details -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="#ph">
          <span>Personal History</span>
        </a>
      </li><!-- Personal History -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="#bh">
          <span>Brushing habit</span>
        </a>
      </li><!-- Brushing habit-->

      <li class="nav-item">
        <a class="nav-link collapsed" href="#c">
          <span>Complaint</span>
        </a>
      </li><!-- Complaint -->
    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Home</h1>
      
    </div><!-- End Page Title -->

	<section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h2 class="card-title">OUT PATIENT RECORD</h2>

              <!-- General Form Elements -->
              <form method="post">
                <div class="row mb-3">
                  <label for="inputDate"  class="col-sm-2 col-form-label">Date</label>
                  <div class="col-sm-10">
                    <input type="date" name="ddate" id="ddate" class="form-control">
                  </div>
                </div>
                <hr>
                <h5 class="card-title" id="pd">PERSONAL DETAILS</h5>
            <div class="row mb-3">
                  <label for="inputName"  class="col-sm-2 col-form-label">Name</label>
                  <div class="col-sm-10">
                    <input type="text" name="pname" id="pname" class="form-control" required placeholder="Enter full name">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputAge"  class="col-sm-2 col-form-label">Age</label>
                  <div class="col-sm-10">
                    <input type="number" name="age" id="age" class="form-control" required placeholder="Enter age">
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Gender</label>
                  <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example"name="gender" id="gender">
                      <option selected>Select gender</option>
                      <option value="male">Male</option>
                      <option value="female">Female</option>
                      <option value="other">Other</option>
                    </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Mobile number</label>
                  <div class="col-sm-10">
                    <input type="number" name="mobile" id="mobile" class="form-control"  required placeholder="Enter mobile number">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" name="email" id="email" class="form-control"  required placeholder="Enter email">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputOccupation" class="col-sm-2 col-form-label">Occuapation</label>
                  <div class="col-sm-10">
                    <input type="occupation" name="occupation" id="occupation" class="form-control"  required placeholder="Enter occupation">
                  </div>
                </div>
               <div class="row mb-3">
                  <label for="inputAddress" class="col-sm-2 col-form-label">Address</label>
                  <div class="col-sm-10">
                    <textarea name="address" id="address" class="form-control" required placeholder="Enter address" style="height: 100px"></textarea>
                  </div>
                </div>
                <hr>
                <h2 class="card-title" id="ph">PERSONAL HISTORY</h2>
                <h5 class="card-title" >Tobacco abuse</h5>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Number of years</label>
                  <div class="col-sm-10">
                    <input type="number" name="tnoyrs" id="tnoyrs" class="form-control"  required placeholder="Enter number of years">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Frequency (per day)</label>
                  <div class="col-sm-10">
                    <input type="number" name="tfreq" id="tfreq" class="form-control"  required placeholder="Frequency">
                  </div>
                </div>
                <hr>
                <h5 class="card-title" >Alcohol abuse</h5>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Number of years</label>
                  <div class="col-sm-10">
                    <input type="number" name="anoyrs" id="anoyrs" class="form-control"  required placeholder="Enter number of years">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Frequency (per day)</label>
                  <div class="col-sm-10">
                    <input type="number" name="afreq" id="afreq" class="form-control"  required placeholder="Frequency">
                  </div>
                </div>
                <hr>
                <h2 class="card-title" id="bh">BRUSHING HABIT</h2>
                <div class="row mb-3">
                  <label for="inputoral" class="col-sm-2 col-form-label">Oral hygiene habit</label>
                  <div class="col-sm-10">
                    <input type="text" name="oralhygine" id="oralhygine" class="form-control" required placeholder="Type" ><br>
                   
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Diet</label>
                  <div class="col-sm-10">
                    <select class="form-select" name="diet" id="diet" aria-label="Default select example">
                      <option selected>Select diet</option>
                      <option value="Vegetarian">Vegetarian</option>
                      <option value="Non-Vegetarian">Non-Vegetarian</option>
                    </select>
                  </div>
                </div>
                  <br><br>
                  <hr>
                  <h2 class="card-title" id="c">COMPLAINT</h2>
                  <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Chief complaint (select one)</label>
                    <div class="col-sm-10">
                      <select class="form-select" name="chiefcomplaint" id="chiefcomplaint" aria-label="Default select example">
					   <option selected>Select your complaint</option>
                        <option value="Pain in the Tooth">Pain in the Tooth</option>
                        <option value="Food lodgement">Food lodgement</option>
                        <option value="Mobile teeth">Mobile teeth</option>
                        <option value="Displaced Teeth">Displaced Teeth</option>
						 <option value="Tooth appears long">Tooth appears long</option>
						 <option value="other">other</option>
                      </select>
                    </div>
                  </div>
                    <div class="row mb-3">
                      <label for="inputorigin" class="col-sm-2 col-form-label">Origin of illness</label>
                      <div class="col-sm-10">
                        <input type="text" name="illnessorigin" id="illnessorigin" class="form-control" required placeholder="How did it start">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="inputName" class="col-sm-2 col-form-label">Duration of illness</label>
                      <div class="col-sm-10">
                        <input type="text" name="illnessduration" id="illnessduration" class="form-control" required placeholder="When did it start">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label class="col-sm-2 col-form-label">Problems while eating</label>
                      <div class="col-sm-10">
                        <select class="form-select" name="eatingproblems" id="eatingproblems" aria-label="Default select example">
                          <option selected>select an option</option>
                          <option value="Increaseswhileeating">Increases while eating</option>
                          <option value="Increasesoneatingandtroublesthepatient">Increases on eating and troubles the patient</option>
                          <option value="Feelsliketakingfoodout">Feels like taking food out</option>
						  <option value="Bleedinggums">Bleeding gums</option>
						  <option value="other">other</option>
                        </select>
                      </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Type of pain</label>
                        <div class="col-sm-10">
                          <select class="form-select" name="typeofpain" id="typeofpain" aria-label="Default select example">
                            <option selected>Select type of pain</option>
                            <option value="SharpPain">Sharp Pain</option>
                            <option value="DullPain">Dull Pain</option>
                            <option value="DullGnawingPain">Dull Gnawing Pain</option>
							<option value="ContinuousPain">Continuous Pain</option>
							<option value="Other">Other</option>
                          </select>
                        </div>
                      </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label">Pain relief methods</label>
                          <div class="col-sm-10">
                            <select class="form-select" name="painrelief" id="painrelief"  aria-label="Default select example">
                              <option selected>Select Pain relief methods</option>
                              <option value="Relievesonitsownandonmedicines">Relieves on its own and on medicines</option>
                              <option value="Relievesonlyonantibiotics">Relieves ony on antibiotics</option>
                              <option value="Feelsgoodafteramouthwash">Feels good after a mouth wash</option>
							  <option value="Other">Other</option>
                            </select>
                          </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Swelling</label>
                            <div class="col-sm-10">
                              <select class="form-select" name="swelling" id="swelling"  aria-label="Default select example">
                                <option selected>Select an option</option>
                                <option value="Swelling">Swelling</option>
                                <option value="NoSwelling">No Swelling</option>
                              </select>
                            </div>
                          </div>
                            <div class="row mb-3">
                              <label class="col-sm-2 col-form-label">Fever and body pain</label>
                              <div class="col-sm-10">
                                <select class="form-select" name="feverbodypain" id="feverbodypain" aria-label="Default select example" >
                                  <option selected >Select an option</option>
                                <option value="FeverandBodypainmaybepresent">Fever and Body pain may be present</option>
                                <option value="Nofeverandnobodypain">No fever and no body pain</option>
                                </select>
                              </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Sleep problems</label>
                                <div class="col-sm-10">
                                  <select class="form-select" name="sleepproblems" id="sleepproblems" aria-label="Default select example">
                                    <option selected>Select an option</option>
                                    <option value="Disturbedsleep">Disturbed sleep</option>
                                    <option value="NoDisturbedsleep">No Disturbed sleep</option>
                                  </select>
                                </div>
                              </div>
                              <hr>
       <div class="row mb-3">
                  
                  <div class="col-sm-6">
                   
					<input type="submit" name="submit" id="submit" value="SAVE" class="btn btn-primary"> 
                  </div>
                  <div class="col-sm-6">
                    <button type="reset" class="btn btn-primary">RESET</button>
                  </div>
                  
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>

        
      </div>
    </section>

  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>