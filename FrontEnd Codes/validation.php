<?php
$name="";
$name=$_POST['username'];
$uspass=$_POST['userpass'];
$adpass=$_POST['adpass'];
$connection=mysqli_connect("localhost","root","8755");
mysqli_select_db($connection,'bidder');	
if($name!="")
{
$query1="select *from users where password='$uspass'";
$query2="select *from dealers where password='$uspass'";
}
else
{
$query3="select *from admin where password='$adpass'";	
$result=mysqli_query($connection,$query3);
$num=mysqli_num_rows($result);
if($num==1)
{session_start();
for($i=1;$i<=$num;$i++)
{
	$row=mysqli_fetch_array($result);
	$row['name'];    
}
$_SESSION['name']=$row['name'];    
header("Location:admin.php");
}
else{

	header("Location:home.php?error=1");
}
}

?>
