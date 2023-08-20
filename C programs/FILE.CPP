#include<stdio.h>
#include<conio.h>
void main()
{
int d;
char n;
clrscr();
printf("gaurav\n");
do
{
printf("gaurav mittal\n");
printf("go further press 2");
scanf("%d",&d);
if(d==2)
{
clrscr();
printf("welcome\n");
printf("continue?y/n");
scanf("%c",&n);
fflush(stdin);
}
}
while(n!='y');
getch();
}