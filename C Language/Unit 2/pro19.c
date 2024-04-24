/**
        check for profit or loss
*/

#include<stdio.h>

void main(){
    int pp, sp, pl;

    printf("\n Enter Purchase price \t");
    scanf("%d", &pp);
    printf("\n Enter Sale price \t");
    scanf("%d", &sp);

    pl = (sp - pp);


    if(pl > 0){
        printf("\n Profit");
    }else if(pl < 0){
        printf("\n Loss");
    }else{
        printf("\n No Profit No Loss");
    }

}
