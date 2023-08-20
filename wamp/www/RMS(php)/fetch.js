function fetch_details(str)
{
var req=new XMLHttpRequest();
req.open("get","http://localhost/RMS(php)/reminders.php?subject="+str,true);
req.send();
req.onreadystatechange=function()
{
	if(req.readyState==4&&req.status==200)
	{
		document.getElementById("reminders").innerHTML=req.responseText;
	}
};
}


//set reminder'ds file fetching data
function fetch_subject(str)
{
var req=new XMLHttpRequest();
req.open("get","http://localhost/RMS(php)/reminders.php?subject="+str,true);
req.send();
req.onreadystatechange=function()
{
	if(req.readyState==4&&req.status==200)
	{
		document.getElementById("types").innerHTML=req.responseText;
	}
};
}