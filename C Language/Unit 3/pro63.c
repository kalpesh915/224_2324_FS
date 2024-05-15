/**
    check entered character is lowercase or not
    a-z 97-122
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
    if(c >= 97 && c <= 122){
        return 1;
    }else{
        return 0;
    }
}
