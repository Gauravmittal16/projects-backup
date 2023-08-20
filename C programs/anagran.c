/******************************************************************************

Welcome to GDB Online.
GDB online is an online compiler and debugger tool for C, C++, Python, Java, PHP, Ruby, Perl,
C#, VB, Swift, Pascal, Fortran, Haskell, Objective-C, Assembly, HTML, CSS, JS, SQLite, Prolog.
Code, Compile, Run and Debug online from anywhere in world.

*******************************************************************************/
//function declaration.
int anagram(char str1[], char str2[]);

int main()
{
    
char str1[100];
char str2[100];

printf("enter strings:");
gets(str1);
gets(str2);

   if(anagram(str1, str2)==1)
   {
       printf("Strings are anagrams.");
   }
   else 
   {
        printf("Strings are not anagrams.");
   }
    
    
    return 0;
}



// function defintion.
int anagram(char str1[],char str2[])
{
    
        int first[26]={0},second[26]={0};
        int i=0;
        //first string frequency
        while(str1[i]!= '\0')
        {
            first[str1[i]-'a']++;
            i++;
        }
        i=0;
        // second string frequency.
        while(str2[i]!= '\0')
        {
            second[str2[i]-'a']++;
            i++;
        }
        for(int j=0;j<26;j++)
        {
        if(first[j]!=second[j])
        {
            return 0;
        }
        }
        return 1;
        
    
}



