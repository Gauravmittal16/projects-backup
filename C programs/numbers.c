int main()
{
    long n,a,b,temp,i,j;
    long arr[1000000],b[100];
    scanf("%ld",&n);
    for(i=0;i<n;i++)
    {
        scanf("%ld",&arr[i]);
        b[i]=0;
    }
    for(i=0;i<n;i++)
    {
        temp=arr[i];
        j=0;
        while(j<n)
        {
            if(temp==arr[j])
            {
                b[i]++; 
            }
            j++;
        }
    }
    for(i=0;i<n;i++)
    {
        printf(" %ld",b[i]);
    }
}