<?php
session_start();
if(!isset($_SESSION['name']))
{
header("Location:home.php");	
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="css/bootstrap.css">
 <link rel="stylesheet" href="fontawesome/css/all.css">
  <script src="jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 550px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
        
    /* On small screens, set height to 'auto' for the grid */
    @media screen and (max-width: 767px) {
      .row.content {height: auto;} 
    }
	

	
	h1{

	margin:0;
	padding:0px;
	
	}
	.btn{margin:10px;
	}
	a:hover{color:blue;
	}
	.up
	{
		 box-shadow: 8px 9px 40px rgba(0,0,0, .3);
	}
  </style>
</head>
<body>

<div class="header" >
  
   <h1 align='center'><span class="glyphicon glyphicon-user"></span>ADMINISTRATOR</h1>
</div>

<nav class="navbar navbar-inverse visible-xs">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Menu</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
	
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Dashboard</a></li>
        <li><a href="#">Age</a></li>
        <li><a href="#">Gender</a></li>
        <li><a href="#">Geo</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid">
  <div class="row content">
  
    <div class="col-sm-2 sidenav hidden-xs">
	<div class="w3-col s4">
      <img src="http://localhost/eBid/images/image2.png" class="w3-circle w3-margin-right" style="width:46px">
    </div>
      <div class="w3-col s8 w3-bar">
      <span>Welcome, <strong><?php echo $_SESSION['name']?> </strong></span><br>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-user"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-cog"></i></a>
    </div>
	<?php

	$con=mysqli_connect("localhost","root","8755");
	mysqli_select_db($con,'bidder');
	$q="select count(name) from users";
	$result = mysqli_query($con,$q);
    $row = mysqli_fetch_array($result);
    $count1 = $row['count(name)'];
	
	$q1="select count(Aid) from auctions";
	$result1 = mysqli_query($con,$q1);
    $row = mysqli_fetch_array($result1);
    $count2 = $row['count(Aid)'];
	
	$q2="select count(name) from dealers";
	$result2 = mysqli_query($con,$q2);
    $row = mysqli_fetch_array($result2);
    $count3 = $row['count(name)'];
	$prcnt=$count3*100/($count1+$count2+$count3);
	
?>
	  <h2>Menu</h2>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#section1">Dashboard</a></li>
        <li><a href="#section2">Databases</a></li>
        <li><a href="#section3">Edit profile</a></li>
        <li><a href="#section3">Settings</a></li>
		 <li><a href="logout.php">Logout</a></li>
      </ul><br>
    </div>
    <br>
    
    <div class="col-sm-10">
      <div class="well" style="background-color:#3366ff;">
        <h4 align='center' style="color:white;">Dashboard</h4>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="well up">
            <h4 align='center' style="color:red;">Users</h4>
            <p align='center'><?php echo $count1 ;?></p> 
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well up">
            <h4 align='center' style="color:blue;"> Auctions </h4>
            <p align='center'><?php echo $count2 ;?></p> 
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well up">
            <h4 align='center' style="color:hotpink;">Sessions</h4>
            <p align='center'>10 Million</p> 
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well up">
            <h4 align='center' style="color:green;">Dealers</h4>
            <p align='center'><?php echo $prcnt."%";?></p> 
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4 text-center">
          <div class="well">
		  <p><strong>Information</strong></p>
          <button class="btn btn-danger btn-lg" data-toggle="collapse" data-target="#demo2"><span class="glyphicon glyphicon-calendar"></span>Show Auctions</button>
		  <button class="btn btn-warning btn-lg" data-toggle="collapse" data-target="#demo"><span class="glyphicon glyphicon-user"></span>Show Dealers</button>
		  <button class="btn btn-info btn-lg" data-toggle="collapse" data-target="#demo"><span class="glyphicon glyphicon-user"></span>Show users</button>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="well">
		  <p><strong>Work done</strong></p>
          <button class="btn btn-success btn-lg" data-toggle="collapse" data-target="#demo"><span class="glyphicon glyphicon-ok-circle"></span>Deals</button>
		  <button class="btn btn-secondary btn-lg" data-toggle="collapse" data-target="#demo"><span class="glyphicon glyphicon-dashboard"></span>Activities</button>
		  <button class="btn btn-dark btn-lg" data-toggle="collapse" data-target="#demo"><span class="glyphicon glyphicon-tasks"></span>Current Auctions</button>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="well">
		  <p><strong>Removals</strong></p>
          <button class="btn btn-warning btn-lg" data-toggle="collapse" data-target="#demo"><span class="glyphicon glyphicon-ban-circle"></span>Removed users</button>
		  <button class="btn btn-danger btn-lg" data-toggle="collapse" data-target="#demo"><span class="glyphicon glyphicon-ban-circle"></span>Removed  Dealers</button>
		  <button class="btn btn-primary btn-lg" data-toggle="collapse" data-target="#demo"><span class="glyphicon glyphicon-exclamation-sign"></span>Bad auctions</button>
          </div>
        </div>
      </div>
	<!-- All data-->  
      
	  <div class="row">
        <div class="col-sm-12 text-center">
          <div class="well ">
           <h2> Info Feeds</h2>
          </div>
        </div>
<div  id="demo" class="collapse">
<table class="table table-striped">
   <?php
   $query="select name from users";
   $result=mysqli_query($con,$query);
   $num=mysqli_num_rows($result);
   if($num<1)
   {
	   echo "no data to show";
   }
   ?>
    <thead>
      <tr>
        <th>Username</th>
      </tr>
    </thead>
    <tbody>
	<?php
	for($i=1;$i<=$num;$i++)
{
	$row=mysqli_fetch_array($result);
	echo "<tr>";
	echo "<td>".$row['name']."</td>";
	echo "</tr>";
}
	?>
    </tbody>
  </table>
</div> 
<!-- auctions-->
<div  id="demo2" class="collapse">
<table class="table table-striped">
   <?php
   $query1="select *from auctions";
   $result1=mysqli_query($con,$query1);
   $num=mysqli_num_rows($result1);
   if($num<1)
   {
	   echo "no data to show";
   }
   ?>
    <thead>
      <tr>
        <th>Auction Id</th>
		<th>Date</th>
		<th>Description</th>
		<th>Image</th>
		<th>Price</th>
		<th>Dealer's name</th>
      </tr>
    </thead>
    <tbody>
	<?php
	for($i=1;$i<=$num;$i++)
{
	$row=mysqli_fetch_array($result1);
	echo "<tr>";
	echo "<td>".$row['Aid']."</td>";
	echo "<td>".$row['Date']."</td>";
	echo "<td>".$row['Description']."</td>";
	echo "<td>".$row['image']."</td>";
	echo "<td>".$row['price']."</td>";
	echo "<td>".$row['dealer']."</td>";
	echo "</tr>";
}
	?>
    </tbody>
  </table>
</div>
     




	  
      </div>
	   <div class="row">
        <div class="col-sm-12">
          <div class="well">
            <p>Text</p> 
          </div>
        </div>
        
      </div>
	   <div class="row">
        <div class="col-sm-12">
          <div class="well">
            <p>Text</p> 
          </div>
        </div>
        
      </div>
	   <div class="row">
        <div class="col-sm-12">
          <div class="well">
            <p>Text</p> 
          </div>
        </div>
       
      </div>
	   <div class="row">
        <div class="col-sm-12">
          <div class="well">
            <p>Text</p> 
          </div>
        </div>
       
      </div>
    </div>
  </div>
</div>
</body>
</html>