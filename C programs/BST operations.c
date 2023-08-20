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

void inorderdisplay(struct tree *node)
{
    if(root==NULL)
    {
        printf("Tree is empty.");
        return;
    }
    else
    {
        if(node->left!=NULL)
        inorderdisplay(node->left);
        printf(" %d",node->data);
        if(node->right!=NULL)
        inorderdisplay(node->right);
    }
}


void preorder(struct tree *node)
{
    
    if(root==NULL)
    {
        printf("Tree is empty.");
        return;
    }
    else
    {
        printf(" %d",node->data);
        if(node->left!=NULL)
        preorder(node->left);
        if(node->right!=NULL)
        preorder(node->right);
    }
    
}


void postorder(struct tree *node)
{
    
    if(root==NULL)
    {
        printf("Tree is empty.");
        return;
    }
    else
    {
       
        if(node->left!=NULL)
        postorder(node->left);
        if(node->right!=NULL)
        postorder(node->right);
        printf(" %d",node->data);
    }
    
}

void search(struct tree *node,int item)
{
    
    if(root==NULL)
    {
        printf("Tree is already empty.");
        return;
    }
    else if(node!=NULL && node->data==item) 
    {
     printf("Item  found.");
        return;
    }
    else if(item<node->data)
    {
     if(node->left!=NULL)
     {
     search(node->left,item); 
     }
     else
     {
         printf("Item not found.");
         return;
     }
     
    }
    else
    {
        if(node->right!=NULL)
        {
        search(node->right,item);
        }
        else
        {
            printf("Item not found.");
            return;
        }
    }
}
void searching(struct tree* &curr,int i,tree* &parent)
{
    while(curr!=NULL&&curr->data!=i)
    {
       parent=curr;
       
        if(i<curr->data)
        {
            curr=curr->left;
        }
        else{
            curr=curr->right;
        }
    }
    
}

tree* findminimum(tree *curr)
{
    while(curr->left!=NULL)
    {
        curr=curr->left;
    }
    return curr;
}



void deletion(struct tree* &root,int i)
{
    struct tree *curr=NULL,*parent;
    curr=root;
    parent=NULL;
    searching(curr,i,parent);
    if(curr==NULL)
    {
        printf("Item is not there in the tree.");
        return;
    }
    else if(curr->left==NULL&&curr->right==NULL)
    {
        if(curr!=root)
        {
            if(curr==parent->left)
            {
                parent->left=NULL;
            }
            else
            {
                parent->right=NULL;
            }
        }
        else
        {
            root=NULL;
        }
        free(curr);
    }
    else if(curr->left!=NULL && curr->right!=NULL)
    {
        tree *successor=findminimum(curr->right);
        int val=successor->data;
        deletion(root,successor->data);
        curr->data=val;
    }
    else
    {
        struct tree *child=(curr->left)?curr->left:curr->right;
        if(curr!=root)
        {
            if(curr==parent->left)
            {
                parent->left=child;
            }
            else
            {
                parent->right=child;
            }
            
        }
        
        else
        {
            root=child;
        }
        free(curr);
    }
}

int main()
{
    int item,i;
                    //creation of binary search tree.
    create(5);
    create(4);
    create(6);
    create(51);
    create(50);
    create(75);
    printf("Tree constructed successfully.\n");
                                  //Inorder traversal
    printf("Your tree is listed below(inorder):-\n");
    inorderdisplay(root);
    printf("\n");
                                 // Preorder traversal
    printf("Your tree is listed below(preorder):-\n");
    preorder(root);
    printf("\n");
                                  // Postorder traversal
    printf("Your tree is listed below(postorder):-\n");
    postorder(root);
    
                                   // Searching in BST
    printf("\n");
    printf("Enter item to be searched: ");
    scanf("%d",&item);
    search(root,item);
    
                                   // Deletion in BST
    printf("\n");
    printf("Enter item to be deleted: ");
    scanf("%d",&i);
    deletion(root,i);
    printf("\n");
    inorderdisplay(root);
    
    return 0;
}


