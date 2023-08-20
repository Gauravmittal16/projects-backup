function load()
{
var xhttp=new XMLHttpRequest();

xhttp.onreadystatechange=function()
{
if(this.readystatechange==4 && this.status==200)
{

document.getElementById("demo").innerHTML=this.responseText;

}
};
xhttp.open("GET","C:\Users\user\ajax",true);
xhttp.send();

}