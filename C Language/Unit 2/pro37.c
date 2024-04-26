/**
    find maximum out of 10 numbers
*/


#include<stdio.h>

void main(){
    int i = 1, max = 0, tmp;

    while(i <= 10){
        printf("\n Enter any value \t");
        scanf("%d", &tmp);

        if(max < tmp){
            max = tmp;
        }

        i++;
    }

    printf("\n Answer is %d", max);
}
