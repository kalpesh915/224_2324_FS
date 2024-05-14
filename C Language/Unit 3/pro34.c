/**
    UDF 4 : With Parameters With Return
*/

#include<stdio.h>

int max(int, int); /// int, int is know as parameters

void main(){
    int ip1, ip2, ans;

    printf("\n Enter value for ip1 \t");
    scanf("%d", &ip1);
    printf("\n Enter value for ip2 \t");
    scanf("%d", &ip2);

    ans = max(ip1, ip2); /// ip1, ip2 is arguments

    printf("\n Maximum is %d", ans);
}

int max(int ip1, int ip2){
    if(ip1 > ip2){
        return ip1;
    }else{
        return ip2;
    }
}
