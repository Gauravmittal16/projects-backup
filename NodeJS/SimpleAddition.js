var ats=require('./modules');
var readline=require('readline');
var r1=readline.createInterface({
input: process.stdin,
output: process.stdout
});
r1.question('Enter your input data',(answer1)=>{
	r1.question('Enter second data',(answer2)=>{
	ats.add(answer1,answer2);
ats.multiply(answer1,answer2);		
	});
});

//



//*/
