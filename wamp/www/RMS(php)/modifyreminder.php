<?php
?>

<html>
<head><title>modify Reminder</title>
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
<h1 align='center' >Modify Reminder</h1></br></br>
<form align='center' role='form' action="#" method="get">
<table>
<tr><td>Select Date :</td>  <td><input type="date" class="form-control" name="calender"/></td></tr>
<tr><td>Select a Subject :</td>  <td><select class="form-control" onchange="fetch_details(this.value)">
                          <option>Select</option>
                          <option>Birthday</option>
						  <option>Anniversary</option>
						  <option>Meeting</option>
						  </select></td></tr>
<tr><td>Reminders :</td>  <td><select  class="form-control"id="reminders">
                          <option>Select</option>
                          </select></td></tr>
<tr><td>Add Description :</td>  <td><textarea class="form-control" id="description" name="description"></textarea><span style="color:red;">*</span></td></tr>
<tr><td>Email-Address :</td>  <td><input type="text" class="form-control" id="email" name="calender"/></td></tr>
<tr><td>Contact No :</td>  <td><input type="text" class="form-control" id="contact" name="calender"/></td></tr>
<tr><td>SMS No :</td>  <td><input type="text" class="form-control"  name="calender"/></td></tr>
<tr><td>Recur for next :</td>  <td><input  type="checkbox"  name="7"/>7 days <input type="checkbox"  name="5"/>5 days <input type="checkbox" name="3"/> 3 days</td></tr>
<tr><td><span style="color:red;">*</span> Required Fields</td></tr>
<tr><td> <button type="button" onclick="window.location='http://localhost/RMS(php)/home.php'" class="btn btn-primary" name="back" value="back">Back</button></td>  <td> <button type="submit" class="btn btn-primary" name="confirm" value="comfirm">Confirm</button></td></tr>
</table>

</form>


</body>
</html>