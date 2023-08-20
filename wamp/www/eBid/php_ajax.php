<?php
$mobile=8755969548 ;
$sum=0;
$mobile=$mobile/99;
echo $mobile;
for($i=0;$i<=4;$i++)
{
	$sum=$sum+$mobile%10;
	$mobile=$mobile/10;
}
echo " ".$sum;
?>