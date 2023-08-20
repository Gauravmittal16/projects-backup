#include<stdio.h>
#include<conio.h>
void main()
{
int mp,i,n,sum=0;
clrscr();
printf("enter the no ");
scanf("%d",&n);
mp=n;
while(mp!=0)
{
sum=sum*10;
sum=sum+mp%10;
mp=mp/10;
}
if(sum==n)
{
printf("hence the no. is palindrome");
}
else
{
printf("the no is not palindrome");
}
getch();
}

