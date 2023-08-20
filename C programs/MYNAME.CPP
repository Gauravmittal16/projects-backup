		       #include<stdio.h>
		       #include<conio.h>
		       #include<string.h>
		       #include<graphics.h>
		       #include<process.h>
		       void zero(int);
		       void photo();
		       void cross(int);
		       void main()
		       {
		       clrscr();
		       char s,c[5];
		       int gd=0,gm,i,a[9],x,y,flag,tree=1,b;
		       initgraph(&gd,&gm,"C:\\TC\\BGI");
		       while(1){
				setbkcolor(3);

		       cleardevice();
					 gotoxy(30,1);

					 photo();
		       printf("*******WELCOME TO TIC TEO GAME********");
		       gotoxy(15,15);
		       printf("press 1 to play the game or press 2 fo exit");

		       scanf("%d",&b);
		       clrscr();
		       cleardevice();
		       clrscr();
     if(b==1){
		       cleardevice();
		       printf("Enter position of zero and cross consecutively and ");
		       printf("to choose first zero press 1 and 0 for choosing cross");
		       scanf("%d",&flag);
		       cleardevice();
		       line(200,200,500,200);
		       line(200,300,500,300);
		       line(300,100,300,400);
		       line(400,100,400,400);

	for(i=1;i<=10;i++){
	  if(flag==0&&tree<=9){
		       tree++;
		       for(i=1;i<=1;i++)
			     {
		       printf("enter cross");
		       scanf("%d",&y);
		       cross(y);

			       }flag=1;
				}
	  if(flag==1&&tree<=9){
		       for(i=1;i<=1;i++){
					 printf("enter zero");
					  scanf("%d",&x);
					  zero(x);
					}                 tree++;
				   flag=0;
				  }
					 }
		    }//for loop end

				  else
				  exit(0);
				     getch();
				     clrscr();
							   cleardevice();
				  printf("Thankyou for playing the game");

			 getch();
			 printf("Do you want to continue....yes o no");

		       fflush(stdin);
		       gets(c);
		       if(!strcmp(c,"no"))
					 { exit(0);
					 }
					  }
		       getch();
		       }
		       void zero(int a)
		       {
		       int x;
			  x=a;
			if(x==1)
			circle(250,150,30);
			if(x==2)
			circle(350,150,30);
			if(x==3)
			circle(450,150,30);
			if(x==4)
			circle(250,250,30);
			if(x==5)
			circle(350,250,30);
			if(x==6)
			circle(450,250,30);
			if(x==7)
			circle(250,350,30);
			if(x==8)
			circle(350,350,30);
			if(x==9)
			circle(450,350,30);
		       }
		       void cross(int b)
		       {
		       int y;
		       y=b;
			 if(y==1)     {
		       line(225,125,275,175);
		       line(275,125,225,175);
		       }
		       if(y==2) {
		       line(325,125,375,175);
		       line(375,125,325,175);
		       }
		       if(y==3) {
		       line(425,125,475,175);
		       line(475,125,425,175);
		       }
		       if(y==4) {
		       line(225,225,275,275);
		       line(275,225,225,275);
		       }
		       if(y==5) {
		       line(325,225,375,275);
		       line(375,225,325,275);
		       }
		       if(y==6) {
		       line(425,225,475,275);
		       line(475,225,425,275);
		       }
		       if(y==7) {
		       line(225,325,275,375);
		       line(275,325,225,375);
		       }
		       if(y==8) {
		       line(325,325,375,375);
		       line(375,325,325,375);
		       }
		       if(y==9)   {
		       line(425,325,475,375);
		       line(475,325,425,375);
		       }


		       }
		       void photo()
		       {
		       int i,j;
		  //  2

		line(200,200,400,200);
		line(250,150,350,150);
		arc(250,200,90,180,50);
		arc(350,200,0,90,50);
		line(250,100,350,100);
		arc(300,100,180,360,50);
		line(270,80,330,80);
		arc(270,100,90,180,20);
		arc(330,100,0,90,20);
		line(270,80,200,50);
		line(330,80,400,50);
		line(200,50,300,20);
		line(300,20,400,50);

       //  1
		line(100,200,200,200);
		line(120,180,180,180);
		arc(120,200,90,180,20);
		arc(180,200,0,90,20);
		line(130,160,170,160);
		arc(150,160,180,360,20);
		line(140,150,160,150);
		arc(140,160,90,180,10);
		arc(160,160,0,90,10);
		line(140,150,100,130);
		line(160,150,200,130);
		line(150,110,100,130);
		line(150,110,200,130);
	  //  3
		     i=300;
		line(100+i,200,200+i,200);
		line(120+i,180,180+i,180);
		arc(120+i,200,90,180,20);
		arc(180+i,200,0,90,20);
		line(130+i,160,170+i,160);
		arc(150+i,160,180,360,20);
		line(140+i,150,160+i,150);
		arc(140+i,160,90,180,10);
		arc(160+i,160,0,90,10);
		line(140+i,150,100+i,130);
		line(160+i,150,200+i,130);
		line(150+i,110,100+i,130);
		line(150+i,110,200+i,130);
    // nodes   middle
		line(200,50,205,80);
		line(200,50,195,80);
		line(205,80,200,90);
		line(195,80,200,90);
   // node 1
   i=100;
       j=80;
		line(200-i,50+j,205-i,80+j);
		line(200-i,50+j,195-i,80+j);
		line(205-i,80+j,200-i,90+j);
		line(195-i,80+j,200-i,90+j);
    // node 3
    i=200;
		line(200+i,50+j,205+i,80+j);
		line(200+i,50+j,195+i,80+j);
		line(205+i,80+j,200+i,90+j);
		line(195+i,80+j,200+i,90+j);



					    }