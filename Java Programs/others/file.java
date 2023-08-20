import java.io.*;
import java.util.*;
class file
{public static void main(String ar[])throws IOException
{
File f=new File("abc.txt");
Scanner s=new Scanner(f);
while(s.hasNextLine())
{
System.out.println(s.nextLine());
}
}
}