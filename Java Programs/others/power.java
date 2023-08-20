import java.util.*;
 
class power
{
	public static void main(String []args)
	{
		double n,a,f,result;
		int i,p;
		System.out.println("Enter your number :");
		Scanner k=new Scanner(System.in);
		n=k.nextDouble();
		System.out.println("Enter power of your number:");
		p=k.nextInt();
		a=Math.pow(n,p);
		System.out.println("Answer is:"+a);
		System.out.println("Divide by:");
		f=k.nextDouble();
		result=a%f;
		System.out.println("Answer is:"+result);
		
		
		
		
		
	}
}	