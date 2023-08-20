#include<stdio.h>
#include<conio.h>
void main()
{
int i,n,m,c=1;
clrscr();
printf("enter the no ");
scanf("%d",&n);
i=n;
while(i<=n &&i!=0)
{
c=c*i;
i--;
}
printf("%d",&c);
getch();
}