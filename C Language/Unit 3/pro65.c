/**
    check entered character is number or not
    0-9 = 47-58
*/

#include<stdio.h>

int check(char);

void main(){
    char ip1;

    printf("\n Enter any Character \t");
    ip1 = getche();

    if(check(ip1)){
        printf("\n True");
    }else{
        printf("\n False");
    }
}

int check(char c){
    if(c >= 47 && c <= 58){
        return 1;
    }else{
        return 0;
    }
}
