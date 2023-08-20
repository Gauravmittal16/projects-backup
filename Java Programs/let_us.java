int bits(int n);
int main()
{
    int tc,x;
    int result,ans=0;
    scanf("%d",&tc);
    for(int i=0;i<tc;i++)
    {
        ans=0;
        scanf("\n%d",&x);
        if(x>=1&&x<=1000000000000)
        {
        for(int d=1;d<=x;d++)
        {
            result=x/d;
            int bits_result=bits(result);
            int bits_d=bits(d);
            if(bits_result<=bits_d)
            {
                ans=ans+1;
            }
        }
        printf("\n%d",ans);
        }
    }
    return 0;
}
int bits(int n)
{
    int arr[100];
    int i=0,count=0;
    int flag=0;
    while(n>0)
    {
        arr[i]=n%2;
        n=n/2;
        i++;
    }
    for(int j=i-1;j>=0;j--)
    {
        if(arr[j]==1)
        flag=1;
        if(flag==1)
        count=count+1;
    }
    return count;
}

