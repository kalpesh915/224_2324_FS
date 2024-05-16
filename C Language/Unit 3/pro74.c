/**
    box union
*/

#include<stdio.h>


union box{
    int h, w, b; /// 12
};

void main(){
    int ans = 1;
    union box b1;
    printf("\n Size of Union is %d Bytes ",sizeof(b1));

    printf("\n Enter Height of Box \t");
    scanf("%d", &b1.h);
    ans *= b1.h;
    printf("\n Enter Width of Box \t");
    scanf("%d", &b1.w);
    ans *= b1.w;
    printf("\n Enter Breadth of Box \t");
    scanf("%d", &b1.b);
    ans *= b1.b;

    printf("\n Area of Box is %d", ans);
}
