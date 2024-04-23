/**
    check entered number is vowel or not
    AEIOU
*/

#include<stdio.h>

void main(){
    char ip;
    int uv, lv;

    printf("\n Enter any character \t");
    scanf("%c", &ip);

    uv = (ip=='A' || ip=='E' || ip=='I' || ip=='O' || ip=='U');
    lv = (ip=='a' || ip=='e' || ip=='i' || ip=='o' || ip=='u');

    if(uv || lv){
        printf("\n Character is vowel");
    }else{
        printf("\n Character is Consonant");
    }
}
