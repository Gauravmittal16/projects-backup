int main()
{
    int k=0,j=0,flag=0,i;
    char str1[100];
    char temp[100];
    scanf("%s",&str1);
    int len=strlen(str1);
    if(len>=1&&len<=100)
    {
        i=len-1;
    while(str1[i]!='\0'&&i>=0)
    {
        temp[k]=str1[i];
        i--;
        k++;
    }
    temp[k]='\0';
    while(str1[j]!='\0')
    {
        if(temp[j]!=str1[j])
        {
            flag=1;
        }
        j++;
    }
    if(flag==0)
    {
        printf("YES");
    }
    else
    {
        printf("NO");
    }
    }
    return 0;
}