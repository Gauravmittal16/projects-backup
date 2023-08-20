class xyz
{
static int ch=0;
public xyz()
{
ch++;
}
public void show()
{
System.out.println(ch);
}

}
class check
{
public static void main(String ar[])
{
  
xyz n=new xyz();
xyz m=new xyz();
n.show();

}
}