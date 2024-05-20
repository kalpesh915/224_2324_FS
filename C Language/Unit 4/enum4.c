/**
    Enumeration (or enum) is a user defined data type in C.
    It is mainly used to assign names to integral constants,
    the names make a program easy to read and maintain.
*/

#include<stdio.h>

enum boolean {true = 1, false = 0};

void main(){
    enum boolean stat = true;

    if(stat){
        printf("\n Condition is True");
    }else{
        printf("\n Condition is False");
    }
}
