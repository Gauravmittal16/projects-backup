#include<stdio.h>
#include<conio.h>
void main()
{
int i,a[5]={2,3,4,5,6},e;
clrscr();
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