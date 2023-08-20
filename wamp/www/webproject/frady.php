<html>
<head>
<style type="text/css">
h1{
color:yellow;
height:110px;
font-size:40px;}

body
{
	background-image:url("diffuse-light.jpg");
}
.modify{
width:200px;
height:30px;

}
table,td{
	height:80px;
	width:30%;
	font-size:20px;
	font-family:comic sans MS;
	top:100px;
	color:white;
	
}
table{
	border:1px solid white;
     }
	 th{  font-weight:BOLD;
		 text-align:center;
		 font-family:Arial Rounded MT;
		 font-size:30px;
	         color:white;}
	 a
	 {
	 text-decoration:none;
	 font-size:16px;
	 font-family:calibri;
	 color:lightblue;
	 
	 }
	 a:hover
	 {
	 color:red;
	 text-decoration:underline;
	 
	 
	 }
	 
	 
	 .sub{width:100px;
	 height:40px;
	 border:1px solid green;
	 color:white;
	 }
	 .sub:hover{
	 
	 background-color:blue;
	 
	 }
	 
	
	
	
	 </style>
	 <script type="text/javascript">
	 function van()
	 {
	 
	 
	 
	 
	 }
	 
	 
	 </script
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
</head>
<body>
<?php
if(isset($GET['e'])==true)
{
 echo " o soory";
}


?>
<h1 align='center'>Mywebsite.com</h1>
<form action="pcnm.php" method=GET" onsubmit=" return check(event);">
<table align='center' style="top:100px">
<tr><th colspan="2"> My Account </th></tr>
<tr><td>Username:</td><td><input type="text" class="modify" placeholder="username"  name="username"></td></tr>
<tr><td>Password:</td><td><input type="password" class="modify" placeholder="password" name="password"></td></tr>
<tr><td style="text-align:center"><a href="gdyjgr.html" >  Forgot password?</a></td><td  style="text-align:center"><input  class="sub"type="submit" value="Login In" style="background-color:green"></td></tr>
</table>
</form>
<script type="text/javascript">
function check(e)
{
var result=true;
var i=document.getElementsByTagName("input");
for(x=0;x<i.length;x++)
{
if(i[x].value.length==0)
{alert(' Please fill required credentials');
result=false;
return(result);}
}
var x=confirm("Do you want to continue ?");
if(x==true)
{
}
else
{alert('cancelled');
e.preventDefault();
}
return(result);
}
</script>










</body>
</html>
  
