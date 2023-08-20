function fetchdata(str)
{
var req=new XMLHttpRequest();
	req.open("get","http://localhost/ajax/php_file.php?opt="+str,true);
	req.send();
	req.onreadystatechange=function(){
		if(req.readyState==4&&req.status==200)
		{
			document.getElementById("changeddata").innerHTML=req.responseText;
			
		}
	};


}