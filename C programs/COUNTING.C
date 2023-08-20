void main()
{
int c[6],b[5],a[5];
int i,j;
clrscr();
printf("Enter the elements in array(in between 0-6)");
for(i=0;i<=4;i++)
{
scanf("%d",&a[i]);
}
for(i=0;i<=5;i++)
{
c[i]=0;
}
for(j=0;j<=5;j++)
{
c[a[j]]=c[a[j]]+1;
}
for(i=1;i<=5;i++)
{
c[i]=c[i]+c[i-1];
}
for(j=4;j>=0;j--)
{
b[c[a[j]]-1]=a[j];
c[a[j]]=c[a[j]]-1;
}
printf("sorted array is:\n");
for(i=0;i<=4;i++)
{
printf("%d",b[i]);
}
getch();
}
