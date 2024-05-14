/**
    String Function
*/

#include<stdio.h>
#include<string.h>

void main(){
    char ip1[20], ip2[20];
    int ans;

    printf("\n Enter any String \t");
    gets(ip1);
    printf("\n Enter any String \t");
    gets(ip2);

    ans = strcmp(ip2, ip1);
    /**
        compare in lexicographically order of ASCII

        A - A | 65 - 65 = 0
        A - a | 65 - 97 = -32
        a - A | 97 - 65 = 32
    */

    printf("\n Answer is %d", ans);
}
