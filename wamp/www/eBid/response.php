<?php
$aid=$_GET['uid'];
$connection=mysqli_connect("localhost","root","8755");
mysqli_select_db($connection,'bidder');
if(isset($_POST['submit']))
{
	session_start();
	$val=$_POST['mybid'];
	$usr=$_SESSION['uname'];
	$qury="insert into bids values('$aid','$val','$usr')";
	$r=mysqli_query($connection,$qury);
	echo "<script type='text/javascript'>alert('Your bid has placed.');</script>"; 	
}
?>
<html><head>
 <link rel="stylesheet" href="css/bootstrap.css">
 <link rel="stylesheet" href="fontawesome/css/all.css">
  <script src="jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <style type="text/css">
  img
  {
	  left:200px;
  }
  table tr{
	  height:30px;
  }
  </style>
</head>
<body>
<h1 align='center'>About Auction</h1>
<table align='center'>
<?php
$query="select Description,image,price,company,model,dealer from auctions where aid='$aid'";
$result=mysqli_query($connection,$query);
$num=mysqli_num_rows($result);
if($num==1)
{
	for($i=1;$i<=$num;$i++)
	{
		$row=mysqli_fetch_array($result);
		echo "<tr align='center'><td colspan='2'><img  src='http://localhost/eBid/images/".$row['image']."' alt='Paris' width='400' height='300'></td></tr>
	   <tr><td><strong>Company :</strong></td><td>".$row['company']."         ".$row['model']."</td></tr>
	   	<tr><td><strong>Price :</strong></td><td>".$row['price']."</td></tr>   
	<tr><td><strong>Description :</strong></td><td>".$row['Description']."</td></tr>   
	   <tr><td><strong>Dealer :</strong></td><td>".$row['dealer']."</td></tr>";   
	}
}
$q1="select count(bids),max(bids) from bids where aid='$aid'";
	$result = mysqli_query($connection,$q1);
    $row = mysqli_fetch_array($result);
    echo "<tr><td><strong>Bids :</strong></td><td>".$row['count(bids)']."</td></tr>";
	echo "<tr><td><strong>Highest Bid :</strong></td><td>".$row['max(bids)']."</td></tr>";
	
?>
</table>
<form action="#<?php echo $_SERVER['PHP_SELF'];?>" method="post" align='center'>
<div>
<input style="width:300px; height:40px;" name="mybid" type="number"  placeholder="Enter your bid" required>
</div></br>
<div>
<button class="btn btn-primary" type="submit" name="submit">Place Bid</button>
</div>
</form>
</body>
</html>