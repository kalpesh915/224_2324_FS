/**
    example of basic switch case
*/

#include<stdio.h>

void main(){
    int ip;

    printf("\n Enter any value for ip \t");
    scanf("%d", &ip);

    switch(ip){
        case '1':{ /// logical error output is : out of Range
            printf("\n value is one");
            break;
        }
        case 2:{
            printf("\n value is two");
            break;
        }
        case 3:{
            printf("\n value is three");
            break;
        }
        case 4:{
            printf("\n value is four");
            break;
        }
        case 5:{
            printf("\n value is five");
            break;
        }
        default:{
            printf("\n value is out of Range");
            break;
        }
    }
}
