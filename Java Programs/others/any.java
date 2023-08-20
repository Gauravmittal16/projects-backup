import java.util.*;
class a
{
protected int p,c,m;
protected String name;
public void read()
{
System.out.println("Enter your name");
Scanner k=new Scanner(System.in);
name=k.next();
System.out.println("Enter your marks of p,c,m");
p=k.nextInt();
c=k.nextInt();
m=k.nextInt();
}
}
class b extends a
{
private int sum;
public void show()
{
sum=p+c+m;
System.out.println("total marks are:"+sum);
 
}
}
class any
{
public static void main(String arg[])
{
b t=new b();
t.read();
t.show();
}
}
