// A bubble sort for Strings.
class pro_SortString
{
static String arr[] = {"Now", "is", "the", "time", "for", "all", "good", "men",
"to", "come", "to", "the", "aid", "of", "their", "country"};
public static void main(String args[])
{
for(int i = 0; i < arr.length; i++)
{
for(int j = 0; j < arr.length-1-i; j++)
{
if(arr[j].compareTo(arr[j+1])> 0)
{
String t = arr[j];
arr[j] = arr[j+1];
arr[j+1] = t;
}
}
}
for(int i = 0; i < arr.length; i++)
System.out.println(arr[i]);

}
}