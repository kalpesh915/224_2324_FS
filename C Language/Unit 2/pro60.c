/**
    print following pattern with use of nested loop

         *
        * *
       *   *
      *     *
     * * * * *
*/

#include<stdio.h>

void main(){
    int i, j;

    /// row
    for(i=1; i<=5; i++){
        for(j=4; j>=i; j--){
            printf(" ");
        }
        for(j=1; j<=i; j++){
            if(j==1 || j==i || i==5){
                printf(" *");
            }else{
                printf("  ");
            }
        }
        printf("\n");
    }
}
