function add(a,b)
{
console.log(Number(a)+Number(b));
}
add(process.argv[2],process.argv[3]);


var os=require('os');
setTimeout(sum,2000);
function sum()
{
	var sum=0;
	for(var i=3;i<1000;i++)
	{
		if(i%3==0||i%5==0)
		{
			sum+=i;
		}
	}
	console.log(sum);
}
console.log(os.platform);


