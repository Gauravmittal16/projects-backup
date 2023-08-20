//var fs=require('fs');

/*fs.readFile('data.json', "utf8",function(err, data)
	{
		if(err)
		{
			console.log(err);
		}
		else
		{
			console.log('data here=>',data);
			//const chngdata=JSON.parse(data);
			//console.log(chngdata.id);
		}
	});*/
var fs=require('fs');
const data=require('./data.json');
const parsed=JSON.parse(data);
for(i in parsed.studentData)
{
	parsed.studentData[i].aggregate=Number(parsed.studentData[i].aggregate);
	parsed.studentData[i].regular=Boolean(parsed.studentData[i].regular);
	for(j in parsed.studentData[i].percentages)
	{
		parsed.studentData[i].percentages[j].sub1=Number(parsed.studentData[i].percentages[j].sub1);
		parsed.studentData[i].percentages[j].sub2=Number(parsed.studentData[i].percentages[j].sub2);
		parsed.studentData[i].percentages[j].sub3=Number(parsed.studentData[i].percentages[j].sub3);
	}

}
const str=JSON.stringify(parsed);
fs.writeFile('output1.json',str,function(err)
{
	if(err)
	{
		console.log(err);
	}
	else
	{
		console.log('right');
	}
})
console.log(str);
