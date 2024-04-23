/**
    check entered number is vowel or not
    AEIOU
*/

#include<stdio.h>

void main(){
    char ip;

    printf("\n Enter any character \t");
    scanf("%c", &ip);

    if(ip=='A' || ip=='E' || ip=='I' || ip=='O' || ip=='U' || ip=='a' || ip=='e' || ip=='i' || ip=='o' || ip=='u'){
        printf("\n Character is vowel");
    }else{
        printf("\n Character is Consonant");
    }
}
