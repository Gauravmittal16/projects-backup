#include<stdio.h>
#include<stdlib.h>

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
        struct tree *parent=NULL,*current=NULL;
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

void display(struct tree *node)
{
    if(root==NULL)
    {
        printf("Tree is empty.");
        return;
    }
    else
    {
        if(node->left!=NULL)
        display(node->left);
        printf(" %d",node->data);
        if(node->right!=NULL)
        display(node->right);
    }
}



int main()
{
    create(5);
    create(4);
    create(6);
    create(51);
    printf("Tree constructed successfully.\n");
    printf("Your tree is listed below:-\n");
    display(root);
    return 0;
}

