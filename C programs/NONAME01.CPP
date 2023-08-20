#include<stdio.h>
#include<conio.h>
#include<process.h>
void main()
{
int f;
char g;
clrscr();
do
{
printf("gaurav");
printf("go further");
scanf("%d",&f);
  if(f==2)
  {
clrscr();
printf("mittal");
printf("continue ?y/n");
scanf("%c",&g);
}
while(g=='y');
exit(0);
getch();
}

