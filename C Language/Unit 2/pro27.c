/**
    example of common case in switch case
*/

#include<stdio.h>

void main(){
    int ip;

    printf("\n Enter any Month Number \t");
    scanf("%d", &ip);

    switch(ip){
        case 11:
        case 12:
        case 1:
        case 2:{
            printf("\n Winter");
            break;
        }
        case 3:
        case 4:
        case 5:
        case 6:{
            printf("\n Summer");
            break;
        }
        case 7:
        case 8:
        case 9:
        case 10:{
            printf("\n Monsoon");
            break;
        }
        default:{
            printf("\n Month is out of Range");
            break;
        }
    }
}
