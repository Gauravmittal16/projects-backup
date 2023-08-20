class pro_string
{
	public static void main(String argv[])
	{
		//Constructors of String
String  s1=new String();
s1="vikas";
System.out.println(s1);

String  s2=new String("vikky"); // String s2="vikky";
System.out.println(s2);

char ch[]={'a','b','c'};
String  s3=new String(ch);
System.out.println(s3);

char chars[] = { 'a', 'b', 'c', 'd', 'e', 'f' };
String s4 = new String(chars, 2, 3); //pos, no of char
System.out.println(s4);

byte alpha[]={65,66,67,68,69,70};
String  s5=new String(alpha);
System.out.println(s5);

String  s6=new String(alpha,2,4);
System.out.println(s6);

String s7=new String(s6);
System.out.println(s7);

String s8=s7;
System.out.println(s8);

System.out.println(s8.length());
//Methods
String s="i am a Java student of Java Class";
System.out.println(s.charAt(3));

char a[]=new char[20];
s.getChars(2,9,a,0);  //start,end,array,array_start
for(int i=0;i<a.length;i++)
System.out.println(a[i]);

byte aa[]=new byte[20];
aa=s.getBytes();  //start,end,array,array_start
for(int i=0;i<aa.length;i++)
System.out.println(aa[i]);

a=s.toCharArray();
for(int i=0;i<a.length;i++)
System.out.println(a[i]);

System.out.println(s.startsWith("i am"));
System.out.println(s.endsWith("lass"));

String o="vikas";
String m="amit";
if(o.compareTo(m)>0)
System.out.println(o+"is bigger");
else if(o.compareTo(m)<0)
System.out.println(m+"is bigger");
else
System.out.println("equal");

System.out.println(s.indexOf("Java"));
System.out.println(s.indexOf("Java",8));
System.out.println(s.lastIndexOf("Java"));

System.out.println(s.substring(3,10));

System.out.println(s.replace('a','m'));

System.out.println(s.toUpperCase());


}
}

