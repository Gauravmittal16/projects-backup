<?php
$ver=$_GET['val'];
$connection=mysqli_connect("localhost","root","8755");
mysqli_select_db($connection,'bidder');
                                                 // ADMIN validation 
if($ver==3){
	$adpass=$_POST['adpass'];
	$query3="select *from admin where password='$adpass'";	
$result=mysqli_query($connection,$query3);
$num=mysqli_num_rows($result);
if($num==1)
{session_start();
for($i=1;$i<=$num;$i++)
{
	$row=mysqli_fetch_array($result);
	$row['name'];    
}
$_SESSION['name']=$row['name'];   
header("Location:admin.php");
}
else{

	header("Location:home.php?error=1");
}	
}
                                                 // DEALER validation 
else if($ver==2)
{$dname=$_POST['dealername'];	
$dpass=$_POST['dealerpass'];
$query2="select *from dealers where password='$dpass'";
$result=mysqli_query($connection,$query2);
$num=mysqli_num_rows($result);
if($num==1)
{
	
for($i=1;$i<=$num;$i++)
{
	$row=mysqli_fetch_array($result);
	$row['name'];  
	$row['mobileno'];  
	$row['address'];  
	$row['image'];
	
}
if($dname==$row['name'])
{
session_start();
$_SESSION['dname']=$row['name'];    
$_SESSION['dmbn']=$row['mobileno'];    
$_SESSION['dadr']=$row['address']; 
$_SESSION['dimage']=$row['image'];
header("Location:dealerlog.php");
}else{ header("Location:home.php?error=3");}
}
else{

	header("Location:home.php?error=3");
}
}
                                                        // USER validation 
else if($ver==1)
{
$name=$_POST['username'];	
$uspass=$_POST['userpass'];
$query1="select *from users where password='$uspass'";
$result=mysqli_query($connection,$query1);
$num=mysqli_num_rows($result);
if($num==1)
{
	
for($i=1;$i<=$num;$i++)
{
	$row=mysqli_fetch_array($result);
	$row['name'];  
	$row['mobileno'];  
	$row['Address'];  
	$row['image'];
	
}
if($name==$row['name'])
{
session_start();
$_SESSION['uname']=$row['name'];    
$_SESSION['mbn']=$row['mobileno'];    
$_SESSION['adr']=$row['Address']; 
$_SESSION['image']=$row['image'];  
header("Location:another1.php");
}else{ header("Location:home.php?error=2");}
}
else{

	header("Location:home.php?error=2");
}
}
                                             // SIGN UP STARTS HERE 
else if($ver==4){
	$nname=$_POST['nname'];
	$nmbn=$_POST['nmbn'];
	$nadr=$_POST['nadr'];
	$npass=$_POST['npass'];
	$sum=0;
	$nmbn=$nmbn/99;
	for($i=0;$i<=4;$i++)
	{
		$sum=$sum+$nmbn%10;
		$nmbn=$nmbn/10;
	}
	$fusername=$nname.$sum;
	$query4="insert into users (name,password,mobileno,Address,Username) values('$nname','$npass','$nmbn','$nadr','$fusername')";
	$r=mysqli_query($connection,$query4);
	session_start();
	mysqli_close($connection);
	$_SESSION['uname']=$nname;
	$_SESSION['mbn']=$nmbn;
	$_SESSION['adr']=$nadr;
	$_SESSION['fusrname']=$fusername;
	header("Location:another1.php");	
}
else if($ver==5)
{
	$dlname=$_POST['dlname'];
	$dlmbn=$_POST['dlmbn'];
	$dladr=$_POST['dladr'];
	$dlpass=$_POST['dlpass'];
	$query5="insert into dealers (name,mobileno,password,address) values('$dlname','$dlmbn','$dlpass','$dladr')";
	$r=mysqli_query($connection,$query5);
	session_start();
	mysqli_close($connection);
	$_SESSION['dname']=$dlname;
	$_SESSION['mbn']=$dlmbn;
	$_SESSION['adr']=$dladr;
	header("Location:dealerlog.php");	
}
?>
