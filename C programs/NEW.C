#include<stdio.h>
#include<conio.h>
void main()
{
int a[10],i,j,ie;
clrscr();
printf("enter the number of elements");
for(i=0;i<=4;i++)
{
scanf("%d",&a[i]);
}
for(j=1;j<=4;j++)
{
ie=a[j];
i=j-1;
while(a[i]>ie &&i>=0)
{
a[i+1]=a[i];
i--;
}
a[i+1]=ie;
}
printf("sorted elements are ");
for(i=0;i<=4;i++)
{
printf("%d\n",a[i]);
}
getch();
}
