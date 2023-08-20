abstract class abst
{
abstract void abc ();
void name()
{
System.out.println("hello");
}
}
class abst_sub extends abst
{
void abc()
{
System.out.println("some message");
}
}
class pre_abstract
{
public static void main(String []args)
{
abst_sub tt=new abst_sub();
  tt.abc();
  tt.name();
}
}