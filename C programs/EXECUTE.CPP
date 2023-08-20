#include<stdio.h>
#include<conio.h>
void main()
{
clrscr();
int a[10],i,sum=0,n,wt=0,tt[10],tat=0;
float avg,avwt,avgtat;
printf("enter the no. of processes");
scanf("%d",&n);
for(i=1;i<=n;i++)
{
printf("enter the execution time of %d process",i);
scanf("%d",&a[i]);
sum=sum+a[i];
}
clrscr();
for(i=1;i<=n;i++)
{
tt[i]=wt+a[i];
printf("\t\t\tp%d----->%d---%d    %d",i,a[i],wt,tt[i]);
printf("\n");
wt=wt+a[i];
}
for(i=1;i<=n;i++)
{
tat=tat+tt[i];
}
avg=sum/n;
avwt=wt/n;
avgtat=tat/n;
printf("average  burst time %f",avg);
printf("\naverage waiting time %f",avwt);
printf("\naverage tat %f",avgtat);
getch();
}