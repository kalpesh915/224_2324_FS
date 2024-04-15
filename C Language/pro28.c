/// get single character from user and ASCII of character

#include<stdio.h>

void main(){
    char ip;

    printf("\n Enter any character \t");
    ip = getche(); /// get single character from keyboard

    printf("\n Entered Character is %c and ASCII is %d", ip, ip);
}
