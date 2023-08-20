#include<stdio.h>
#include<conio.h>
struct atm
{
int m,g;
char n[45];
};
void main()
{
int i;
FILE *fp;
struct atm a;
clrscr();
printf("enter your choice");
scanf("%d",&i);
switch(i)
{
case 1: fp=fopen("fn.txt","a+");
	printf("enter your name");
	scanf("%s",&a.n );
	printf("eydkd");
	scanf("%d",&a.m);
	fprintf(fp,"%d  %s",a.m,a.n);
	printf("pin created");
	fclose(fp);
	break;
case 2: fp=fopen("fn.txt","r");
	printf("enter your pin");
	scanf("%d",&a.g);
	while(!feof(fp))
	{
	fscanf(fp,"%d  %s  ",&a.m,&a.n);
	if(a.m==a.g)
	{
	printf("%d",a.m);
	}
	}
	fclose(fp);
	break;
 default : printf("sorry");
 }
 getch();
 }
