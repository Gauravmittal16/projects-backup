#include<stdio.h>
#include<conio.h>
void main()
{
clrscr();
int n,a[10]={0,1,2,3,4,5,6,7,8,9},i,flag=0 ;
printf("enter the no to be search");
scanf("%d",&n);
for(i=0;i<=9;i++)
{
if(a[i]==n)
{
printf("element is found at%d position ",i+1);
flag=flag+1;
}
}
if(flag==0)
{
printf("not found");
}
getch();
}
