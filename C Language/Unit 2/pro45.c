/**
    get 10 values from user and print sum of it
*/

#include<stdio.h>

void main(){
    int i, tmp, ans=0;

    for(i=1; i<=10; i++){
        printf("\n Enter any value \t");
        scanf("%d", &tmp);

        ans += tmp;
    }

    printf("\n Answer is %d", ans);
}
