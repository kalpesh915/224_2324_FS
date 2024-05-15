/**
    check entered character is uppercase or not
    A-Z = 65-90
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
    if(c >= 65 && c <= 90){
        return 1;
    }else{
        return 0;
    }
}
