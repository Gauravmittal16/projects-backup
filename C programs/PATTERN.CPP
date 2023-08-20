#include<stdio.h>
#include<conio.h>
void main()
{
int i,m=1,n,k;
clrscr();
printf("enter base of the your pattern");
scanf("%d",&n);
k=n;
for(i=1;i<=n;i++)
{
printf("\n");
for(i=1;i<k;i++)
{
printf(" ");
}
for(i=1;i<=m;i++)
{
printf("*");
}
m=m+2;
k--;
}
getch();
}

