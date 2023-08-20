<?php
session_start();
if(!isset($_SESSION['uname']))
{
header("Location:home.php");	
}
$con=mysqli_connect("localhost","root","8755");
	mysqli_select_db($con,'bidder');
?>
<html>
<head>
 <link rel="stylesheet" href="css/bootstrap.css">
  <script src="jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href='mycss.css' rel='stylesheet' type='text/css'>
<style type="text/css">
h5{
	color:#cf000f;
}
</style>
</head>
<body><div class="container">
    <div class="fb-profile">
        <img align="left" class="fb-image-lg" src="http://localhost/eBid/images/guitar2.jpg" alt="Profile image example"/>
        <img align="left" class="fb-image-profile thumbnail" src="http://localhost/eBid/images/<?php if(isset($_SESSION['image'])){ echo $_SESSION['image']; } else { echo "newuser.png"; }?>" alt="Profile image example"/>
        <div class="fb-profile-text">
            <h1><?php echo $_SESSION['uname']?></h1>
            <p>Hey, I'm using eBid now </p>
			<?php if(isset($_SESSION['fusrname']))
				{ echo "<h5 style='color:blue;'>Your Username is ".$_SESSION['fusrname'].". Remember it while Login.</h5>";}
			?>
	
			<input type="button" onclick="location.href='updatecont.php';" value="Edit" /> <a  href="logout.php"> Log Out</a>
					<button class="btn btn-primary btn-lg" data-toggle="collapse" data-target="#demo2">WINNED AUCTIONS</button>  
					<button class="btn btn-primary btn-lg" data-toggle="collapse" data-target="#demo2">REWARDS</button>
						<button class="btn btn-primary btn-lg" data-toggle="collapse" data-target="#demo2">PARTICIPATIONS</button> 
						<button class="btn btn-primary btn-lg" data-toggle="collapse" data-target="#demo2">BIDS</button>
												<button class="btn btn-primary btn-lg" data-toggle="collapse" data-target="#demo2">Live AUCTION STATUS</button>
<?php
 $td=date("Y/m/d");
 $query1="select aid from auctions where Date in (select max(Date) from auctions where Date<'$td')";
$result=mysqli_query($con,$query1);
 $row = mysqli_fetch_array($result);
    $count0= $row['aid'];
	
	$query2="select biddername from bids where bids in (select max(bids) from bids where aid='$count0')";
$result=mysqli_query($con,$query2);
 $row = mysqli_fetch_array($result);
    $count1= $row['biddername'];
	
	
	if($count1==$_SESSION['uname'])
	{
		echo "Congratulations! You have won the auction.";
	}

?>        
	
		
		
		
		
		</div>
    </div>
</div> <!-- /container -->


<!-- Today's Auctions-->

<div id="portfolio" class="container-fluid text-center bg-grey">
  <h2 align='center'>Live Auctions</h2>
  <div class="row text-center slideanim">
     <?php
	 $td=date("Y/m/d");
  $qry="select Aid,Date,image,dealer,company,model from auctions where Date='$td'";
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
       <h5 style='color:red;'><strong><span class='glyphicon glyphicon-time'></span>  ".date_format(date_create($row['Date']),"F d,Y")."</strong></h5>
	   <h4>".$row['company']."         ".$row['model']."</h4>
       <a href='response.php?uid=".$row['Aid']."'> bid now</a>
		<p> Posted by - ".$row['dealer']."</p>
      </div>
    </div>";
	  }
  }
  else{
	  echo "<h3 align='center'> No Auctions for Today</h3>";
  }?>
  </div><br>
   
</div>

 <!-- Bidding modal-->
  <div class="modal fade" id="SignupModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-headerlg text-center" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="bh"><span class="glyphicon glyphicon-user"></span> Bid Panel</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" method="post">
            <div class="form-group">
              <textarea row="5" cols="50" class="form-control" id="usrname" placeholder="Your Bid"></textarea>
            </div>
            </div>
              <button type="submit" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-bullhorn"></span> Bid</button>
          </form>
        </div>
       
      </div>
      
    </div>
  <h2 align='center'> AUCTION GALLERY</h2>
<!-- auction section-->
<div id="portfolio" class="container-fluid text-center bg-grey">
  <h3>Upcoming Auctions</h3><br>
  
  <div class="row text-center slideanim">
     <?php
	 $td=date("Y/m/d");
  $qry="select Date,Description,image,dealer,company,model from auctions where Date>'$td' order by Date ASC";
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
       <h5 style='color:red;'><strong><span class='glyphicon glyphicon-time'></span>  ".date_format(date_create($row['Date']),"F d,Y")."</strong></h5>
	   <h4>".$row['company']."         ".$row['model']."</h4>
	   <p>Description :".$row['Description']."</p>
        <button type='button' class='btn btn-danger' width='200px'>Participate now</button>
		<p> Posted by - ".$row['dealer']."</p>
      </div>
    </div>";
	  }
  }
  else{
	  echo "<h3 align='center'> No new auctions are there !</h3>";
  }?>
  </div><br>
  </div>
  <div id="portfolio" class="container-fluid text-center bg-grey">
  <h3>Past Auctions</h3><br>
  <div class="row text-center slideanim">
    <?php
  $qry="select Date,Description,image,dealer,company,model from auctions where Date<'$td' order by Date DESC";
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
	   <p>Description :".$row['Description']."</p>
	   <h3>Event is closed</h3>
		<p> Posted by - ".$row['dealer']."</p>
      </div>
    </div>";
	  }
  }
  else{
	  echo "<h3 align='center'> No past events </h3>";
  }?>
  </div><br>
  </div>
  <div class="footer">
  <h4 align='center' style="color:#2e3131;padding-top:40px;">copyright 2019 eBid.All rights reserved|Hosted by APA Developers</h4>
  </div>
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