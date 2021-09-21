<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from themified.com/friend-finder/index-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 Sep 2021 13:16:07 GMT -->
<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="This is social network html5 template available in themeforest......" />
		<meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
		<meta name="robots" content="index, follow" />
		<title>Sign Up</title>

    <!-- Stylesheets
    ================================================= -->
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/ionicons.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i" rel="stylesheet">
    
    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="images/fav.png"/>
	</head>
	<body>
	 <?php
session_start();
?>

    <!-- Header
    ================================================= -->
		<header id="header-inverse">
      <nav class="navbar navbar-default navbar-fixed-top menu">
        <div class="container">

          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
        
          </div>
            
           
          </div>
        
      </nav>
    </header>
    <!--Header End-->
    
    <!-- Landing Page Contents
    ================================================= -->
    <div id="lp-register">
    	<div class="container wrapper">
        <div class="row">
        	<div class="col-sm-5">
            <div class="intro-texts">
            	<h1 class="text-white">Make Cool Friends !!!</h1>
            	<p>With over half of the world’s population using social media, platforms like Facebook, Instagram or Twitter.<br>Friend Finder is a social network that can be used to connect with people and meet your old friends  <br> Join Now !!</p>
                </div>
          </div>
        	<div class="col-sm-6 col-sm-offset-1">
            <div class="reg-form-container"> 
            
              <!-- Register/Login Tabs-->
              <div class="reg-options">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#register" data-toggle="tab">Register</a></li>
                </ul><!--Tabs End-->
              </div>
              
              <!--Registration Form Contents-->
              <div class="tab-content">
                <div class="tab-pane active" id="register">
                  <h3>Register Now !!!</h3>
                  <p class="text-muted">Be cool and join today. Meet millions</p>
                  
                  <!--Register Form-->
                  <form name="registration_form" id='registration_form' class="form-inline" action="signup1.php" method ="Post">
                    <div class="row">
                      <div class="form-group col-xs-6">
                        <label for="firstname" class="sr-only">First Name</label>
                        <input id="firstname" class="form-control input-group-lg" type="text" name="firstname" title="Enter first name" placeholder="First name"/>
                      </div>
                      <div class="form-group col-xs-6">
                        <label for="lastname" class="sr-only">Last Name</label>
                        <input id="lastname" class="form-control input-group-lg" type="text" name="lastname" title="Enter last name" placeholder="Last name"/>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
					   <p style ="color :red">  <?php
                      if (!empty($_SESSION["flash"])){
                     $x = $_SESSION["flash"];
                     echo $x;
					 $_SESSION["flash"]="";} 
                       ?></p>
                        <label for="email" class="sr-only">Email</label>
                        <input id="email" class="form-control input-group-lg" type="text" name="Email" title="Enter Email" placeholder="Your Email"/>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="password" class="sr-only">Password</label>
                        <input id="password" class="form-control input-group-lg" type="password" name="password" title="Enter password" placeholder="Password"/>
                      </div>
                    </div>
					  <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="confpassword" class="sr-only">Confirm Password</label>
                        <input id="confpassword" class="form-control input-group-lg" type="password" name="confpassword" title="Enter password" placeholder="Confirm Password"/>
                      </div>
                    </div>
                    <div class="form-group gender">
                      <label class="radio-inline">
                        <input type="radio" name="gender" value ="1" checked>Male
                      </label>
                      <label class="radio-inline">
                        <input type="radio" name="gender" value="0">Female
                      </label>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-6">
                        <label for="city" class="sr-only">City</label>
                        <input id="city" class="form-control input-group-lg reg_name" type="text" name="city" title="Enter city" placeholder="Your city"/>
                      </div>
                      <div class="form-group col-xs-6">
                        <label for="country" class="sr-only"></label>
                        <select class="form-control" id="country" name ="country">
                          <option value="country" disabled selected>Country</option>
                          <option value="BRA">Brazil</option>
                          <option value="CAN">Canada</option>
                          <option value="COL">Colombia</option>
                          <option value="EGY">Egypt</option>
                          <option value="DEU">Germany</option>
                          <option value="ITA">Italy</option>
                          <option value="JPN">Japan</option>
                          <option value="JOR">Jordan</option>
                          <option value="KWT">Kuwait</option>
                          <option value="LBN">Lebanon</option>
                          <option value="ESP">Spain</option>
                          <option value="SWE">Sweden</option>
                          <option value="CHE">Switzerland</option>
                          <option value="SYR">Syrian Arab Republic</option>
                          <option value="THA">Thailand</option>
                          <option value="TUN">Tunisia</option>
                          <option value="TUR">Turkey</option>
                          <option value="UKR">Ukraine</option>
                          <option value="ARE">United Arab Emirates</option>
                          <option value="GBR">United Kingdom</option>
                          <option value="USA">United States</option>
                          <option value="YEM">Yemen</option>
                        </select>
                      </div>
                    </div>
					  <button class="btn btn-primary" type ="submit">Register Now</button>
                  </form><!--Register Now Form Ends-->
                  <p><a href="login.php">Already have an account?</a></p>
                
                </div><!--Registration Form Contents Ends-->
                
				
			
				
				
		
              
              </div>
            </div>
          </div>
        </div>
       
      </div>
    </div>

    <!--preloader-->
    <div id="spinner-wrapper">
      <div class="spinner"></div>
    </div>
    
  
    <!-- Scripts
    ================================================= -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.appear.min.js"></script>
		<script src="js/jquery.incremental-counter.js"></script>
    <script src="js/script.js"></script>
    
	</body>

<!-- Mirrored from themified.com/friend-finder/index-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 Sep 2021 13:16:07 GMT -->
</html>
