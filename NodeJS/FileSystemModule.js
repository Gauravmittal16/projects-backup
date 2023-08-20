//Returning chunks of dataread Method 1.
var fs=require('fs');

var rstream=fs.createReadStream('in.txt');

var dataLength=0;

rstream.on('data', function (chunk)

{
	dataLength+=chunk.length;

}).on('end', function ()
{
	console.log(dataLength);
});


//Returning chunks of dataread Method 2.
var fs = require("fs");
var readStream = fs.createReadStream("in.txt");

readStream .on("data", function(data) {
    var chunk = data.toString();
    console.log(chunk.length);
});

//Method 1 of reading file

var fs=require('fs');

fs.readFile('in.txt', function(err, data)
	{
		if(err)
		{
			console.log(err);
		}
		else
		{
			console.log(data.toString());
		}
	});

//Method 2
var data=fs.readFileSync('in.txt');
console.log(data.toString());

// Pipes.
var fs=require('fs');
var readableStream=fs.createReadStream('in.txt');
var writableStream=fs.createWriteStream('out.txt');
readableStream.pipe(writableStream);