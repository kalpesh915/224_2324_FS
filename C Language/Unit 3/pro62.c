/**
    compare two strings
    lexicographically compare

    A-Z =   65-90
    a-z =   97-122
*/

#include<stdio.h>

int compare(char[], char[]);

void main(){
    char ip1[100], ip2[100];
    int ans;

    printf("\n Enter any String \t");
    gets(ip1);
    printf("\n Enter any String \t");
    gets(ip2);

    ans = compare(ip1, ip2);

    if(ans == 0){
        printf("\n Both Strings are Same");
    }else{
        printf("\n Both Strings are Not Same");
    }
}

int compare(char ip1[100], char ip2[100]){
    int count = 0, diff = 0;

    /**
        ip1 welcome
        ip2 zelcome
    */

    while(ip1[count] != '\0' || ip2[count] != '\0'){
        if(ip1[count] != ip2[count]){
            diff = ip1[count] - ip2[count];
            break;
        }
        count++;
    }

    return diff;
}
