void max_heap(int [],int);
void main()
{
int a[10],i,j,n;
/*Build heap starts here*/
printf("Enter the length of heap");
scanf("%d",&n);
printf("Enter elements for heap\n");
for(i=1;i<=n;i++)
{
scanf("%d",&a[i]);
}
printf("elements before heap are:\n");
for(i=1;i<=n;i++)
{
printf("  %d",a[i]);
}

for(i=n/2;i<=1;i++)
{
max_heap(a,i);
}
for(j=1;j<=n;j++)
{
printf("%d",a[j]);
}
getch();
}
void max_heap(int a[],int i)
{
int largest,l,r,swap;
l=2*i;
r=(2*i)+1;
if(a[l]>a[i])
{
largest=l;
}
else
{
largest=r;
}
if(a[r]>a[largest])
{
largest=r;
}
if(largest!=i)
{
swap=a[i];
a[i]=a[largest];
a[largest]=swap;
max_heap(a,largest);
}
}


 