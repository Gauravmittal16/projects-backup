#include<stdio.h>
#include<conio.h>
void main()
{
clrscr();
int a[5],i,temp,j;
printf("enter the numbers");
for(i=0;i<=4;i++)
scanf("%d",&a[i]);
for(j=1;j<=5;i++)
{
temp=a[j];
i=j-1;
while(a[i]<temp &&i>=0)
{
a[i+1]=temp;
i--;
}
a[i+1]=a[i];
}
for(i=0;i<=4;i++)
{printf("%d",a[i]);
printf("\n");
}
getch();
}

