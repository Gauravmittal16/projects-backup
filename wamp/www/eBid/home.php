<?php
if(isset($_GET['error']))
{$che=0;
	$che=$_GET['error'];
	if($che==1)
{
echo "<script type='text/javascript'>alert('Incorrect password! ');</script>";
}
else if($che==2){echo "<script type='text/javascript'>alert('Incorrect username or password! ');</script>";}
else if($che==3){echo "<script type='text/javascript'>alert('Incorrect dealername or password! ');</script>";}
}
?>

<!-- Starting of the website-->
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>eBid.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.css">
   <link rel="stylesheet" href="fontawesome/css/all.css">
  <script src="jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <style>
  .autocomplete {
  position: relative;
  display: inline-block;
}


.autocomplete-items {
  position: absolute;
  border: 1px solid #d4d4d4;
  border-bottom: none;
  border-top: none;
  z-index: 99;
  /*position the autocomplete items to be the same width as the container:*/
  top: 100%;
  left: 0;
  right: 0;
  text-align:left;
  color:black;
}

.autocomplete-items div {
  padding: 10px;
  cursor: pointer;
  background-color: #fff; 
  border-bottom: 1px solid #d4d4d4;  
}

/*when hovering an item:*/
.autocomplete-items div:hover {
  background-color: #e9e9e9; 
}

/*when navigating through the items using the arrow keys:*/
.autocomplete-active {
  background-color: DodgerBlue !important; 
  color: black; 
}
  body {
      font: 400 15px Lato, sans-serif;
      line-height: 1.8;
      color: #818181;
  }
  h2 {
      font-size: 24px;
      text-transform: uppercase;
      color: #303030;
      font-weight: 600;
      margin-bottom: 30px;
  }
  h4 {
      font-size: 19px;
      line-height: 1.375em;
      color: #303030;
      font-weight: 400;
      margin-bottom: 30px;
  }  
  .fab:hover{font-size:60px;
  }
  .jumbotron {
      background-image:url(http://localhost/eBid/images/mybi.jpg);
      color: #fff;
      padding: 100px 25px;
      font-family: Montserrat, sans-serif;
	  height:700px;
  
  }
  .container-fluid {
      padding: 60px 50px;
	  
  }
  .container-fluid-f {
      padding: 60px 50px;
	background-color:black;  
  }
  .bg-grey {
      background-color: #f6f6f6;
  }
  .logo-small {
      font-size: 50px;
  }
  .logo {
      color: black;
      font-size: 200px;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
	  width:300px;
	  height:200px;
  }
  .thumbnail img {
      width: 100%;
      height: 100%;
      margin-bottom: 10px;
  }
  
  
  .carousel-control.right, .carousel-control.left {
      background-image: none;
      color: black;
  }
  .carousel-inner{background-color:white;}
  .carousel-indicators li {
      border-color: black;
  }
  .carousel-indicators li.active {
      background-color: black;
  }
  .item h4 {
      font-size: 19px;
      line-height: 1.375em;
      font-weight: 400;
      font-style: italic;
      margin: 70px 0;
  }
  .item span {
      font-style: normal;
  }
  .panel {
      border: 1px solid #2c3e50; 
      border-radius:0 !important;
      transition: box-shadow 0.5s;
  }
  .panel:hover {
      box-shadow: 8px 10px 45px rgba(0,0,0, .5);
  }
  .panel-footer .btn:hover {
      border: 1px solid #2c3e50;
      background-color: #fff !important;
      color: #2c3e50;
  }
  .panel-heading {
      color: #fff !important;
      background-color: #2c3e50 !important;
      padding: 25px;
      border-bottom: 1px solid transparent;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
  }
  .panel-footer {
      background-color: white !important;
  }
  .panel-footer h3 {
      font-size: 32px;
  }
  .panel-footer h4 {
      color: #aaa;
      font-size: 14px;
  }
  .panel-footer .btn  {
      margin: 15px 0;
      background-color: #3366ff;
      color: #fff;
  }
   
  .navbar {
      margin-bottom: 0;
      background-color: black;
      z-index: 9999;
      border: 0;
      font-size: 12px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 4px;
      border-radius: 0;
      font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color: #3366ff !important;
      background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
  }
  footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
      color: #3366ff;
  }
  .slideanim {visibility:hidden;}
  .slide {
      animation-name: slide;
      -webkit-animation-name: slide;
      animation-duration: 1s;
      -webkit-animation-duration: 1s;
      visibility: visible;
  }

  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
	 
    }
    .btn-lg {
        width: 100%;
        margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
        font-size: 150px;
    }
  }
  .modal-header, .bhb, .close {
      background-color: #5cb85c;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-headerlg, .bh, .close {
      background-color: #3366ff;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">APA.co.in</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#services">SERVICES</a></li>
        <li><a href="#portfolio">CATEGORIES</a></li>
        <li><a href="#pricing">LOGIN/SIGNUP</a></li>
        <li><a href="#contact">CONTACT US</a></li>
		</ul>
    </div>
  </div>
</nav>

   <!-- LOGIN PAGES FOR THE WEBSITE-->
   
   <!-- login page for users -->
  <div class="modal fade" id="login" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-headerlg" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="bh" ><span class="glyphicon glyphicon-lock"></span> Log In</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" action="validation.php?val=1" method="post" onsubmit="return cslgnvalid(event,1);" >
            <div class="form-group">
              
              <input type="text" class="form-control fm1" id="usrname" name="username" placeholder="Username">
            </div>
            <div class="form-group">
              
              <input type="password" class="form-control fm1" id="psw"  name="userpass" placeholder="Password">
            </div>
           
              <button type="submit" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-log-in"></span> Log In</button>
          </form>
        </div>
        <div class="modal-footer">
       <!--   <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>-->
          <p class="pull-left">Don't have account?<a href="#" data-dismiss='modal' data-toggle='modal'  data-target='#Signupusr'>Sign Up</a></p>
          <p>Forgot <a href="#">Password?</a></p>
        </div>
      </div>
      
    </div>
  </div>
     <!-- login page for dealers -->
  <div class="modal fade" id="logindlr" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-headerlg" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="bh" ><span class="glyphicon glyphicon-lock"></span> Log In</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" action="validation.php?val=2" method="post" onsubmit="return cslgnvalid(event,2);" >
            <div class="form-group">
              
              <input type="text" class="form-control fm2" id="usrname" name="dealername" placeholder="Dealer's name">
            </div>
            <div class="form-group">
              
              <input type="password" class="form-control fm2" id="psw"  name="dealerpass" placeholder="Password">
            </div>
            
              <button type="submit" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-log-in"></span> Log In</button>
          </form>
        </div>
        <div class="modal-footer">
       <!--   <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>-->
          <p class="pull-left">Don't have account?<a href="#" data-dismiss='modal' data-toggle='modal'  data-target='#Signup'>Sign Up</a></p>
          <p>Forgot <a href="#">Password?</a></p>
        </div>
      </div>
      
    </div>
  </div>
  
  <!--modal for Admin-->
     
  <div class="modal fade" id="loginadmin" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-headerlg" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="bh" ><span class="glyphicon glyphicon-lock"></span> Log In</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" action="validation.php?val=3" method="post" onsubmit="return cslgnvalid(event,3);">
            <div class="form-group">
              <h2 for="usrname" align='center'><span class="glyphicon glyphicon-user"></span> Admin</h2>
              
            </div>
            <div class="form-group">
              
              <input type="password" class="form-control adfm" id="psw" name="adpass" placeholder="password">
            </div>
            
              <button type="submit" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-log-in"></span> Log In</button>
          </form>
        </div>
        <div class="modal-footer">
        <!--  <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>          
    -->      <p>Forgot <a href="#">Password?</a></p>
        </div>
      </div>      
    </div>
  </div>
  
  
   <!-- SIGN UP PAGES FOR THE WEBSITE -->
   <!-- signup for users-->
   <div class="modal fade" id="Signupusr" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:25px 30px; ">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="bhb"><span class="glyphicon glyphicon-user"></span> Sign Up</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" action="validation.php?val=4" method="post" onsubmit="return signvalid(event,1);">
            <div class="form-group">
           <!--   <label for="usrname"><span class="glyphicon glyphicon-user"></span> Name</label>-->
              <input type="text" class="form-control" name="nname" id="urname" placeholder="Full Name" required>
			  <p id="ero1"></p>
            </div>
			<div class="form-group">
<!--              <label for="psw"><span class="glyphicon glyphicon-phone"></span> Mobile no</label>-->
              <input type="text" class="form-control" name="nmbn" id="umbn" placeholder="Mobile No." required>
			  <p id="ero2"></p>
            </div>
			<div class="form-group">
     <!--         <label for="psw"><span class="glyphicon glyphicon-home"></span> Address</label>
         -->     <input type="text" class="form-control" name="nadr" id="upadr" placeholder="Permanent Address" required>
		      <p id="ero3"></p>
            </div>
            <div class="form-group">
            <!--  <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              --><input type="password" class="form-control" name="npass" id="upwd" placeholder="Password(6 or more characters)" required>
			  <p id="ero4"></p>
            </div>
			 
			
              <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Sign Up</button>
          </form>
        </div>
        <div class="modal-footer">
    <!-- <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
    --> <p>Have an account?<a href="#" data-dismiss='modal' data-toggle='modal'  data-target='#login'>Login</a></p>     
        </div>
      </div>
      
    </div>
  </div>
   
   <!-- signup page for dealers -->
  <div class="modal fade" id="Signup" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:25px 30px; ">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="bhb"><span class="glyphicon glyphicon-user"></span> Sign Up</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" action="validation.php?val=5" method="post" onsubmit="return signvalid(event,2);">
            <div class="form-group">
           <!--   <label for="usrname"><span class="glyphicon glyphicon-user"></span> Name</label>-->
              <input type="text" class="form-control" id="dlrname" name="dlname" placeholder="Full Name" required>
			  <p id="err1"></p>
            </div>
			<div class="form-group">
<!--              <label for="psw"><span class="glyphicon glyphicon-phone"></span> Mobile no</label>-->
              <input type="text" class="form-control" id="mbn"  name="dlmbn" placeholder="Mobile No." required>
			  <p id="err2"></p>
            </div>
			<div class="form-group">
     <!--         <label for="psw"><span class="glyphicon glyphicon-home"></span> Address</label>
         -->     <input type="text" class="form-control" id="padr" name="dladr" placeholder="Permanent Address" required>
		      <p id="err3"></p>
            </div>
            <div class="form-group">
            <!--  <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              --><input type="password" class="form-control" id="pwd" name="dlpass" placeholder="Password(6 or more characters)" required>
			  <p id="err4"></p>
            </div>
			 
			
              <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Sign Up</button>
          </form>
        </div>
        <div class="modal-footer">
    <!-- <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
    --> <p>Have an account?<a href="#" data-dismiss='modal' data-toggle='modal'  data-target='#logindlr'>Login</a></p>     
        </div>
      </div>
      
    </div>
  </div>
  

<div class="jumbotron text-center">
  <h1>eBid.com</h1> 
  <p>We specialize in organising Cars Auctions online !</p> 
  <form class="form-inline" autocomplete="off" action="search.php" method='post'>
    <div class="input-group autocomplete" >
      <input type="text" class="form-control bg" size="50" name="searchbar" id="myInput" placeholder="Search for auctions...." required>
      <div class="input-group-btn">
        <button type="submit" class="btn btn-danger">Search</button>
      </div>
    </div>
  </form>
</div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>About Us</h2><br>
      <h4> Automotive Pricing Aggregator is a web application which will handle the auctions or sales of cars/bikes. The auctions in the application are posted by dealers and users registered in the application can participate in the auction and bid the amount.</h4><br>
      <p>The Dealer will register into the application and activated by the admin. After Successful Dealer will have to maintain the auctions like delete the completed auctions and post new auction.

The auctions are managed by dealers. Users who registered and login need to search for the vehicles the search results will be displayed based on the user’s location and the results are displayed in such a way the distance traveled by the vehicle, year of manufacturer.

For this, we will have Pricing Aggregator. First, we will check in our database if any present it will show by calculating above details and then we will check online.</p>
<div id="more" class="collapse">
<p>Further you will come to know just after do signing up on our website </p></div>
      <br><button class="btn btn-primary btn-lg" data-toggle="collapse" data-target="#more" >Know more</button>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-signal logo"></span>
    </div>
  </div>
</div>

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo slideanim"></span>
    </div>
    <div class="col-sm-8">
      <h2>Our Values</h2><br>
      <h4><strong>MISSION:</strong> Our mission is to spread maximum awareness about our auctions ,so that we can create best deals between the buyers and dealers .Maximum Participants Great Deals.</h4><br>
      <p><strong>VISION:</strong> Our vision Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
  </div>
</div>

<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <h2>SERVICES</h2>
  <h4>What we offer</h4>
  <br><div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-off logo-small" ></span>
      <h4>POWER START CARS</h4>
      <p>We have a power to make good deals </p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-heart logo-small" style="color:red;"></span>
      <h4>LOVE</h4>
      <p>We just spread love between our buyers and sellers</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-lock logo-small" style="color:#4d94ff;"></span>
      <h4>COMPLETE JOB DONE</h4>
      <p>Complete job done is there</p>
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-leaf logo-small" style="color:green;"></span>
      <h4>GREENERY</h4>
      <p>Very less pollution in our cars</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-certificate logo-small" style="color:#cca300"></span>
      <h4>CERTIFIED</h4>
      <p>Fully certified vehicles are there</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-wrench logo-small" style="color:#404040"></span>
      <h4 style="color:#303030;">2 SERVICE FREE</h4>
      <p>Starting two services are free from the company</p>
    </div>
  </div>
</div>

<!-- Container (Collection Section) -->
<div id="portfolio" class="container-fluid text-center bg-grey">
  <h2>Categories</h2><br>
  <h4>OUR COLLECTION </h4>
  <div class="row text-center slideanim">
    <div class="col-sm-4">
      <div class="thumbnail" onclick="ret(1);">
        <img src="http://localhost/eBid/images/car1.jpg" alt="Paris" width="200" height="100">
        <p><strong>CLASSICS</strong></p>
        
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail" onclick="ret(2);">
        <img src="http://localhost/eBid/images/lux.jpg" alt="New York" width="200" height="100">
        <p><strong>LUXURIES</strong></p>
        
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail" onclick="ret(3);">
        <img src="http://localhost/eBid/images/fam.png" alt="San Francisco" width="200" height="100">
        <p><strong>BIG FAMILY SEDAN</strong></p>
       
      </div>
    </div>
  </div>
   <div class="row text-center slideanim">
    <div class="col-sm-4">
      <div class="thumbnail" onclick="ret(4);">
        <img src="http://localhost/eBid/images/sport.jpg" alt="Paris" width="200" height="100">
        <p><strong>SPORTS</strong></p>
       
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail" onclick="ret(5);">
        <img src="http://localhost/eBid/images/vans.jpg" alt="New York" width="200" height="100">
        <p><strong>TOUR VANS</strong></p>
        
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail" onclick="ret(6);">
        <img src="http://localhost/eBid/images/small.jpg" alt="San Francisco" width="200" height="100">
        <p><strong>FOR SMALL FAMILY </strong></p>
       
      </div>
    </div>
  </div>
  
  
  <br>
  
  <h2>What our customers say</h2>              <!--Carousal-->
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">

		  <h4>"This company is the best. I am so happy with the result!"<br><span>Michael Roe, Vice President, Comment Box</span></h4>
      </div>
      <div class="item">

        <h4>"One word... WOW!!"<br><span>John Doe, Salesman, Rep Inc</span></h4>
      </div>
      <div class="item">

        <h4>"Could I... BE any more happy with this company?"<br><span>Chandler Bing, Actor, FriendsAlot</span></h4>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!-- Container (ACCOUNT SECTION) -->
<div id="pricing" class="container-fluid">
  <div class="text-center">
    <h2>Login or Signup</h2>
    
  </div>
  <div class="row slideanim">
    <div class="col-sm-6 col-xs-12">                        <!--USER SECTION-->
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>USER</h1>
        </div>
        <div class="panel-body">
         
        </div>
        <div class="panel-footer">
          <h3>Get your dream car here !</h3>
		  <img src="http://localhost/eBid/images/bidhands.jpg" alt="San Francisco" width="200" height="100">
          <button class="btn btn-lg" data-toggle='modal' data-target='#Signupusr'>Sign Up</button> <button class="btn btn-lg" data-toggle='modal' data-target='#login'>Log In</button>
        </div>
      </div>      
    </div>     
    <div class="col-sm-6 col-xs-12">                        <!--DEALER SECTION-->
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>DEALER</h1>
        </div>
        <div class="panel-body">
		
        </div>
        <div class="panel-footer">
          <h3>Get the BEST price of your cars !</h3>
		  <img src="http://localhost/eBid/images/dealers.jpg" alt="San Francisco" width="200" height="100">
          <button class="btn btn-lg" data-toggle='modal' data-target='#Signup'>Sign Up</button> <button class="btn btn-lg" data-toggle='modal' data-target='#logindlr'>Log In</button>
        </div>
      </div>      
    </div>       
   
  </div>
</div>

<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT US</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Chicago, US</p>
      <p><span class="glyphicon glyphicon-phone"></span> +00 1515151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span> myemail@something.com</p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-danger pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Add Google Maps 
<div id="googleMap" style="height:400px;width:100%; background-color:black;"></div>
<script>
function myMap() {
var myCenter = new google.maps.LatLng(41.878114, -87.629798);
var mapProp = {center:myCenter, zoom:12, scrollwheel:false, draggable:false, mapTypeId:google.maps.MapTypeId.ROADMAP};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
var marker = new google.maps.Marker({position:myCenter});
marker.setMap(map);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->
<footer class="container-fluid-f text-center">
<div>
<h2 align='center' >Follow us on</h2>


</div>
<div align='center'>
 <i class="fab fa-facebook-f fa-3x" style="color:#1f3a93;  "></i> |<!-- uses solid style -->
  <i class="fab fa-instagram fa-3x" style=" color:#db0a5b; "></i> |<!-- uses solid style -->
   <i class="fab fa-twitter fa-3x" style="color:#3366ff;"></i> |<!-- uses solid style -->
      <i class="fab fa-pinterest fa-3x" style="color:#f62459;"></i> |<!-- uses solid style -->
	     <i class="fab fa-whatsapp fa-3x" style="color:green;"></i> |<!-- uses solid style -->
	     
</div>
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Designed & Developed by APA developers :<a href="https://www.w3schools.com" title="Visit w3schools">www.apadevp.com</a></p>
</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Prevent default anchor click behavior
    event.preventDefault();

    // Store hash
    var hash = this.hash;

    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 900, function(){
   
      // Add hash (#) to URL when done scrolling (default click behavior)
      window.location.hash = hash;
    });
  });
  
  // Slide in elements on scroll
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
// SEARCH ENGINE SCRIPT

function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}

/*An array containing all the country names in the world:*/
var countries = ["Audi","Alto","Alto 800","Accent","Audi c7","Anguilla","Antigua & B","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","BMW","Brezza","Baleno","Bentley","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia & Herzegovina","Botswana","Brazil","British Virgin Islands","Brunei","Bulgaria","Burkina Faso","Burundi","Ciaz","cruz","Canada","Cape Verde","Cayman Islands","Central Arfrican Republic","Chad","Chile","China","Colombia","Congo","Cook Islands","Costa Rica","Cote D Ivoire","Croatia","Cuba","Curacao","Cyprus","Czech Republic","Denmark","Djibouti","Datsun Go","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea","Ertiga","Eon","Ethiopia","Falkland Islands","Fortuner","Figo","Finland","Ferrari","Ford Polynesia","French West Indies","Gabon","Go","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guam","Guatemala","Guernsey","Guinea","Guinea Bissau","Guyana","Haiti","Honda city","Honda Amaze","Huindai","Iceland","India","Indonesia","Innova","Iraq","Ireland","Isle of Man","i10","i20","Jamaica","Japan","Jersey","Jordan","Kazakhstan","Kenya","Kiribati","Kosovo","Kuwait","Kyrgyzstan","Lamborghini","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Maruti Suzuki","Mercedes","Marazzo","Malawi","Malaysia","Maldives","Mali","Malta","Marshall Islands","Mauritania","Mauritius","Mexico","Micronesia","Moldova","Monaco","Mongolia","Montenegro","Montserrat","Morocco","Mozambique","Myanmar","Namibia","Nauro","Nepal","Netherlands","Netherlands Antilles","New Caledonia","New Zealand","Nicaragua","Niger","Nigeria","North Korea","Norway","Oman","Pakistan","Palau","Palestine","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Puerto Rico","Qatar","Reunion","Romania","Russia","Rwanda","Saint Pierre & Miquelon","Samoa","San Marino","Sao Tome and Principe","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","Solomon Islands","Somalia","South Africa","South Korea","South Sudan","Spain","Sri Lanka","St Kitts & Nevis","St Lucia","St Vincent","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Timor L'Este","Togo","Tonga","Trinidad & Tobago","Tunisia","Turkey","Turkmenistan","Turks & Caicos","Tuvalu","Uganda","Ukraine","United Arab Emirates","United Kingdom","United States of America","Uruguay","Uzbekistan","Vanuatu","Vatican City","Venezuela","Vietnam","Virgin Islands (US)","Yemen","Zambia","Zimbabwe"];

/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
autocomplete(document.getElementById("myInput"), countries);





// JAVASCRIPT OF MY OWN 
  
function cslgnvalid(e,elm)
{
var result=true;
if(elm==1){
var i=document.getElementsByClassName("fm1");
for(x=0;x<i.length;x++)
{
if(i[x].value.length==0)
{alert('username and password cannot be empty!');
result=false;
return(result);}
}
}
else if(elm==2){
	var i=document.getElementsByClassName("fm2");
for(x=0;x<i.length;x++)
{
if(i[x].value.length==0)
{alert('dealersname and password cannot be empty!');
result=false;
return(result);}
}
}
else{
	var i=document.getElementsByClassName("adfm");
for(x=0;x<i.length;x++)
{
if(i[x].value.length==0)
{alert('password cannot be empty!');
result=false;
return(result);}
}	
}
var x=confirm("Do you want to continue ?");
if(x==true)
{<!--alert(' You have submitted');-->
}
else
{alert('cancelled');
e.preventDefault();
}
return(result);
}
function signvalid(e,pam)
{
	var text1,text2,text3;
	text1="Name should be text only !"; text2="Invalid mobile number !"; text3="password strength is too short !";
	var fill=/^[0-9]+$/;
	if(pam==2){
	var t=document.getElementById("dlrname").value;
	var u=document.getElementById("mbn").value;
	var v=document.getElementById("padr").value;
	var x=document.getElementById("pwd").value;
	if(fill.test(t))
	{
		document.getElementById("dlrname").style.borderColor="red";
		document.getElementById("err1").innerHTML=text1;
		return false;
	}
	else if(u.length<10 || u.length>10 || isNaN(u))
	{document.getElementById("dlrname").style.borderColor="";
     document.getElementById("err1").style.display='none';	 		
		document.getElementById("mbn").style.borderColor="red";
		document.getElementById("err2").innerHTML=text2;
		return false;
	}
	else if(x.length<6) 
	{document.getElementById("mbn").style.borderColor="";
         document.getElementById("err2").style.display='none';		 
		document.getElementById("pwd").style.borderColor="red";
		document.getElementById("err4").innerHTML=text3;
		return false;	
	}	
	else
	{
		document.getElementById("pwd").style.borderColor="";
             document.getElementById("err4").style.display='none';
		return true;
	}
}
else{
	var t=document.getElementById("urname").value;
	var u=document.getElementById("umbn").value;
	var v=document.getElementById("upadr").value;
	var x=document.getElementById("upwd").value;
	if(fill.test(t))
	{
		document.getElementById("urname").style.borderColor="red";
		document.getElementById("ero1").innerHTML=text1;
		return false;
	}
	else if(u.length<10 || u.length>10 || isNaN(u))
	{document.getElementById("urname").style.borderColor="";
     document.getElementById("ero1").style.display='none';	 		
		document.getElementById("umbn").style.borderColor="red";
		document.getElementById("ero2").innerHTML=text2;
		return false;
	}
	else if(x.length<6) 
	{document.getElementById("umbn").style.borderColor="";
         document.getElementById("ero2").style.display='none';		 
		document.getElementById("upwd").style.borderColor="red";
		document.getElementById("ero4").innerHTML=text3;
		return false;	
	}	
	else
	{
		document.getElementById("upwd").style.borderColor="";
        document.getElementById("ero4").style.display='none';
		return true;
	}
	}
}

function ret(x)
{
if(x==1){window.location.href="ctgs.php?ctgs=classics";}
else if(x==2){window.location.href="ctgs.php?ctgs=luxury";}
else if(x==3){window.location.href="ctgs.php?ctgs=bigfam";}
else if(x==4){window.location.href="ctgs.php?ctgs=sports";}
else if(x==5){window.location.href="ctgs.php?ctgs=vans";}
else {window.location.href="ctgs.php?ctgs=smallfam";}
}

</script>

</body>
</html>