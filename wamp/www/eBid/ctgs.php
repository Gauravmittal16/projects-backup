<html>
<head><title>luxry</title>
<link rel="stylesheet" href="css/bootstrap.css">
   <link rel="stylesheet" href="fontawesome/css/all.css">
  <script src="jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

  <style>
  .thumbnail{background-color:#e4f1fe;}
h1{
	border-bottom:1px solid black;
}

  </style></head>
<body>

<?php
$ct=$_GET['ctgs'];
$con=mysqli_connect("localhost","root","8755");
	mysqli_select_db($con,'bidder');
if($ct=="luxury")
{
echo "<h1 align='center'>Luxuries</h1>";
echo "<div id='portfolio' class='container-fluid text-center bg-grey'>
  <h3>Upcoming Auctions</h3><br> 
  <div class='row text-center slideanim'>";
  
  $qry="select Date,Description,image,dealer,company,model from auctions where type='luxury' order by Date ASC";
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
  else{echo "<h3 align='center'> No new auctions are there !</h3>";}
  
  
echo "</div><br>
  </div>";  
}
else if($ct=="classics")
{
echo "<h1 align='center'>Classics</h1>";
}
else if($ct=="sports")
{
echo "<h1 align='center'>Sports</h1>";
}
else if($ct=="vans")
{
echo "<h1 align='center'>Vans</h1>";
}
else if($ct=="bigfam")
{
echo "<h1 align='center'>Big Family Sedans</h1>";
}
else 
{
echo "<h1 align='center'>For Small Family</h1>";
}
?>
</body></html>