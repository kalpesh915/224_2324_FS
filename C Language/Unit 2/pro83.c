/**
    go to keyword
*/

#include<stdio.h>

void main(){
    int i;

    question: /// label
    printf("\n 5 * 5 = ? \t");
    scanf("%d", &i);

    if(i == 25){
        printf("\n Correct Answer");
    }else{
        goto question;
    }
}
