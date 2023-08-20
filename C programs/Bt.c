struct tree 
{
int data;
struct tree *left;
struct tree *right;
};
struct tree *root=NULL;

struct tree* newnode(int data)
{
    struct tree *node=(struct tree*)malloc(sizeof(struct tree));
    node->data=data;
    node->left=NULL;
    node->right=NULL;
}
void main()
{
    root=newnode(1);
    root->left=newnode(2);
    root->right=newnode(3);
    root->left->left=newnode(4);
    root->left->right=newnode(5);
    printf("Binary tree constructed.");

}
