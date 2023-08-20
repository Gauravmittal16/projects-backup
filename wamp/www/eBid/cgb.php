<?php
$dt='24/09/2019';
$date = DateTime::createFromFormat('d/m/Y',$dt);
 $dtf=$date->format('Y-m-d');
echo $dtf;
?>