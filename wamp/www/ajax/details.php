<?php
$sub=$_GET['sub'];
$c1=array('grey','white','blue');
$c2=array('silver','black','red');
$c3=array('purple','orange','yellow');
if($sub=="agra")
{
	foreach($c1 as $c)
	{
		echo "<option><$c</option>";
	}
}
else if($sub=="allahabad")
{
	foreach($c2 as $c)
	{
		echo "<option><$c</option>";
	}
}
if($sub=="agra")
{
	foreach($c3 as $c)
	{
		echo "<option><$c</option>";
	}
}
else {
	echo "<option>$c</option>";
}


?>