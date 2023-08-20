<html>
<head>
<style type="text/css">
table,td
{
height:50px;
width:40%;
font-size:20px;
font-style:Bold;
border-collapse:collapse;
background-color:lightgreen;
text-align:center;

}

</style>

</head>
<body>
<?php
session_start();
if(!isset($_SESSION['username']))
header("Location:signin.php");
?>
<?php

echo "<h2>  Hello,".$_SESSION['username']."</h2>";
echo "<h3 align='center'>  your data</h3>";

echo "<table  align='center' border='1'>
<tr >
<th>Username</th>
<th>Age</th></tr>";
echo "<tr>";
echo "<td width:40% height:50px>".$_SESSION['name']."</td>";
echo "<td width:40% height:50px>".$_SESSION['age']."</td>";
echo "</tr>";
echo "</table>";
echo "<a href='logout.php'>Logout</a>";
?>

</body>
</html>