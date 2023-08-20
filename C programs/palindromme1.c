
int palindrome(char str1[],int ln);

int main()
{
    char str[100];
    scanf("%s",&str);
    int len=strlen(str);
    if(len>=1&&len<=100)
    {
        if(palindrome(str,len)==0)
        {
            printf("YES");
        }
        else 
        {
            printf("NO");
        }
    }
    
}

int palindrome(char str1[],int ln)
{
    int k=0,j=0;
    char temp[100];
    int i=ln-1;
    while(str1[i]!='\0'&&i>=0)
    {
        if(str1[i]>='a'&&str1[i]<='z')
        {
        temp[k]=str1[i];
        i--;
        k++;
        }
        else
        {       
            return 1;
        }
    }
    temp[k]='\0';
    while(str1[j]!='\0')
    {
        if(temp[j]!=str1[j])
        {
            return 1;
        }
        j++;
    }
    return 0;
}