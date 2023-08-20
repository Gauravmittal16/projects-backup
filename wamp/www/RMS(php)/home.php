<?php
session_start();
if(!isset($_SESSION['user']))
{
	
	header("Location:login.php");
}
?>
<html>
<head>
<title>Home page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.css">
   <link rel="stylesheet" href="fontawesome/css/all.css">
  <script src="jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <style>
 .opt{width:300px;}
  
  </style>
  
  
  </head>
<body>
<?php 
 $td=date("Y/m/d");
 $newdate = date("jS ", strtotime($td));
  $newmonth = date(" F", strtotime($td));
$timestamp = strtotime($td);

$day = date('l', $timestamp);


echo "<h3 align='center'> Welcome to the Reminder Application, ".$_SESSION['user']."!</h3>";
echo "<h4 align='center'> Today is ".$day.","; echo $newdate."Of".$newmonth.".</h4>";
?>
<form align='center' method="get">
</br><button type="button"  onclick="window.location='http://localhost/RMS(php)/setreminder.php'" class="btn btn-default opt">Set Reminder</button></br></br>
<button type="button"  onclick="window.location= 'http://localhost/RMS(php)/modifyreminder.php' " class="btn btn-default opt">Modify Reminder</button></br></br>
<button type="button"  onclick="window.location= 'http://localhost/RMS(php)/disablereminder.php' " class="btn btn-default opt">Disable Reminder</button></br></br>
<button type="button"  onclick="window.location= 'http://localhost/RMS(php)/deletereminder.php' "class="btn btn-default opt">Delete Reminder</button></br></br>
<button type="button"  onclick="window.location= 'http://localhost/RMS(php)/enablereminder.php' " class="btn btn-default opt">Enable Reminder</button></br></br>
<button type="button"  onclick="window.location= 'http://localhost/RMS(php)/viewreminder.php' "class="btn btn-default opt">View your Reminders</button></br></br></br></br>
<button type="button"  style="width:100px;" onclick="window.location= 'http://localhost/RMS(php)/login.php'" class="btn btn-primary">Back</button>   <a style="margin-left:200px;" href="logout.php">Logout</a>
</form>





</body>
</html>