
function add(answer1,asnwer2)
{
	var sum=Number(answer1)+Number(asnwer2);
	console.log("addition applied"+sum);
}

function multiply(answer1,asnwer2)
{
	var sum=Number(answer1)*Number(asnwer2);
	console.log("multiplication applied"+sum);
}

module.exports.add=add;
module.exports.multiply=multiply;