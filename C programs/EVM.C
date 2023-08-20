#include<stdio.h>
#include<conio.h>
void main()
{
int i,j,n,k,m,bjp=0,sp=0,bsp=0,others=0;
char b;
do{
clrscr();
gotoxy(29,2);
printf("ELECTION COMMISSION\n\n\t\t\t\t (INDIA)");
gotoxy(25,12);
printf("choose your option\n\n 1.\tVoting \n2.\tResults");
scanf("%d",&i);
switch(i)

{
case 1: do{
	 clrscr();
	printf("list:\n\n\n 1.BJP(Bhartiya Janta Party)\n\n\n 2. SP(Samajwadi Party)\n\n\n 3.BSP(Bahujan Samajwadi Party\n\n\n 4. Others" );
	scanf("%d",&j);
	switch(j)
	{
	case 1:clrscr();
	       gotoxy(39,12);
	       printf("BJP");
	       bjp=bjp+1;
	       break;
	case 2: clrscr();
	       gotoxy(39,12);
	       printf("SP");
	       sp=sp+1;
	       break;
	case 3: clrscr();
	       gotoxy(39,12);
	       printf("BSP");
	       bsp=bsp+1;
	       break;
	case 4: clrscr();
	       gotoxy(39,12);
		printf("others");
		others=others+1;
		break;
	default : printf("Error!!!");
	  }
	  printf("\n\n\npress 1 to vote again");
	  scanf("%d",&m);
	  }
	  while(m==1);


	  break;


case 2: printf("Enter security password");
	 scanf("%d",&n);
	 if(n==8755)
	 {
	 clrscr();
	 printf("\t\t\tRESULTS");
	 printf("\n============================================================*");
	 printf("\nBJP=%d                                                       * ",bjp);
	 printf("\nSP=%d                                                        * ",sp);
	 printf("\nBSP=%d                                                       * ",bsp);
	 printf("\nOthers=%d                                                    * ",others);
	 printf("\n============================================================*");
	 }
	 else
	 {
	 exit(0);
	 }
	 break;
default :printf("not valid");
}
	 printf("\nwant the results,then press 4");
	 scanf("%d",&k);

}
while(k==4);
getch();
}

