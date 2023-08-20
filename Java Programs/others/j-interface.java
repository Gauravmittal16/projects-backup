interface inf
{
abstract public void one();
abstract public void two();
}
class any implements inf
{
public void one()
{
System.out.println("number one");
}
public void two()
{
System.out.println("number two");
}
public void some()
{
System.out.println("some code");
}
}
class j-interface
{
public static void main(String[] args)
{
any a=new any();
a.one();
a.two();
a.some();
}
}