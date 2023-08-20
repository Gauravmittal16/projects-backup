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
echo "<h2 align='center'>Hello," . $_GET['name']. " !       Welcome to the Mywebsite.com</h2>";
echo "<h4 align='center'>You have successfully registered for this form </h4>";
?>

</body>
</html>
<?php
$name=$_GET['name'];
$age=$_GET['age'];
$password=$_GET['password'];
$con=mysqli_connect("localhost","root","8755");
if(!$con)
{
die("not connectd".mysqli_connect_error());
}
mysqli_select_db($con,'mywebdata');
$q="insert into tb1(name,age,password) values('$name','$age','$password')";
$g=mysqli_query($con,$q);
mysqli_close($con);
?>
   
