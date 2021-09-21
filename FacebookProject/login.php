<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from themified.com/friend-finder/index-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 Sep 2021 13:16:07 GMT -->
<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="This is social network html5 template available in themeforest......" />
		<meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
		<meta name="robots" content="index, follow" />
		<title>Login </title>

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
                  <li class="active"><a href="#login" data-toggle="tab">Login</a></li>
                </ul><!--Tabs End-->
              </div>
              
              <!--Registration Form Contents-->
              <div class="tab-content">
       
                <!--Login-->
                <div id="login">
                  <h3>Login</h3>
                  <p class="text-muted">Log into your account</p>
                  
                  <!--Login Form-->
                  <form name="Login_form" id='Login_form' action ="login1.php" method="Post">
                     <div class="row">
                      <div class="form-group col-xs-12">
					      <p style ="color :red">  <?php
                        if (!empty($_SESSION["flash"])){
                        $x = $_SESSION["flash"];
                       echo $x;
					    $_SESSION["flash"]="";} 
               
                           ?></p>
                        <label for="my-email" class="sr-only">Email</label>
                        <input id="my-email" class="form-control input-group-lg" type="text" name="Email1" title="Enter Email" placeholder="Your Email"/>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="my-password" class="sr-only">Password</label>
                        <input id="my-password" class="form-control input-group-lg" type="password" name="password1" title="Enter password" placeholder="Password"/>
                      </div>
                    </div>
					    <button class="btn btn-primary" type="submit">Login</button>
                  </form><!--Login Form Ends--> 
				  
				    <p><a href="signup.php">Dont have an account yet?</a></p>
              
                </div>
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
