<html>
<head>
<style type="text/css">
body
{
	background-color:lightgreen;
}

</style>
</head>
<body>
<h1 align='center'>Mywebsite.com</h1>


<?php
$name=$_POST['name'];
$age=$_POST['age'];
$mob=$_POST['mob'];
$password=$_POST['password'];
$sum=0;
	$mob=$mob/99;
	for($i=0;$i<=4;$i++)
	{
		$sum=$sum+$mob%10;
		$mob=$mob/10;
	}
	$fusername=$name.$sum;



$con=mysqli_connect("localhost","root","8755");
if(!$con)
{
die("not connectd".mysqli_connect_error());
}
mysqli_select_db($con,'mywebdata');
$q="insert into tb1(name,age,password,username) values('$name','$age','$password','$fusername')";
$g=mysqli_query($con,$q);
mysqli_close($con);
?>
   
<?php
echo "<h2 align='center'>Hello," . $_POST['name']. " !       Welcome to the Mywebsite.com</h2>";
echo "<h4 align='center'>You have successfully registered for this form .Your username is ".$fusername." Remember it for Login </h4>";
?>

</body>
</html>