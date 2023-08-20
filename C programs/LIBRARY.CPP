#include<stdio.h>
#include<conio.h>
#include<string.h>
#include<process.h>
#include<graphics.h>
#include<dos.h>
void mypix(void);
struct book
{
char fname[30];
char mname[20];
int bid;
int d,m,y,t,l;
};
void main()
{
int ch,year,f,n,i,y,a,h,v,ip,pk,z,l,t,x,pp,bh,hb,xc,cx,bn;
char name[80],gm[60],mm[70],s[50],j[30],k[56],mp;
FILE*fp,*fin,*fout;
struct book b;
clrscr();
mypix();
gotoxy(36,4);
printf("WELCOME\n");
gotoxy(38,7);
printf("TO\n");
gotoxy(23,10);
printf("THE  LIBRARY  MANAGEMENT  SYSTEM\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n");
printf("   Enter Password Please:\n");
printf("Enter\n");
scanf("%d",&a);
if(a==8979)
{
closegraph();
do
{
clrscr();
printf("Choose your option\n\n");
printf(" 1. Issue Section\n\n 2. View student's record\n\n 3. Delete record\n\n 4. Exit\n\n");
printf("Enter");
scanf("%d",&ch);
clrscr();
switch(ch)
{
case 1: gotoxy(32,13);
	printf("Enter your year of study");
	scanf("%d",&year);
	if(year==1)
	{
	do
	{
	clrscr();
	fp=fopen("f2.txt","a+");
	gotoxy(32,2);
	printf("BCA 1st Year\n\n\n");
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
	printf("\n\nAdd another record,then press 1");
	scanf("%d",&xc);
	}
	while(xc==1);
	}
	else if(year==2)
	{
	do
	{
	clrscr();
	gotoxy(32,2);
	printf("BCA 2nd Year\n\n\n");
	fp=fopen("ft.txt","a+");
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
	printf("\npress 1 to add another record or 0 to exit");
	scanf("%d",&bh);
	}
	while(bh==1);
	}
	else if(year==3)
	{do
	{
	clrscr();
	gotoxy(32,2);
	printf("BCA 3rd Year\n\n\n");
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
	printf("\n\nAdd another record,then press 1");
	scanf("%d",&cx);
	}
	while(cx==1);
	}
	else
	{printf("Invalid year");}
	break;
case 2: gotoxy(32,13);
	printf("enter year of study");
	scanf("%d",&y);
	if(y==1)
	{
	clrscr();
	fp=fopen("f2.txt","r");
	gotoxy(32,2);
	printf("BCA 1st Year\n\n\n");
	while(!feof(fp))
	{
	fscanf(fp,"\n%s%s%d%d/%d/%d",&b.mname,&b.fname,&b.bid,&b.d,&b.m,&b.y);
	printf("\n\n%s                         Book Id:%d\n%s                     Issue Date:%d/%d/%d",b.mname,b.bid,b.fname,b.d,b.m,b.y);
	}
	fclose(fp);
	}
	else if(y==2)
	{
	clrscr();
	fp=fopen("ft.txt","r");
	gotoxy(32,2);
	printf("BCA 2nd Year\n\n\n");
	while(!feof(fp))
	{
	fscanf(fp,"\n%s%s%d%d/%d/%d",&b.mname,&b.fname,&b.bid,&b.d,&b.m,&b.y);
	printf("\n\n%s                         Book Id:%d\n%s                     Issue Date:%d/%d/%d",b.mname,b.bid,b.fname,b.d,b.m,b.y);
	}
	fclose(fp);
	}
	else if(y==3)
	{
	clrscr();
	fp=fopen("f4.txt","r");
	gotoxy(32,2);
	printf("BCA 3rd Year\n\n\n");
	while(!feof(fp))
	{
	fscanf(fp,"\n%s%s%d%d/%d/%d",&b.mname,&b.fname,&b.bid,&b.d,&b.m,&b.y);
	printf("\n\n%s                         Book Id:%d\n%s                     Issue Date:%d/%d/%d",b.mname,b.bid,b.fname,b.d,b.m,b.y);
	}
	fclose(fp);
	}
	else
	{printf("Sorry!duration time 3 years choice is 1,2,3" );
	}
	break;
case 3: printf("Enter your year of study");
	scanf("%d",&bn);
	if(bn==1)
	{
	fin=fopen("f2.txt","r");
	fout=fopen("f21.txt","a+");
	printf("enter the book id to be delete");
	scanf("%d",&pp);
	rewind(fin);
	while(!feof(fin))
	{
	fscanf(fin,"%s%s%d%d/%d/%d",&b.mname,&b.fname,&b.bid,&b.d,&b.m,&b.y);
	if(b.bid!=pp)
	{
	fprintf(fout,"%s\n%s\n%d\n%d/%d/%d",b.mname,b.fname,b.bid,b.d,b.m,b.y);
	}
	}
	fclose(fin);
	fclose(fout);
	remove("f2.txt");
	rename("f21.txt","f2.txt");
	printf("record is successfully deleted");
	}
	else if(bn==2)
	{
	fin=fopen("ft.txt","r");
	fout=fopen("ft1.txt","a+");
	printf("enter the book id to be delete");
	scanf("%d",&pp);
	rewind(fin);
	while(!feof(fin))
	{
	fscanf(fin,"%s%s%d%d/%d/%d",&b.mname,&b.fname,&b.bid,&b.d,&b.m,&b.y);
	if(b.bid!=pp)
	{
	fprintf(fout,"%s\n%s\n%d\n%d/%d/%d",b.mname,b.fname,b.bid,b.d,b.m,b.y);
	}
	}
	fclose(fin);
	fclose(fout);
	remove("ft.txt");
	rename("ft1.txt","ft.txt");
	printf("record is successfully deleted");
	}
	else if(bn==3)
	{
	fin=fopen("f4.txt","r");
	fout=fopen("f41.txt","a+");
	printf("enter the book id to be delete");
	scanf("%d",&pp);
	rewind(fin);
	while(!feof(fin))
	{
	fscanf(fin,"%s%s%d%d/%d/%d",&b.mname,&b.fname,&b.bid,&b.d,&b.m,&b.y);
	if(b.bid!=pp)
	{
	fprintf(fout,"%s\n%s\n%d\n%d/%d/%d",b.mname,b.fname,b.bid,b.d,b.m,b.y);
	}
	}
	fclose(fin);
	fclose(fout);
	remove("f4.txt");
	rename("f41.txt","f4.txt");
	printf("record is successfully deleted");
	}
	else {printf("wrong choice");}
	break;
case 4: gotoxy(40,13);
	printf("5");
	delay(1000);
		printf("4");
	delay(1000);
		printf("3");
	delay(1000);
		printf("2");
	delay(1000);
		printf("1");
	delay(1000);
	exit(0);
	break;
default : printf(" Ooops an error is detecting");
}
printf("\n\n\nExit, Press 1 for yes ");
scanf("%d",&hb);
}
while(hb==1);
}
else
{
exit(0);
}
getch();
}
void mypix(void)
{
int gd=0,gm;
initgraph(&gd,&gm,"C:\\TC\\BGI");
setcolor(5);
rectangle(10,10,600,200);
setcolor(3);
line(315,260,200,300);
line(315,260,440,295);
line(330,340,200,300);
line(330,340,440,295);
line(200,320,330,360);
line(330,360,440,315);
ellipse(200,310,90,270,4,8);
ellipse(330,350,90,270,4,8);
ellipse(440,305,90,270,4,8);
setcolor(7);
line(327,350,437,305);
line(328,355,438,310);
line(327,345,436,300);
//another//
setcolor(2);
line(190,330,295,360);
line(295,380,425,345);
line(190,330,215,329);
line(425,325,407,330);
line(190,350,295,380);
line(295,360,315,355);
ellipse(190,340,270,90,4,8);
ellipse(295,370,270,90,4,8);
ellipse(425,335,270,90,4,8);
setcolor(7);
line(193,340,298,370);
line(194,345,299,375);
line(193,335,300,365);
}