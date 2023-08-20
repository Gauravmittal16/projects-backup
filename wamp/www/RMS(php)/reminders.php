<?php
$subject=$_GET['subject'];
$c1=array('Friend','Brother','Cousins');
$c2=array('Uncle','Aunt','Brother in Law');
$c3=array('Home','Society','Office');
if($subject=="Birthday")
{
	foreach($c1 as $c)
	{echo "<option>$c</option>";}
}
else if($subject=="Anniversary")
{
	foreach($c2 as $c)
	{echo "<option>$c</option>";}
}
else if($subject=="Meeting")
{
	foreach($c3 as $c)
	echo "<option>$c</option>";
}
else if($subject=="Email")
{
	echo "<tr><td>Email: </td><td><input type="text" class="form-control" ></td></tr>";
} 
else if($subject=="SMS")
{
	echo "<tr><td>SMS: </td><td><input type="text" class="form-control" ></td></tr>";
} 
else if($subject=="Voice call")
{
	echo "<tr><td>Voice number: </td><td><input type="text" class="form-control" ></td></tr>";
} 
else{
	
}
	

?>