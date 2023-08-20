function route(handle,pathname,response,reviewData) {
	// body...
	console.log("Routing a request for"+pathname);
	if(typeof handle[pathname]=='function')
	{
		handle[pathname](response,reviewData);
	}
	else{
		response.writeHead(404,{"content-Type":"text/plain"});
		response.write("Page Not Found !");
		response.end();
	}
}
exports.route=route;