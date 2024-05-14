/**
    count how many characters, word, numbers, special character
    in entered string
*/

#include<stdio.h>
#include<ctype.h>
#include<string.h>

void main(){
    char ip[100], c;
    int i, len, ac=0, uc=0, lc=0, dc=0, scc=0, wc = 1;

    printf("\n Enter any String \t");
    gets(ip);

    len = strlen(ip);

    for(i=0; i<len; i++){
        c = ip[i];

        if(isalpha(c)){
            ac++;
            if(isupper(c)){
                uc++;
            }else{
                lc++;
            }
        }else if(isdigit(c)){
            dc++;
        }else if(ispunct(c)){
            scc++;
        }else if(isspace(c)){
            wc++;
        }
    }

    printf("\n Total Character are %d", len);
    printf("\n Total Alphabets are %d", ac);
    printf("\n Total Uppercase Alphabets are %d", uc);
    printf("\n Total Lowercase Alphabets are %d", lc);
    printf("\n Total Digits Alphabets are %d", dc);
    printf("\n Total Special Character are %d", scc);
    printf("\n Total Words are %d", wc);
}
