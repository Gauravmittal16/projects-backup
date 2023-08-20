#include<stdio.h>
#include<conio.h>
void main()
{
int i,j,n,a[10][10],b[10][10],c[10][10],r1,r2,c1,c2;
clrscr();
printf("enter the no. of rows and column of first matrix");
scanf("%d%d",&r1,&c1);
printf("enter the no. of rows and column of second matrix");
scanf("\n%d%d",&r2,&c2);
if(r1==r2&&c1==c2)
{
printf("enter the elements of first matrix");
for(i=0;i<r1;i++)
{
for(j=0;j<c1;j++)
{
scanf("%d",&a[i][j]);
}
}
printf("enter the elements of second matrix");
for(i=0;i<r2;i++)
{
for(j=0;j<c2;j++)
{
scanf("%d",&b[i][j]);
}
}
for(i=0;i<r1;i++)
{
for(j=0;j<c1;j++)
{
c[i][j]=a[i][j]+b[i][j];
}
}
//*additon//
printf("First matrix is:\n");
for(i=0;i<r1;i++)
{
for(j=0;j<c1;j++)
{
printf(" %d",a[i][j]);
}
printf("\n");
}
printf("Second matrix is:\n");
for(i=0;i<r1;i++)
{
for(j=0;j<c1;j++)
{
printf(" %d",b[i][j]);
}
printf("\n");
}
printf("Addition matrix is:\n ");
for(i=0;i<r1;i++)
{
for(j=0;j<c1;j++)
{
printf(" %d",c[i][j]);
}
printf("\n");
}
}
else
{
printf("addition can't be happened");
}
getch();
}



