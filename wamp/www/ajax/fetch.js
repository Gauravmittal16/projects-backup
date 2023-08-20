function fetchdetails(str)
{
	var req=new XMLHttpRequest();
	req.open("get","http://localhost/ajax/details.php?sub="+str,true);
	req.send();
	req.onreadystatechange=function(){
		if(req.readyState==4&&req.status==200)
		{
			document.getElementById("remind").innerHTML=req.responseText;
			
		}
	};
	
	
	
}