var fs=require('fs');
const data=require('./dt.json');
const parsed=JSON.parse(data);
console.log(parsed);
for(i in parsed)
{
	console.log(parsed.persons.Name);
	parsed.persons.EmployeeID=Number(parsed.persons.EmployeeID);
	parsed.persons.Experience=Number(parsed.persons.Experience);
	
}
const str=JSON.stringify(parsed);
fs.writeFile('out1.json',str,function(err)
{
	if(err)
	{
		console.log(err);
	}
	else
	{
		console.log('correcty');
	}
});
