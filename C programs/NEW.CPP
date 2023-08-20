#include<stdio.h>
#include<conio.h>
#include<process.h>
void main()
{
int t;
char b;
clrscr();
do
{
printf("hii gaurav");
printf("move on");
scanf("%d",&t);
if(t==2)
{
printf("go further");
scanf("%c",&b);
}
else
{printf("gb");}
}
while(b=='y');
exit(0);
getch();
}

