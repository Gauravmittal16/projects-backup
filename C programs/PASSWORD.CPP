#include<stdio.h>
#include<conio.h>
void main()
{
char password[10],username[10],ch;
int i;
clrscr();
printf("Create your password(at least 6 characters)");
for(i=0;i<=6;i++)
{
ch=getch();
password[i]=ch;
ch='*';
printf("%c",ch);
}
}
getch();



