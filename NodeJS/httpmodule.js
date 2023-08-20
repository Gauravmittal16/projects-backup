//Creating server.
var http=require('http');
var server=http.createServer(function(request,response)
	{
		response.writeHead(200,{"content-Type":"text/plain"});
		response.write("Hello world");
		response.end();
	});
server.listen(8000);



//
var http=require('http');
var fs=require('fs');
var url=require('url');
http.createServer(function(request,response)
	{
		var pathname=url.parse(request.url).pathname;
		fs.readFile(pathname.substr(1), function(error, data)
			{
				if(error)
				{
					console.err('error occurred',error);
					response.writeHead(404,{"content-Type":"text/plain"});
				}
				else
				{
					response.writeHead(200,{"content-Type":"text/plain"});
					response.write(data.toString);

				}
			});
		response.end();
	}).listen(8000);

//Another way of routing in http.

var http=require('http');
var server=http.createServer(function(request,res)
	{
		if(request.url=='/completed')
		{
	    res.writeHead(200,{"content-Type":"text/plain"});
		res.write("Hi Welcome");
		var querystring=require('querystring');
	var obj=querystring.parse("/completed?name=gduyfj&lname=uhdfuf");
		console.log(obj);
		res.end();
		}
		else if(request.url=='/hello')
		{
	    res.writeHead(200,{"content-Type":"text/html"});
		 
            res.write("<form method='POST' action='/completed'>");
            res.write("<input type='text' name='data1'/><hr/>");
            res.write("<input type='text' name='data2'/><hr/>");
            res.write("<input type='text' name='data3'/><hr/>");
            res.write("<input type='file' name='data4'/><hr/>");
            res.write("<input type='submit' value='Send'/>");
            res.end("</form>");
		res.end();
		
		}
		else
		{
	    res.writeHead(404,{"content-Type":"text/plain"});
		res.write("404 Page Not Found");
		res.end();
		}
		
	});
server.listen(8000);

//2nd way using switch.
var http = require('http');
http.createServer( function(request, response) {
    var data = "";
    if(request.method == 'POST') {
        request.on('data', function(chunk) {
            console.log('Received data:', chunk.toString());
            data += chunk.toString();
        });
        request.on('end', function() {
            console.log('Complete data:', data);
        });
    }
    switch (request.url) {
        case "/":
            response.writeHead(200, {'Content-Type': 'text/html'});
            response.write("<a href='/form'>Go to form</a>");
            response.end();
            break;
        case "/form" :
            response.writeHead(200, {'Content-Type': 'text/html'});
            response.write("<form method='POST' action='/completed'>");
            response.write("<input type='text' name='data1'/><hr/>");
            response.write("<input type='text' name='data2'/><hr/>");
            response.write("<input type='text' name='data3'/><hr/>");
            response.write("<input type='file' name='data4'/><hr/>");
            response.write("<input type='submit' value='Send'/>");
            response.end("</form>");
            break;
        case "/completed":
            console.log(request);
            response.writeHead(200, {'Content-Type': 'text/html'});
            response.write(data);
            
            response.end();
            break;
        default:
            response.writeHead(403, {'Content-Type': 'text/html'});
            response.end("Forbidden");
            break;
    }

}).listen(8000);

// Getting HTML data from public host.
const https = require('https');

const options = {
  hostname: 'en.wikipedia.org',
  port: 443,
  path: '/',
  method: 'GET'
};

const req = https.request(options, (res) => {
 console.log('statusCode:', res.statusCode);
  console.log('headers:', res.headers);

  res.on('data', (d) => {
    fs.writeFile('Nodejs.html', data, (err) => {
  if (err) throw err;
  console.log('The file has been saved!');
});
  });
});

req.on('error', (e) => {
  console.error(e);
});
req.end();

//Posting data on server and read on file.
const http=require('http');
const { parse }=require('querystring');
var fs=require('fs');
const server=http.createServer((req,res)=>
	{
		if(req.method==='POST')
		{
			let body = '';
    req.on('data', chunk => {
        body += chunk.toString();
    });
    req.on('end', () => {
       
        var data=parse(body);
        console.log(data);
        vara data1=JSON.stringify(body);
         fs.appendFile('in.txt', data1, (err) => {
  if (err) throw err;
 
});
        res.end('ok');
    });
		}
		else
		{
			res.end('<html>'+
	'<body>'+
	'<form action="/" method="post">'+
	'<input type="text" name="fname"/>firstname<br>'+
	'<input type="number" name="age"/>age<br>'+
	'<input type="text" name="Sname"/>lastname<br>'+
	'<input type="submit" value="Save"/>'+
	'</form>'+
	'</body>'+
	'</html>');
		}
	});
server.listen(8000);