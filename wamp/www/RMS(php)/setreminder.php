<?php
if(isset($_POST['submit']))
{
$date=$_POST['calender'];
$subject=$_POST['sub'];
$description=$_POST['description'];
$email=$_POST['email'];
$contact=$_POST['contactno'];
$sms=$_POST['sms'];
$recur=$_POST['recur'];
$connection=mysqli_connect("localhost","root","8755");
mysqli_select_db($connection,'rms');
$query="insert into reminder(Date,subject,description,email,contactno,smsno,recur) values('$date','$subject','$description','$email','$contact','$sms','$recur')";
if(mysqli_query($connection,$query))
{
mysqli_close($connection);
header('Location:complete.php');	
}
else{ echo "<h4 align='center'>Unable to set your reminder, Please make sure your data is correct and complete. </h4>";}
}
?>

<html>
<head><title>Set Reminder</title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.css">
   <link rel="stylesheet" href="fontawesome/css/all.css">
  <script src="jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="fetch.js"></script>

  <style>
  table, td {
	  margin-left:500px;
	  
	  padding:10px;
  }
  button{
	  width:150px;
  }
  
  </style>

</head>
<body>
<h1 align='center' >Set a new Reminder</h1></br></br>
<form align='center' role='form' action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<table>
<tr><td>Select a Date :</td>  <td><input type="date" class='form-control' name="calender"/><span style="color:red;">*</span></td></tr>
<tr><td>Subject :</td>  <td><select name="sub" class='form-control'><option>Select a subject</option><option>Birthday</option><option>Annieversary</option></select><span style="color:red;">*</span></td></tr>
<tr><td >Add Description :</td>  <td><textarea name="description" class='form-control'></textarea><span style="color:red;">*</span></td></tr>
<tr><td>How to get reminded :</td>  <td><select name="hsub" class='form-control' onchange="fetch_subject(this.value)">
<option>Select</option>
<option>Email</option>
<option>SMS</option>
<option>Voice call</option>
</select><span style="color:red;">*</span></td></tr>
<div id="types">
</div>
<tr><td>Recur for next :</td>  <td><input type="checkbox" name="recur" value="7 days"/>7 days <input type="checkbox" name="recur" value="7 days"/>5 days <input type="checkbox" name="recur" value="3 days"/> 3 days <input type="checkbox" name="recur" value="2 days"/>2 days<input type="hidden" name="recur" value="0 days"/></td></tr>
<tr><td><span style="color:red;">*</span> Required Fieds</td></tr>
<tr><td> <button type="button" onclick="window.location='http://localhost/RMS(php)/home.php'" class="btn btn-primary" name="back" value="back">Back</button></td>  <td> <button type="submit" class="btn btn-primary" name="submit" value="submit">Confirm</button></td></tr>
</table>

</form>


</body>
</html>