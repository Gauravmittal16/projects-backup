<html>
<head>
<style type="text/css">
body
{
	background-color:whitecream;
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
}
table{
	border:1px solid black;
     }
	 th{  font-weight:BOLD;
		 text-align:center;
		 font-family:Arial Rounded MT;
		 font-size:30px;
	 }
	
	 


</style>
</head>
<body>
<h1 align='center'>Mywebsite.com</h1>
<form action="pcnm.php" method=GET">
<table align='center' style="top:100px">
<tr><th colspan="2"> My Account </th></tr>
<tr><td>Username:</td><td><input type="text" class="modify" placeholder="username" name="username"></td></tr>
<tr><td>Password:</td><td><input type="password" class="modify" placeholder="password" name="password"></td></tr>
<tr><td colspan="2" style="text-align:center"><input type="submit" value="Login In"></td></tr>
</table>
</form>
</body>
</html>
  
