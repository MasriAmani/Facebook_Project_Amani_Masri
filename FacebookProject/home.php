<!DOCTYPE html>
<html lang="en">

	
<!-- Mirrored from themified.com/friend-finder/newsfeed.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 Sep 2021 13:16:07 GMT -->
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="This is social network html5 template available in themeforest......" />
		<meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
		<meta name="robots" content="index, follow" />
		<title>Home Page</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
         <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Stylesheets
    ================================================= -->
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/ionicons.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link href="css/emoji.css" rel="stylesheet">
	 <link href="css/bootstrap.css" rel="stylesheet" />
 <link href="css/datepicker.css" rel="stylesheet" />
    
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i" rel="stylesheet">
    
    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="images/fav.png"/>
	<link rel="stylesheet" 
          href=
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .input-icons i {
            position: absolute;
			margin-top: 2%;
			margin-left: 2%;
			
        }
          
        .input-icons {
            width: 100%;
            margin-bottom: 10px;
        }
          
        .icon {
            padding: 10px;
            min-width: 40px;
        }
          
        .input-field {
            width: 100%;
            padding: 10px;
            text-align: center;
        }
    </style>
	
	
	
	
	
	</head>
  <body>
	 <?php
session_start();
if(empty($_SESSION["id"])){
	header('location:signup.php');
}
?>
    <!-- Header
    ================================================= -->
		<header id="header">
      <nav class="navbar navbar-default navbar-fixed-top menu">
        <div class="container">

          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
                   </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
  
          
        </div><!-- /.container -->
      </nav>
    </header>
    <!--Header End-->

    <div id="page-contents">
    	<div class="container">
    		<div class="row">

          <!-- Newsfeed Common Side Bar Left
          ================================================= -->
    			<div class="col-md-3 static">
            <div class="profile-card">
            	<img src="images/profile.png" alt="user" class="profile-photo" />
            
            </div><!--profile card ends-->
            <ul class="nav-news-feed">
			    <li><i class="icon ion-ios-person" style ="color:blue;"></i><div id ="edit" style="cursor: pointer;">Edit Profile</div></li>
              <li><i class="icon ion-ios-people-outline"></i><div id ="getfrnds" style="cursor: pointer;">Friends List</div></li>
              <li><i class="icon ion-ios-people"></i><div id ="pending" style="cursor: pointer;">Pending Requests</div></li>
              <li><i class="icon ion-ios-person" style ="color:red;"></i></i><div  id ="blocked" style="cursor: pointer;">Blocked Users</div></li>
              <li><i class="icon ion-chatboxes"></i><div id ="notif" style="cursor: pointer;">Notifications</div></li>
              <li><i class="icon ion-ios-person"></i><div><a href="logout.php">Logout</a></div></li>
            
            </ul><!--news-feed links ends-->
         
          </div>
		  
		 
		  <div class="col-md-9">
		  <div style="max-width:400px;margin:auto">
			<div class="input-icons" id="search"style="cursor: pointer;" >
                 <i class="fa fa-search"></i>
                    <input id ="sch" class="input-field" type="text" placeholder="Search...">
					</div>
					
                       </div>
 
           <p id="session">  <?php
                    $x = $_SESSION["id"];
                    echo $x;
					 ?></p>
         <div  class="container-fluid" style ="padding :10%;">
		
		    <div id="editf">
                  <h3 id="head"></h3>
                  
                
                  <form name="edit_form" id='edit_form' class="form-inline">
                    <div class="row mt-3">
                      <div class="form-group col-xs-6">
                        <label for="firstname">First Name</label>
                        <input id="firstname" class="form-control input-group-lg" type="text" name="firstname" title="Enter first name"/>
                      </div>
                      <div class="form-group col-xs-6">
                        <label for="lastname">Last Name</label>
                        <input id="lastname" class="form-control input-group-lg" type="text" name="lastname" title="Enter last name" />
                      </div>
                    </div>
                    <div class="row mt-3">
                       <div class="form-group col-xs-6">
                        <label for="email">Email</label>
                        <input id="email" class="form-control input-group-lg" type="text" name="Email" title="Enter Email"/>
                      </div>
                      <div class="form-group col-xs-6">
                        <label for="password">New Password</label>
                        <input id="password" class="form-control input-group-lg" type="password" name="password" title="Enter password" />
                      </div>
					    
                    </div>
                 
                    <div class="row mt-3">
                      <div class="form-group col-xs-6">
                        <label for="city" >City</label>
                        <input id="city" class="form-control input-group-lg reg_name" type="text" name="city" title="Enter city" placeholder="Your city"/>
                      </div>
                      <div class="form-group col-xs-6">
                        <label for="country">Country</label>
                        <select class="form-control" id="country">
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
					    <div class="row mt-3">
					
                         <label for="gender">Gender</label>
					    <div class="form-group gender col-xs-12 ">
                      <label class="radio-inline">
                        <input type="radio" name="gender" checked value ="Male">Male
                      </label>
                      <label class="radio-inline">
                        <input type="radio" name="gender" value ="Female">Female
                      </label>
                    </div>
                    
                  
					</div>
                  </form>             
                  <button class="btn btn-primary" id="save" style ="margin-top:20px">Save Changes</button>
                </div>
                
        
          <table id ="Table" class="table table-striped">
            <thead id ="Thead">
          
                </thead>
				<tbody id ="Tbody">
				</tbody>
 


</table>

						
                      
					
					
					
					 </div>
                      
            	</div>
            </div>
             
               </div>          
               
            	

            <!-- Post Content
            ================================================= -->
            <div class="post-content">
      
            </div>

            <!-- Post Content
            ================================================= -->
            <div class="post-content">
							
                
                </div>
              </div>
            </div>

       
          

    <!-- Footer
    ================================================= -->
    
            
    
    <!--preloader-->
    <div id="spinner-wrapper">
      <div class="spinner"></div>
    </div>
    
   
    <!-- Scripts
    ================================================= -->
     <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky-kit.min.js"></script>
    <script src="js/jquery.scrollbar.min.js"></script>
    <script src="js/script.js"></script>
	 <script src="https://code.jquery.com/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
	<script>
	 $( document ).ready(function() {
	$('#session').hide();
	var id = $('#session').html();
	
	   
	
	 $("#editf").hide();
	 $("#search").click(search);
	 $("#getfrnds").click(listfriends);
	 $("#pending").click(pending);
	 $("#blocked").click(blockedusers);
	 $("#notif").click(notifs);
	 $("#edit").click(getuserdata);
	 $("#save").click(savechange);
	 
	
	
	function search(){
		searchAPI().then(users => {
			      $("#editf").hide();
			     $("#Tbead").empty();
				$("#Tbody").empty();
			 	var $tr = $("<tr>").append(
					$('<th>').text("Name"),
					$('<th>').text("Gender"),
					$('<th>').text("Address"),
					$('<th>').text("Add"),
					$('<th>').text("Block")).appendTo("#Thead").appendTo("#Table");
			$.each(users, function(index, user){
				var $tr = $("<tr id ='tr_"+user.id+"'>").append(
					$('<td>').text(user.first_name +" " + user.last_name),
					$('<td>').text(user.gender),
					$('<td>').text(user.country+ "," + user.city),
					$('<td>').append("<button class='material-icons add' style='font-size:25px;color:blue' id='"+user.id+"'>person_add</button>"),
					$('<td>').append("<button class='material-icons block' style='font-size:25px;color:red' id='"+user.id+"' >cancel</button>")
				).appendTo("#Tbody").appendTo("#Table");
				$(".material-icons.add").click(function() {
	               	var uid = this.id;
	             	console.log(uid);
		            Add_friend(uid);
	                      });
				$(".material-icons.block").click(function() {
	               	var uid = this.id;
	             	console.log(uid);
		            Block_user(uid);
	                      });		  
						  
			})
			
		});
	}
	
	
	async function searchAPI(){
		var key = $('#sch').val();
		if (key =="") {
		 return ;
		}
		const response = await fetch('http://localhost/FacebookProject/APIS/search.php?id='+id+'&key='+key);
		
		if(!response.ok){
			const message = "ERROR OCCURED";
			throw new Error(message);
		}
		
		const articles = await response.json();
		return articles;
	}
	
	
	async function AddfrndAPI(uid){
		console.log(uid);
		
		const response = await fetch('http://localhost/FacebookProject/APIS/addfriend.php?id='+id+'&uid='+uid);
		
		if(!response.ok){
			const message = "ERROR OCCURED";
			throw new Error(message);
		}
		
	}
	
	
	function Add_friend(uid){
		AddfrndAPI(uid);
		 $("#tr_"+uid).remove();
		 
		
	}
    
	
	async function BlockuserAPI(uid){
		console.log(uid);
		
		const response = await fetch('http://localhost/FacebookProject/APIS/blockuser.php?id='+id+'&uid='+uid);
		
		if(!response.ok){
			const message = "ERROR OCCURED";
			throw new Error(message);
		}
		
	}
	
	
	function Block_user(uid){
		BlockuserAPI(uid);
		 $("#tr_"+uid).remove();
		 
		
	}
	
	
	
		function listfriends(){
		listfriendsAPI().then(users => {
			     $("#editf").hide();
				$("#Tbead").empty();
				$("#Tbody").empty();
			 	var $tr = $("<tr>").append(
					$('<th>').text("Name"),
					$('<th>').text("Gender"),
					$('<th>').text("Address"),
					$('<th>').text("Unfriend"),
					$('<th>').text("Block")).appendTo("#Thead").appendTo("#Table");
			$.each(users, function(index, user){
				var $tr = $("<tr id ='tr_"+user.id+"'>").append(
					$('<td>').text(user.first_name +" " + user.last_name),
					$('<td>').text(user.gender),
					$('<td>').text(user.country+ "," + user.city),
					$('<td>').append("<button class='fa fa-user-times' style='font-size:20px;color:red' id='"+user.id+"'></button>"),
					$('<td>').append("<button class='material-icons block1' style='font-size:20px;color:red' id='"+user.id+"' >cancel</button>")
				).appendTo("#Tbody").appendTo("#Table");
				$(".fa.fa-user-times").click(function() {
	               	var fid = this.id;
		            unfriend(fid);
	                      });
			   $(".material-icons.block1").click(function() {
	               	var fid = this.id;
		            blockfriend(fid);
	                      });
					  
						  
			})
			
		});
	}
	
	
	async function listfriendsAPI(){
		const response = await fetch('http://localhost/FacebookProject/APIS/get_all_friends.php?id='+id);
		
		if(!response.ok){
			const message = "ERROR OCCURED";
			throw new Error(message);
		}
		
		const articles = await response.json();
		return articles;
	}
	
	
	
	async function unfrndAPI(fid){
		console.log(fid);
		
		const response = await fetch('http://localhost/FacebookProject/APIS/unfriend.php?id='+id+'&fid='+fid);
		
		if(!response.ok){
			const message = "ERROR OCCURED";
			throw new Error(message);
		}
		
	}
	
	
	function unfriend(fid){
		unfrndAPI(fid);
		 $("#tr_"+fid).remove();
		 
		
	}
	
	async function blockfrndAPI(fid){
		
		const response = await fetch('http://localhost/FacebookProject/APIS/blockfriend.php?id='+id+'&fid='+fid);
		
		if(!response.ok){
			const message = "ERROR OCCURED";
			throw new Error(message);
		}
		
	}
	
	
	function blockfriend(fid){
		blockfrndAPI(fid);
		 $("#tr_"+fid).remove();
		 
		
	}
	
	
	function pending(){
		pendingAPI().then(users => {
			         $("#editf").hide();
			        $("#Tbead").empty();
					$("#Tbody").empty();
			 	var $tr = $("<tr>").append(
					$('<th>').text("Name"),
					$('<th>').text("Gender"),
					$('<th>').text("Address"),
					$('<th>').text("Accept"),
					$('<th>').text("Decline")).appendTo("#Thead").appendTo("#Table");
			$.each(users, function(index, user){
				var $tr = $("<tr id ='tr_"+user.id+"'>").append(
					$('<td>').text(user.first_name +" " + user.last_name),
					$('<td>').text(user.gender),
					$('<td>').text(user.country+ "," + user.city),
					$('<td>').append("<button class='glyphicon glyphicon-ok' style='font-size:20px;color:blue' id='"+user.id+"'></button>"),
					$('<td>').append("<button class='glyphicon glyphicon-remove' style='font-size:20px;color:grey' id='"+user.id+"' ></button>")
				).appendTo("#Tbody").appendTo("#Table");
				$(".glyphicon.glyphicon-ok").click(function() {
	               	var uid = this.id;
		            accept(uid);
	                      });
			   $(".glyphicon.glyphicon-remove").click(function() {
	               	var uid = this.id;
		              decline(uid);
	                      });
					  
						  
			})
			
		});
	}
	
	
	async function pendingAPI(){
		const response = await fetch('http://localhost/FacebookProject/APIS/pending.php?id='+id);
		
		if(!response.ok){
			const message = "ERROR OCCURED";
			throw new Error(message);
		}
		
		const articles = await response.json();
		return articles;
	}
	
	
	
	async function acceptAPI(uid){
	
		
		const response = await fetch('http://localhost/FacebookProject/APIS/acceptRequest.php?id='+id+'&uid='+uid);
		
		if(!response.ok){
			const message = "ERROR OCCURED";
			throw new Error(message);
		}
		
	}
	
	
	function accept(uid){
		acceptAPI(uid);
		 $("#tr_"+uid).remove();
		 
		
	}
	
	async function declineAPI(uid){
	
		
		const response = await fetch('http://localhost/FacebookProject/APIS/declineRequest.php?id='+id+'&uid='+uid);
		
		if(!response.ok){
			const message = "ERROR OCCURED";
			throw new Error(message);
		}
		
	}
	
	
	function decline(uid){
		declineAPI(uid);
		 $("#tr_"+uid).remove();
		 
		
	}
	
	function blockedusers(){
		blockedusersAPI().then(users => {
			 $("#editf").hide();
			$("#Tbead").empty();
			$("#Tbody").empty();
			var $tr = $("<tr>").append(
					$('<th>').text("Name"),
					$('<th>').text("Gender"),
					$('<th>').text("Address"),
					$('<th>').text("Unblock")).appendTo("#Thead").appendTo("#Table");
			$.each(users, function(index, user){
				var $tr = $("<tr id ='tr_"+user.id+"'>").append(
					$('<td>').text(user.first_name +" " + user.last_name),
					$('<td>').text(user.gender),
					$('<td>').text(user.country+ "," + user.city),
					$('<td>').append("<button class='material-icons' style='font-size:25px;color:green' id='"+user.id+"'>check_box</button>")
					).appendTo("#Tbody").appendTo("#Table");
				$(".material-icons").click(function() {
	               	var uid = this.id;
		            unblock(uid);
	                      }); 
			})
			
		});
	
	}
	
	
	async function blockedusersAPI(){
		const response = await fetch('http://localhost/FacebookProject/APIS/list_of_blocked.php?id='+id);
		
		if(!response.ok){
			const message = "ERROR OCCURED";
			throw new Error(message);
		}
		
		const articles = await response.json();
		return articles;
	}
	
	 async function unblockAPI(uid){
	
		
		const response = await fetch('http://localhost/FacebookProject/APIS/unblock.php?id='+id+'&uid='+uid);
		
		if(!response.ok){
			const message = "ERROR OCCURED";
			throw new Error(message);
		}
		
	}
	
	
	function unblock(uid){
		unblockAPI(uid);
		 $("#tr_"+uid).remove();
	
	}
	
	
	function notifs(){
		notifsAPI().then(users => {
			 $("#editf").hide();
			$("#Tbead").empty();
			$("#Tbody").empty();
			$.each(users, function(index, user){
				var $tr = $("<tr id ='tr_"+user.id+"'>").append(
					$('<td>').text(user.message),
					).appendTo("#Tbody").appendTo("#Table");
				
						  
			})
			
		});
	}
	
	
	async function notifsAPI(){
	
		const response = await fetch('http://localhost/FacebookProject/APIS/notifications.php?id='+id);
		
		if(!response.ok){
			const message = "ERROR OCCURED";
			throw new Error(message);
		}
		
		const articles = await response.json();
		return articles;
	}
	
	
	
	
	
	function getuserdata(){
		getuserdataAPI().then(user => {
			 $("#editf").show();
			$("#Tbody").empty();
			$.each(user, function(index, u){
					$('#firstname').val(u.first_name);
					$('#lastname').val(u.last_name);
					$('#email').val(u.email).attr("disabled", true);
					$('#city').val( u.city);
					
			});
			});
			
		
	}
	
	
	async function getuserdataAPI(){
		
		const response = await fetch('http://localhost/FacebookProject/APIS/getuserdata.php?id='+id);
		
		if(!response.ok){
			const message = "ERROR OCCURED";
			throw new Error(message);
		}
		
		const articles = await response.json();
		return articles;
	}
	
	
	
	
	
	
	
	async function savechangeAPI(){
		     var first = $("#firstname").val();
			 var last = $("#lastname").val();
			 var pass = $("#password").val();
			 var gen  =$("input[name='gender']:checked").val();
			 var city = $("#city").val();
			 var country = $("#country").val();
		const response = await fetch("http://localhost/FacebookProject/APIS/savechanges.php", {
			method: 'POST',
			body: new URLSearchParams({
				 "id"  : id,
				 "first_name" : first,
				 "last_name" : last,
				 "pass" : pass,
			     "gen" : gen,
				 "city" : city,
				 "count" : country
			})
		});
		
		if(!response.ok){
			const message = "ERROR OCCURED";
			throw new Error(message);
		}
		
		
	}
		
		
		function savechange(){
			
		savechangeAPI()
	}
	
		
	
	
	
	
	
	
	
	
	
	
	
	
	
		
	
	});
	
	
	</script>
  </body>

<!-- Mirrored from themified.com/friend-finder/newsfeed.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 Sep 2021 13:16:11 GMT -->
</html>
