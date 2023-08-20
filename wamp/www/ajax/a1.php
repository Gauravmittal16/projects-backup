
<?php 


?>

<html>
<head>
<script type="text/javascript">
function fetchdetails(str)
{
var xhttp=new XMLHttpRequest();
xhttp.onreadystatechange=function()
{
  if(xhttp.readyState==4 && xhttp.status==200)
    {
	 document.getElementById("remind").innerHTML=this.responseText;
	 }
}
xhttp.open("GET","details.php?sub="+str,true);
xhttp.send();
}
</script>
</head>
<body>
<form align='center' action="#" method="get">
<div>
<select onchange="fetchdetails(this.value)">
<option>agra</option>
<option>allahbad</option>
<option>aligarh</option>
<option>amanpur</option></select>
</div>
<div>
<select id="remind">
<option>first select district</option>
</select>
</div>
</form></body>
</html>