/**
    example of basic switch case
*/

#include<stdio.h>

void main(){
    int ip;

    printf("\n Enter any Month Number \t");
    scanf("%d", &ip);

    switch(ip){
        case 1:{
            printf("\n Winter");
            break;
        }
        case 2:{
            printf("\n Winter");
            break;
        }
        case 3:{
            printf("\n Summer");
            break;
        }
        case 4:{
            printf("\n Summer");
            break;
        }
        case 5:{
            printf("\n Summer");
            break;
        }
        case 6:{
            printf("\n Summer");
            break;
        }
        case 7:{
            printf("\n Monsoon");
            break;
        }
        case 8:{
            printf("\n Monsoon");
            break;
        }
        case 9:{
            printf("\n Monsoon");
            break;
        }
        case 10:{
            printf("\n Monsoon");
            break;
        }
        case 11:{
            printf("\n Winter");
            break;
        }
        case 12:{
            printf("\n Winter");
            break;
        }
        default:{
            printf("\n Month is out of Range");
            break;
        }
    }
}
