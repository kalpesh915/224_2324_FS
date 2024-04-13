#include<stdio.h>

/**
    define pre processor
*/

#define cube x*x*x
#define square x*x

void main(){
    int x;

    printf("\n Enter value for x \t");
    scanf("%d", &x);

    printf("\n Square of %d is %d", x, square);
    printf("\n Cube of %d is %d", x, cube);
}
