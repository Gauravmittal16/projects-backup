#include<stdio.h>
int main()
{
    int n,q;
    int l,r;
    int arr[100];
    printf("Enter your data:");
    scanf("%d %d",&n,&q);
    for(int i=0;i<n;i++)
    {
        scanf("%d",&arr[i]);
    }
    for(int j=0;j<q;j++)
    {
        int sum=0;
        int count=0,mean=0;
        scanf("%d %d",&l,&r);
        for(int k=l-1;k<r;k++)
        {
            sum=sum+arr[k];
            count++;
        }
        mean=sum/count;
        printf("%d",mean);
    }
    
    return 0;
}
