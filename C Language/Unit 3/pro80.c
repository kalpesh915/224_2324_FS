/**
    formal parameters
*/

#include<stdio.h>

int ans; /// global
void sum(int, int);

void main(){
    int ip1, ip2; /// local variables

    printf("\n Enter value for ip1 \t");
    scanf("%d", &ip1);
    printf("\n Enter value for ip2 \t");
    scanf("%d", &ip2);

    sum(ip1, ip2);
    printer();
}

void sum(int i, int j){
    /// i and j is formal parameters
    ans = i + j;
}

void printer(){
    printf("\n Sum is %d", ans);
}
