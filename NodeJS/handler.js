var querystring=require('querystring');
function home(response)
{
	console.log("executing hi handler");
	var htmlfile='<html>'+
	'<head><meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/></head>'+
	'<body>'+
	'<form action="/review" method="post">'+
	'<input type="text" name="Firstname"/><br>'+
	'<input type="text" name="Lastname"/><br>'+
	'<input type="submit" value="Save"/>'+
	'</form>'+
	'</body>'+
	'</html>';

	    response.writeHead(200,{"content-Type":"text/html"});
		response.write(htmlfile);
		response.end();
}

function review(response,reviewData)
{
	console.log("executing home handler");
	response.writeHead(200,{"content-Type":"text/plain"});
		response.write(querystring.parse(reviewData).Firstname+" is now Admin.");
		response.end();
}
exports.review= review;
exports.home= home;
