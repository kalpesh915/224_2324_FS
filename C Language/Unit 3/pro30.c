/**
    UDF 1 : No Parameters No Return
*/

#include<stdio.h>

void msg(); /// declaration

void main(){
    msg(); /// calling
    msg();
    msg();
}

void msg(){ /// definition
    printf("\n Welcome to world of UDF in C Language");
}
