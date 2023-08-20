import java.util.*;
import java.io.*;
class Account
{private int bal;
	public Account(int bal)
	{this.bal=bal;
	}
	public boolean isSufficientBalance(int w)
	{
		if(bal>w)
		{return(true);
		}
		else
		{
			return(false);
		}
	}
	public void withdraw(int amt)
	{
	bal=bal-amt;
	System.out.println("withdraw amount is:"+amt);
	System.out.println(" Current balance  is:"+bal);
	}
	
}
class Customer implements Runnable
{
	private Account account;
	public Customer(Account account)
	{
	this.account=account;

	}
	public void run()
	{ 

	
	synchronized(account)
	{
		System.out.println("Enter your amount to withdraw:");
		
		Scanner kb =new Scanner(System.in);
		int amt =kb.nextInt();
		
		if(account.isSufficientBalance(amt))
		{
		   account.withdraw(amt);
		}
		else{
		
		System.out.println("Insufficient Balance !");
		}
	}
	}
}
public class synchronization
{
	public static void main(String args[])
	{
		Account a1=new Account(1000);
		Customer c1=new Customer(a1);
		Customer c2=new Customer(a1);
		
		
		Thread t1=new Thread(c1);
		Thread t2=new Thread(c2);
		t1.start();
		t2.start();
	   
}
}
		
		
	
		

	
	
	
	
	
	
