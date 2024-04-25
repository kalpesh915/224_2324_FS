/**
    example of basic switch case
*/

#include<stdio.h>

void main(){
    int ip;

    printf("\n Enter any Day Number \t");
    scanf("%d", &ip);

    switch(ip){
        case 0:{
            printf("\n Sunday");
        }
        case 1:{
            printf("\n Monday");
        }
        case 2:{
            printf("\n Tuesday");
        }
        case 3:{
            printf("\n Wednesday");
        }
        case 4:{
            printf("\n Thursday");
        }
        case 5:{
            printf("\n Friday");
        }
        case 6:{
            printf("\n Saturday");
        }
        default:{
            printf("\n Day is out of Range");

        }
    }
}
