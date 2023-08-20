

#include <stdio.h>
#include <stdlib.h>

void create(int data);
struct tree
{
  int data;
  struct tree *left;
  struct tree *right;
};

struct tree *root=NULL;


void create(int data)
{
    struct tree *current=NULL,*parent=NULL;
    struct tree *newnode=(struct tree*)malloc(sizeof(struct tree));
    newnode->data=data;
    newnode->left=NULL;
    newnode->right=NULL;
    
    if(root==NULL)
    {
        root=newnode;
        return;
    }
    else
    {
    current=root;
    
    while(1)
    {
        parent=current;
    
    
    if(data<current->data)
    {
        current=current->left;
        if(current==NULL)
        {
            parent->left=newnode;
            return;
        }
        
    }
    else 
    {
        current=current->right;
        if(current==NULL)
        {
            parent->right=newnode;
            return;
        }
    }

    }
    }
}



int main()
{
   
    create(5);
    create(4);
    create(7);
    printf("Binary Search Tree constructed successfully.");
    return 0;
}
