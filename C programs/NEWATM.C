#include<stdio.h>
#include<conio.h>
#include<string.h>
#include<process.h>
struct book
{
int fname,balance;
char mname[20];
int bid;
int t,l;
};
void main()
{
int ch,otp,f,n,i,y,a,h,v,ip,pk,z,l,t,x,pp,bh,hb,xc,cx;
char name[80],gm[60],mm[70],s[50],j[30],k[56],mp;
FILE*fp,*fin,*fout;
struct book b;
clrscr();
gotoxy(37,1);
printf("WELCOME\n");
gotoxy(39,3);
printf("TO\n");
gotoxy(31,5);
printf("*****ATM SERVICES******\n");
gotoxy(39,6);
printf("OF");
gotoxy(29,8);
printf("PUNJAB MNATIONAL BANK\n\n\n\n\n");
printf("                            Please Enter 2\n");
printf("Enter\n");
scanf("%d",&a);
if(a==2)
{
do
{
clrscr();
printf("Choose your option\n\n");
printf(" 1. GREEN PIN\n\n 2. BALANCE\n\n 3. DepOSiteTE\n\n 4. Withdraw\n\n");
printf("Enter");
scanf("%d",&ch);
clrscr();
switch(ch)
{
case 1: gotoxy(32,13);
	printf("Enter your OTP NUMBER");
	scanf("%d",&otp);
	do
	{
	clrscr();
	fp=fopen("f2.txt","a+");
	gotoxy(32,2);
	printf(" PIN CREATION");
	printf("\n\nEnter your name\n");
	scanf("%s",&b.mname);
	printf("Again enter your pin\n");
	scanf("%s",&b.fname);
	printf("Again enter your pin\n");
	scanf("%d",&b.bid);
	if(b.fname==b.bid)
                  {
	 b.balance=1000fprintf(fp,"%s\n %d \n %d",b.mname,b.bid,b.balance);
	printf("\n\npin has been sucessfully  created ");
                  }
                 fclose(fp);
	printf("\n\ncreate another pin,then press 1");
	scanf("%d",&xc);
	}
	while(xc==1);
	break;
case 2:      gotoxy(32,13);
                  fin=fopen("f2.txt","r");
	printf("enter the pin");
	scanf("%d",&pp);
	while(!feof(fin))
	{
	fsacnf(fp,"%s\n %d \n%d",&b.mname,&b.bid,&b.balance);
	if(b.bid==pp)
	{
	fprintf(fin,"%d\nYOUR BALANCE IS: %d",b.mname,b.balance);
	}
	}
	fclose(fin);
	break;
case 3: printf("no");
	break;
case 4: exit(0);
	break;
default : printf(" Ooops an error is detecting");
}
printf("\n\n\nDo you really want to exit, Press 1 for yes ");
scanf("%d",&hb);
}
while(hb==1);
}
else
{
printf("oops an error is detecting");
}
getch();
}