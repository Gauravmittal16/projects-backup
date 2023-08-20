#include<stdio.h>


int gcd(int x,int y);


int main()
{
    int a,b;
    printf("Enter first number: ");
    scanf("%d",&a);
    printf("\nEnter second number: ");
    scanf("%d",&b);
    gcd(a,b);
    return 0;
}

int gcd(int x,int y)
{
    int hcf=1;
    for(int i=1;i<=x && i<=y;++i)
    {
        if(x%i==0 && y%i==0)
        hcf=i;
    }
    printf("\nGCD of two numbers is: %d",hcf);
    return 0;
}

