import java.util.*;
import pack1.type;
public class Student
{
public static void main(String arg[])
{
int a,b;
Scanner k=new Scanner(System.in);
type s=new type();
System.out.println("Enter two numbers");
a=k.nextInt();
b=k.nextInt();
s.sum(a,b);
}
}