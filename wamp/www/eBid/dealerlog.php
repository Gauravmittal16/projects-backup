<?php
session_start();
if(!isset($_SESSION['dname']))
{
	header("Location:home.php");	
}
	$adname=$_SESSION['dname'];
	$con=mysqli_connect("localhost","root","8755");
	mysqli_select_db($con,'bidder');
?>
<?php
if(isset($_POST['submit']))
{
	$dt=$_POST['date'];
    $date = DateTime::createFromFormat('d/m/Y',$dt);
    $dtf=$date->format('Y-m-d');
	$company=$_POST['company'];
	$model=$_POST['model'];
	$price=$_POST['price'];
	$cartype=$_POST['cartype'];
	$desc=$_POST['desc'];
	$fl=$_FILES['myfile'];
	$flname=$_FILES['myfile']['name'];
	
	if(file_exists("images/".$flname))
          {
        	echo "<script type='text/javascript'>alert('Your image already exists');</script>";
	       }
         else if($fl['type']=="image/jpeg")
           {		   
	move_uploaded_file($fl['tmp_name'],"images/".$flname);
	$query="insert into auctions(Date,Description,image,price,dealer,company,model,type) values('$dtf','$desc','$flname','$price','$adname','$company','$model','$cartype')";
	$result=mysqli_query($con,$query);
	echo "<script type='text/javascript'>alert('Auction added successfully');</script>"; 	
	}
		   else{echo "<script type='text/javascript'>alert('Invalid format of image');</script>"; }

}	
?>
<html>
<head>
 <link rel="stylesheet" href="css/bootstrap.css">
  <script src="jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href='mycss.css' rel='stylesheet' type='text/css'>
<style type="text/css">
.jumbotron
{
	height:625px;
	background-color:#e4e9ed;
}

</style>
</head>
<body><div class="container">
    <div class="fb-profile">
        <img align="left" class="fb-image-lg" style="border: 1px solid black;" src="http://localhost/eBid/images/cover.png" alt="Profile image example"/>
        <img align="left" class="fb-image-profile thumbnail" src="http://localhost/eBid/images/<?php if(isset($_SESSION['dimage'])){ echo $_SESSION['dimage']; } else { echo "newuser.png"; }?>" alt="Profile image example"/>
        <div class="fb-profile-text">
            <h1><?php echo $_SESSION['dname'];?></h1>
            <p>Hey there, I'm the dealer at eBid.com</p>
			<input type="button" onclick="location.href='updatedealer.php';" value="Edit" /> <a  href="logout.php"> Log Out</a>
        </div>
    </div>
</div> <!-- /container -->

<!-- form of auctions-->
<div class="jumbotron text-center">
<h3> Create your Auctions here </h3>
        <div class="mbody" style="padding:40px 300px 0px 300px;">
          <form role="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
		   <div class="form-group">
              <input type="text" class="form-control" name="date" id="urname" placeholder="(dd/mm/yyyy)Mention date for auction" required>
			  <p id="ero1"></p>
            </div>
			<div class="form-group">
			<label align="center">Add car details </label>
              <input type="text" class="form-control" name="company" id="urname" placeholder="Company" required>
			  <p id="ero1"></p>
            </div>
			<div class="form-group">
              <input type="text" class="form-control" name="model" id="urname" pattern="[A-Za-z.\ ]{1,20}" placeholder="Model" required>
			  <p id="ero1"></p>
            </div>
			 <div class="form-group">
              <input type="text" class="form-control" name="price" id="urname" pattern="[0-9]{1,10}" placeholder="Car's price(ex-200000)" required>
			  <p id="ero1"></p>
            </div>
			<div class="form-group">
               <select class="form-control" name="cartype" id="cartype" required>
    <option value="" disabled selected hidden style="text-color:gray;">Car type</option>
    <option>classic</option>
    <option>Luxury</option>
    <option>sports</option>
	<option>Van</option>
	<option>SUV</option>
	<option>MUV</option>
  </select>
            </div>
            <div class="form-group"> 
             <textarea class="form-control" id="comments" name="desc" placeholder="Write something about your auction or car" rows="5" required></textarea>
            </div>
			<div class="form-group">
              <input type="file" name="myfile" class="form-control" required />
            </div>
            
              <button type="submit" name="submit" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-list-alt"></span>Create</button>
          </form>
		  </div>
</div>

  <h2 align='center'>Recent posts</h2>
<!-- auction section-->
<div id="portfolio" class="container-fluid text-center bg-grey">
  
  
  <div class="row text-center slideanim">
  <?php
  $qry="select Date,Description,image,company,model from auctions where dealer='$adname' order by Aid DESC";
  $r=mysqli_query($con,$qry);
  $num=mysqli_num_rows($r);
  if($num>=1)
  {
	  for($i=1;$i<=$num;$i++)
	  {
		  $row=mysqli_fetch_array($r);
  echo "<div class='col-sm-4'>
      <div class='thumbnail'>
        <img src='http://localhost/eBid/images/".$row['image']."' alt='Paris' width='400' height='300'>
       <h5 style='color:red;'><span class='glyphicon glyphicon-time'></span>  <strong>".date_format(date_create($row['Date']),"F d,Y")."</strong></h5>
	   <h4>".$row['company']."         ".$row['model']."</h4>
	   <p>".$row['Description']."</p>
        <button type='button' class='btn btn-danger' width='200px'>Register</button>
      </div>
    </div>";
	  }
  }
  else{
	  echo "<h3 align='center'> No post yet</h3>";
  }?>
  </div><br>
  </div>

  <div class="footer">
  <h4 align='center' style="color:#2e3131;padding-top:40px;">copyright 2019 eBid.All rights reserved|Hosted by APA Developers</h4></div>
<script type="text/javascript">
function read()
{
var xhttp=new XMLHttpRequest();
xhttp.onreadystatechange=function()
{
  if(xhttp.readyState==4 && xhttp.status==200)
    {
	 document.getElementById("midiv").innerHTML=xhttp.responseText;
	 }
}
xhttp.open("POST","java4s.html",true);
xhttp.send();
} 

</script> 
</body></html>