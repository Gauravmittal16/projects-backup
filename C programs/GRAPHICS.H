#include<stdio.h>
#include<conio.h>
void main()
{
int i;
char password[10],username[10],ch;
printf("enter password");
for(i=0;i<8;i++)
{
ch=getch();
password[i]=ch;
ch='*';
printf("%c",ch);
}
password[i]='\0';
getch();
}