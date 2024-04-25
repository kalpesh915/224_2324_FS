/**
    basic calculator with switch case
*/

#include<stdio.h>

void main(){
    int ip1, ip2, op;
    float ans = 0;

    printf("\n Enter any value for ip1 \t");
    scanf("%d", &ip1);
    printf("\n Enter any value for ip2 \t");
    scanf("%d", &ip2);

    printf("\n Press 1 for Sum ");
    printf("\n Press 2 for Sub ");
    printf("\n Press 3 for Mul ");
    printf("\n Press 4 for Div ");
    printf("\n Press 5 for Mod \t");

    scanf("%d", &op);

    switch(op){
        case 1:{
            ans = ip1 + ip2;
            break;
        }
        case 2:{
            ans = ip1 - ip2;
            break;
        }
        case 3:{
            ans = ip1 * ip2;
            break;
        }
        case 4:{
            ans = ip1 / ip2;
            break;
        }
        case 5:{
            ans = ip1 % ip2;
            break;
        }
        default:{
            printf("\n Operator is unknown");
            break;
        }
    }

    printf("\n Answer is %f", ans);
}
