import pack2.arit;
import java.util.*;
public class add_x
{
public static void main(String args[])
{int a,b;
arit v=new arit();
Scanner k=new Scanner(System.in);
System.out.println("Enter two numbers");
a=k.nextInt();
b=k.nextInt();
v.sub(a,b);
v.add(a,b);
}
}