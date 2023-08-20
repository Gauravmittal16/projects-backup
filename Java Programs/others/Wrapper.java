class Wrapper
{
	public static void main(String argv[])
	{
		int ii=10;
		Integer io=new Integer(ii); //b to o
		System.out.println(io);

		int j=io.intValue(); // o to b
		System.out.println(j);
		String str=io.toString();
		System.out.println(str);

		Double d=new Double(10.3);
		d=Double.valueOf(str); // str to num obj
		System.out.println(d);
		Double d1 = new Double(1/0.);
		Double d2 = new Double(0/0.);
		System.out.println(d1 + ": " + d1.isInfinite() + ", " + d1.isNaN());
	System.out.println(d2 + ": " + d2.isInfinite() + ", " + d2.isNaN());

	int num = 19648;
	System.out.println(num + " in binary: " +	Integer.toBinaryString(num));
	System.out.println(num + " in octal: " +	Integer.toOctalString(num));
	System.out.println(num + " in hexadecimal: " + Integer.toHexString(num));

	char a[] = {'a', 'b', '5', '?', 'A', ' '};
	for(int i=0; i<a.length; i++)
	{
	if(Character.isDigit(a[i]))
	System.out.println(a[i] + " is a digit.");
	if(Character.isLetter(a[i]))
	System.out.println(a[i] + " is a letter.");
	if(Character.isWhitespace(a[i]))
	System.out.println(a[i] + " is whitespace.");
	if(Character.isUpperCase(a[i]))
	System.out.println(a[i] + " is uppercase.");
	if(Character.isLowerCase(a[i]))
	System.out.println(a[i] + " is lowercase.");
}
}
}