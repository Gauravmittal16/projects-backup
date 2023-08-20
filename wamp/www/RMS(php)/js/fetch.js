function fetch_details(str)
{
var req=new XMLHttpRequest();
	req.open("get","http://localhost/RMS(php)/details.php?opt="+str,true);
	req.send();
	req.onreadystatechange=function(){
		if(req.readyState==4&&req.status==200)
		{
			document.getElementById("remindrs").innerHTML=req.responseText;
			
		}
	};


}