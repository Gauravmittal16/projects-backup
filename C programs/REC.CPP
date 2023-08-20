#include<stdio.h>
#include<conio.h>
void main()
{
int i,n,m,g;
clrscr();
printf("enter");
scanf("%d",&n);
for(i=1;i<=n;i++)
{
m=i;
for(g=1;g<=m;g++)
{
printf("%d",i);
}
printf("\n");
}
getch();
}
