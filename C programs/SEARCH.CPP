#include<stdio.h>
#include<conio.h>
void main()
{
int i,a[5],e;
clrscr();
printf("enter the elements in an array");
for(i=0;i<5;i++)
{
scanf("%d",&a[i]);
}
printf("enter your no.");
scanf("%d",&e);
for(i=0;i<5;i++);
{
if(a[i]==e)
{
printf("no.found");
i=i+6;
}
}
printf("not found");
getch();
}