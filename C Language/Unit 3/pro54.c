/**
    character functions
*/

#include<stdio.h>
#include<ctype.h>


void main(){
    char c;

    printf("\n Enter any Character \t");
    c = getche();

    if(ispunct(c)){
        printf("\n True");
    }else{
        printf("\n False");
    }
}
