#include<stdio.h>
#include<conio.h>
#include<string.h>
#include<process.h>
struct book
{
char fname[30];
char mname[20];
int bid;
int d,m,y,t,l;
};
void main()
{
int ch,year,f,n,i,y,a,h,v,ip,pk,z,l,t,x,ij;
char name[80],gm[60],mm[70],s[50],j[30],k[56],mp;
FILE*fp,*fin,*fout;
struct book b;
clrscr();
gotoxy(37,1);
printf("WELCOME\n");
gotoxy(39,3);
printf("TO\n");
gotoxy(31,5);
printf("======LIBRARY======\n");
gotoxy(39,6);
printf("OF");
gotoxy(29,8);
printf("COMPUTER SCIENCE DEPARTMENT\n\n\n\n\n");
printf("                            Please Enter 2\n");
printf("Enter\n");
scanf("%d",&a);
if(a==2)
{
clrscr();
printf("Choose your option\n");
printf(" 1. Issue Section\n\n 2. View student's record\n\n 3. Delete record\n\n 4. Exit\n\n");
printf("Enter");
scanf("%d",&ch);
clrscr();
switch(ch)
{
case 1: gotoxy(32,13);
	printf("Enter your year of study");
	scanf("%d",&year);
	if(year==2)
	{
	clrscr();
	fp=fopen("f2.txt","a+");
	gotoxy(32,2);
	printf("B.Tech 2nd Year\n\n\n");
	printf("Enter your name\n");
	scanf("%s",&b.mname);
	printf("Father's name\n");
	scanf("%s",&b.fname);
	printf("Book id\n");
	scanf("%d",&b.bid);
	printf("Issue date in the formatt dd/mm/yy\n");
	scanf("%d/%d/%d",&b.d,&b.m,&b.y);
	v=b.d+7;
	fprintf(fp,"%s\n%s\n%d\n%d/%d/%d",b.mname,b.fname,b.bid,b.d,b.m,b.y);
	printf("\n\nBook has been sucessfully Issued upto %d/%d/%d ",v,b.m,b.y);
	fclose(fp);
	}
	else if(year==3)
	{clrscr();
	gotoxy(32,2);
	printf("B.Tech 3rd Year\n\n\n");
	fp=fopen("f3.txt","a+");
	printf("Enter your name\n");
	scanf("%s",&b.mname);
	printf("Father's name\n");
	scanf("%s",&b.fname);
	printf("Book id\n");
	scanf("%d",&b.bid);
	printf("Issue date in the formatt dd/mm/yy\n");
	scanf("%d/%d/%d",&b.d,&b.m,&b.y);
	v=b.d+7;
	fprintf(fp,"%s\n%s\n%d\n%d/%d/%d",b.mname,b.fname,b.bid,b.d,b.m,b.y);
	printf("\n\nBook has been sucessfully Issued upto %d/%d/%d",v,b.m,b.y);
	fclose(fp);
	}
	else if(year==4)
	{clrscr();
	gotoxy(32,2);
	printf("B.Tech 4th Year\n\n\n");
	fp=fopen("f4.txt","a+");
	printf("Enter your name\n");
	scanf("%s",&b.mname);
	printf("Father's name\n");
	scanf("%s",&b.fname);
	printf("Book id\n");
	scanf("%d",&b.bid);
	printf("Issue date in the formatt dd/mm/yy\n");
	scanf("%d/%d/%d",&b.d,&b.m,&b.y);
	v=b.d+7;
	fprintf(fp,"%s\n%s\n%d\n%d/%d/%d",b.mname,b.fname,b.bid,b.d,b.m,b.y);
	printf("Book Issued upto %d/%d/%d",v,b.m,b.y);
	fclose(fp);
	}
	else
	{printf("Invalid year");}
	break;
case 2: gotoxy(32,13);
	printf("enter year of study");
	scanf("%d",&y);
	if(y==2)
	{
	clrscr();
	fp=fopen("f2.txt","r");
	gotoxy(32,2);
	printf("B.Tech 2nd Year\n\n\n");
	while(!feof(fp))
	{
	fscanf(fp,"\n%s%s%d%d/%d/%d",&b.mname,&b.fname,&b.bid,&b.d,&b.m,&b.y);
	printf("\n\n%s                         Book Id:%d\n%s                     Issue Date:%d/%d/%d",b.mname,b.bid,b.fname,b.d,b.m,b.y);
	}
	fclose(fp);
	}
	else if(y==3)
	{ clrscr();
	fp=fopen("f3.txt","r");
	printf("B.Tech 3rd Year\n\n\n");
	while(!feof(fp))
	{
	fscanf(fp,"%s%s%d%d/%d/%d",&b.mname,&b.fname,&b.bid,&b.d,&b.m,&b.y);
	printf("%s\n%s\nBook Id:%d\nDate:%d/%d/%d",b.mname,b.fname,b.bid,b.d,b.m,b.y);
	}
	fclose(fp);
	}
	else
	{fp=fopen("f4.txt","r");
	printf("B.Tech 4th Year\n\n\n");
	while(!feof(fp))
	{
	fscanf(fp,"%s%s%d%d/%d/%d",&b.mname,&b.fname,&b.bid,&b.d,&b.m,&b.y);
	printf("%s\n%s\nBook Id:%d\nDate:%d/%d/%d",b.mname,b.fname,b.bid,b.d,b.m,b.y);
	}
	fclose(fp);
	}
	break;
case 3: fin=fopen("f2.txt","r");
	fout=fopen("f21.txt","a+");
	printf("enter the emp no to be delete");
	scanf("%d",&ij);
	while(fread(&b,sizeof(b),1,fout));
	{
	if(b.bid==ij)
	fwrite(&b,sizeof(b),1,fout);
	}
	fclose(fin);
	fclose(fout);
	remove("f2.txt");
	rename("f21.txt","f2.txt");
	break;
case 4: exit(0);
	break;
default : printf(" Ooops an error is detecting");
}
}
else
{
printf("oops an error is detecting");
}
getch();
}