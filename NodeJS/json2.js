const data=require('./data1.json');

console.log(data);

for(i in data.FavoriteFood)
{
	console.log(data.FavoriteFood[i].Name);
}
for(i in data.FavoriteFood)
{
	data.FavoriteFood[i].Price=55;
}
console.log(data);
var fs=require('fs');
const str=JSON.stringify(data);
fs.writeFile('data1.json',str,function(err)
	{
		if(err)
		{
			console.log(err);
		}
		else
		{
			console.log('YES');
		}
	});
