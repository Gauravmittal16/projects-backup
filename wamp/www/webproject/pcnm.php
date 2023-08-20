
<?php

session_start();
$password=$_GET['password'];
$username=$_GET['username'];
$error="Invalid username or password";
$con=mysqli_connect("localhost","root","8755");
if(!$con)
{
die("not connectd".mysqli_conect_error());
}

mysqli_select_db($con,'mywebdata');
$q="select *from tb1 where password='$password'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num==1)
	
	{
		$_SESSION['username']=$username;
for($i=1;$i<=$num;$i++)
{
	$row=mysqli_fetch_array($result);
	$row['name'];
	$row['age'];
	
}
$_SESSION['name']=$row['name'];
$_SESSION['age']=$row['age'];

header("Location:home.php");
}
else
{
$_SESSION['error']=$error;
header("Location:signin.php");
}


mysqli_close($con);
?>

   
