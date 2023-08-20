<?php
if(isset($_POST['Submit']))
{
$username=$_POST['username'];
$password=$_POST['password'];
$connection=mysqli_connect("localhost","root","8755");
mysqli_select_db($connection,'rms');
$query="select *from users where password='$password'";
$result=mysqli_query($connection,$query);
$num=mysqli_num_rows($result);
if($num==1)
{session_start();
for($i=1;$i<=$num;$i++)
{
	$row=mysqli_fetch_array($result);
	$row['username'];    
}
if($username==$row['username'])
{
	session_start();
	$_SESSION['user']=$username;
	mysqli_close($connection);
	header('Location:http://localhost/RMS(php)/home.php');
}
else
{
	header('Location:http://localhost/RMS(php)/loginfailed.php');
}
}
else{header('Location:http://localhost/RMS(php)/loginfailed.php');}
}
?>
<html>
<head>
 <title>Login page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.css">
   <link rel="stylesheet" href="fontawesome/css/all.css">
  <script src="jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
<style>
h1{
	height:80px;}
</style>
</head>
<body>
<div class="header"></div>
<h1 align='center' >Login Form</h1></br></br>
<form  align="center" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Username : <input type="text" name="username"/></br>
</br>
password : <input type="password" name="password"/></br></br>
   <button type="Submit" class="btn btn-primary" name="Submit" value="Submit">Login</button>        <button type="button" class="btn btn-primary" onclick="window.location.replace('http://localhost/RMS(php)/application.php')" name="cancel" value="cancel">Cancel</button>
</form>


</body>


</html>