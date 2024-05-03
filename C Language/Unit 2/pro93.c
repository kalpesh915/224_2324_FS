/**
    Find maximum out of n values entered from user
*/

#include<stdio.h>

void main(){
    int tmp, max=0;;

    do{
        printf("\n Enter any Number \t");
        scanf("%d", &tmp);

        if(max < tmp){
            max = tmp;
        }
    }while(tmp != 0);

    printf("\n Maximum is %d", max);
}
