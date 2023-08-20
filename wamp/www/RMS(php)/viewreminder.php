<?php

?>

<html>
<head><title>View Reminder</title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.css">
   <link rel="stylesheet" href="fontawesome/css/all.css">
  <script src="jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

  <style>
  table, td {
	  margin-left:100px;
	  
	  padding:10px;
  }
  button{
	  width:150px;
  }
  
  </style>
</style>
</head>
<body>
<h1 align='center' >View Reminders</h1></br></br>
<form align='center' action="#" method="get">
<table>
<tr><td>Select From Date :</td>  <td><input type="date" name="calender"/></td><td></td><td>Select To Date :</td>  <td><input type="date" name="calender"/></td></tr>
<tr><td>Subject :</td>  <td><select><option>Select a subject</option><option>Birthday</option><option>Annieversary</option></select></td></tr>
<tr><td>Reminder Name </td><td> Reminder Subject </td><td>Reminder Description </td>  <td>Email-Address </td><td>Contact No </td><td>SMS No </td><td>Status </td><td>Recurrence Frequency </td></tr>
<tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td> <input type="checkbox" namw="7 days"/>7 Days <input type="checkbox" namw="5 days"/>5 Days</td></tr>
<tr><td></td><td> <button type="button" onclick="window.location='http://localhost/RMS(php)/home.php'" class="btn btn-primary" name="back" value="back">Back</button></td>  <td> <button type="submit" class="btn btn-primary" name="confirm" value="delete Reminder">Delete Reminder</button></td>  <td> <button type="submit" class="btn btn-primary" name="confirm" value="disable Reminder">Disable Reminder</button></td>  <td> <button type="submit" class="btn btn-primary" name="confirm" value="modify">Modify Reminder</button></td></tr>
</table>

</form>


</body>
</html>