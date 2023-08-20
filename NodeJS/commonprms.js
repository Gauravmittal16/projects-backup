// Largest Palindrome od 3 digit multiple.
function largestPalindrome(){

    var arr = [];    
    for(var i =999; i>100; i--){
        for(var j = 999; j>100; j--){
            var mul = j*i;
            if(isPalindrome(mul)){
                arr.push(j * i);
            }
        }
    }

    return Math.max.apply(Math, arr);
}
function isPalindrome(num)
{
	var rem;
	var temp=0;
	var tp=num;
	while(num>0)
	{
		rem=num%10;
		temp=temp*10+rem;
		num=parseInt(num/10);
	}
	
	if(temp==tp)
	{
		return true;
	}
	else
	{
		return false;
	}
}
console.log(largestPalindrome());

//Evenly divisble number

function Evenly()
{
	var flag=false;
	var num=2520;
	while(flag==false)
	{
		var isDivide=true;
		num+=2520;
		for(var i=11;i<=20;i++)
		{
			if(num%i!=0)
			{
				isDivide=false;
				break;
			}
		}
		if(isDivide==true)
		{
			flag=true;
		}
	}
	return num;
}
console.log(Evenly());

//pythogorean triplet

function pythogorean()
{
	var sum=1000;
	for(var a=1;a<=sum/3;a++)
	{

		for(var b=a+1;b<=sum/2;b++)
		{
			c=sum-a-b;
			if(a*a+b*b==c*c)
			{

				return a*b*c;
			}
		}
	}
}
console.log(pythogorean());

// Largest Prime Factor.

function largestPrimeFactor(num)
{
	var i;
	var co=num;

	for(i=2;i<=co;i++)
	{
		if(co%i==0)
		{
			co/=i;
			i--;
		}
	}
	return i;
}
console.log(largestPrimeFactor(600851475143));

//nth Prime Position
console.log(PrimeFactor());
function PrimeFactor()
{
	var found=false;
	var num=2;
	var pos=1;
	while(found==false)
	{
		num++;
		if(isPrime(num))
		{ pos++;
			if(pos==10001)
			{
				found=true;
				break;
			}
		}
	}
	return num;
}
function isPrime(num)
{
	for(var i=2;i<num;i++)
	{
		if(num%i==0)
		{
			return false;
		}
	}
	return true;
}
console.log(isPrime(10));

//Fibonacci under 4 million.
var i=1;
var j=2;
var k=0;
var sum=0;
while(i<=4000000)
{
	var k=i+j;
	if(k%2==0)
	{
	   sum=sum+k;
	}
	i=j;
	j=k;	
}
console.log(sum);

// Sum of Primes under 2 million.
function sumPrimes(num) {
  var sum = 0;
  for (var i = 2; i < num; i++) {
    if (isPrime(i)) {
      sum += i;
      
    }
  }
  return sum;
}
function isPrime(num) {
  if (num <= 1) return false;
  else if (num <= 3) return true;
  else if (num % 2 == 0 || num % 3 == 0) return false;
  var i = 5;
  while (i * i <= num) {
    if (num % i == 0 || num % (i + 2) == 0) return false;
    i += 6;
  }
  return true
}
console.log(sumPrimes(2000000));

//Sum of Squares.
function sum()
{
	var sumSquares=0;
	var squareSum=0;
	for(var i=1;i<=100;i++)
	{
		sumSquares=sumSquares+(i*i);
		squareSum=squareSum+i;
	}
	var answer=(squareSum*squareSum)-sumSquares;
	console.log(answer);
	console.log(sumSquares);
	console.log(squareSum);
}
sum();