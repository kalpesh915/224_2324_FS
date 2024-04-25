/**
    basic calculator with switch case
*/

#include<stdio.h>

void main(){
    int ip1, ip2;
    char op;
    float ans = 0;

    printf("\n Enter any value for ip1 \t");
    scanf("%d", &ip1);
    printf("\n Enter any value for ip2 \t");
    scanf("%d", &ip2);

    printf("\n Press + for Sum ");
    printf("\n Press - for Sub ");
    printf("\n Press * for Mul ");
    printf("\n Press / for Div ");
    printf("\n Press %% for Mod \t");

    op = getche();

    switch(op){
        case '+':{
            ans = ip1 + ip2;
            break;
        }
        case '-':{
            ans = ip1 - ip2;
            break;
        }
        case '*':{
            ans = ip1 * ip2;
            break;
        }
        case '/':{
            ans = ip1 / ip2;
            break;
        }
        case '%':{
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
