import java.util.*;

public class counters
{
	public static void main(String args[])
	{
		int n;
		int chars=0,spaces=0;
		Scanner scan=new Scanner(System.in);
		String s1=scan.nextLine();
		for(int i=0;i<s1.length();i++)
		{
			if(s1.charAt(i)>='A'&&s1.charAt(i)<='Z' || s1.charAt(i)>='a'&&s1.charAt(i)<='z')
			{
				chars++;
			}
			else 
			{
				spaces++;
			}
		}
		System.out.println("Number of Characters:"+chars);
		System.out.println("Number of Spaces:"+spaces);

	}
}