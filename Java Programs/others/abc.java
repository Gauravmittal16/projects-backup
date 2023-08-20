import java.util.*;
class abc
{
public static void main(String ar[])
{
Scanner s=new Scanner("1,2,3,4,5,6");
s.useDelimiter(",");
while(s.hasNextInt())
{
int x=s.nextInt();
System.out.println(x);
}
}
}
