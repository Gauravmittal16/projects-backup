<?php

echo "Creating connection in php</br>";
$conn=mysqli_connect("localhost","root","8755");
if(!$conn)
{
die("not connectd".mysqli_conect_error());
}
echo "connected successfully";
echo "Now creating queries in mysql";
mysqli_select_db($conn,'mywebdata');
$q="insert into tb1(name,age,password) values('tanya','21','gaydygy')";
$i=mysqli_query($conn,$q);
echo "data inserted";
mysqli_close($conn);
?>