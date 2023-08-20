<?php
$state=$_GET['state'];
$c1=array('Amritsar','behindhand','berg');
$c2=array('sonatina','antipathy','purview');
$c3=array('Agra','Oligarch','meeter');
if($state=="Punjab")
{
	foreach($c1 as $c)
	echo "<option>$c</option>";
}
else if($state=="Haryana")
{
	foreach($c2 as $c)
	echo "<option>$c</option>";
}
else if($state=="Uttar Pradesh")
{
	foreach($c3 as $c)
	echo "<option>$c</option>";
}
else 
	echo "<option>Select state first</option>";

?>