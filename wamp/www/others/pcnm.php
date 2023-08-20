<html>
<head>
<style type="text/css">



</style>

</head>
<body>
<?php
$password=$_GET['password'];
$con=mysqli_connect("localhost","root","8755");
if(!$con)
{
die("not connectd".mysqli_conect_error());
}

mysqli_select_db($con,'mywebdata');
$q="select *from tb1 where password='$password'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
echo "<table  align='center' border='1'>
<tr >
<th>Username</th>
<th>Age</th></tr>";
for($i=1;$i<=$num;$i++)
{
	$row=mysqli_fetch_array($result);
	echo "<tr>";
	echo "<td width:40% height:50px>".$row['name']."</td>";
	echo "<td width:40% height:50px>".$row['age']."</td>";
	echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
   
</body>
</html>