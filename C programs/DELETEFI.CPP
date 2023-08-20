#include<stdio.h>
#include<conio.h>
struct emp
{
int empid;
char name[20];
};
void main()
{
FILE*fp,*fin,*fout;
struct emp e;
int i,n,ch;
printf("enter choice");
scanf("%d",&ch);
switch(ch)
{
case 1:fp=fopen("emp.txt","a+");
printf("enter the details\nemp id\nempname");
scanf("%d\n%s",&e.empid,&e.name);
fprintf(fp,"%d/n%s",&e.empid,&e.name);
fclose(fp);
	break;
case 2: fp=fopen("emp.txt","r");
	printf("contents are/n");
	while(!feof(fp))
	{
	fscanf(fp,"%d/n%s",&e.empid,&e.name);
	printf("%d/n%s",&e.empid,&e.name);
	}
	fclose(fp);
	break;
case 3: fin=fopen("emp.txt","r");
	fout=fopen("emp.txt","a+");
	printf("enter the id of emp be delete ");
	scanf("%d",&emp);
	while(fread(&e,sizeo(e),1,fin)
	{if(e.empid!=

default :printf("wrong choice");
}

getch();
}
