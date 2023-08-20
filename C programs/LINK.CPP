#include<stdio.h>
#include<conio.h>
#include<malloc.h>
struct dlink_list
{
struct dlink_list *pre;
int key;
struct dlink_list *next;
};
typedef struct dlink_list dnode;
int n;
dnode *lp=NULL,*rp=NULL;
void create(dnode*);
void display_left(dnode*);
void display_right(dnode*);
void main()
{
lp=(dnode*)malloc(sizeof(dnode));
create(lp);
display_left(lp);
display_right(rp);
}
void create(dnode*ptr)
{
char ch;
n=0;
lp->pre=NULL;
printf("enter e for exit");
ch=getchar();
if(ch=='e')
{
free(lp);
getch();
}
do
{
printf("enter key %d",n+1);
scanf("%d",&ptr->key);
fflush(stdin);
printf("continue ?y/n'");
ch=getchar();
if(ch=='y')
{
ptr->next=(dnode*)malloc(sizeof(dnode));
ptr->next->pre=ptr;
ptr=ptr->next;
}
n++;
while(ch=='y');
ptr->next=NULL;
rp=ptr;
printf("total node%d",n);
}
void display_left(dnode*ptr)
{
while(ptr!=NULL)
printf("%d",ptr->key);
ptr=ptr->next;
}
void display_right(dnode*ptr)
{
while(ptr!=NULL)
printf("%d",ptr->key);
ptr=ptr->pre;
}