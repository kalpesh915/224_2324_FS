/**
    box structure
*/

#include<stdio.h>


struct box{
    int h, w, b; /// 12
};

void main(){

    struct box b1;
    printf("\n Size of Structure is %d Bytes ",sizeof(b1));

    printf("\n Enter Height of Box \t");
    scanf("%d", &b1.h);
    printf("\n Enter Width of Box \t");
    scanf("%d", &b1.w);
    printf("\n Enter Breadth of Box \t");
    scanf("%d", &b1.b);

    printf("\n Area of Box is %d", b1.h * b1.w * b1.b);
}
