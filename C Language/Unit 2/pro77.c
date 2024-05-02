/**
    create menu driven calculator
*/

#include<stdio.h>

void main(){
    int ip1, ip2, ans, option;

    do{
        printf("\n \n Basic Calculator");
        printf("\n ------------------------------------ \n");
        printf("\n Enter value for ip1 \t");
        scanf("%d", &ip1);
        printf("\n Enter value for ip2 \t");
        scanf("%d", &ip2);

        printf("\n Press 1 for Sum ");
        printf("\n Press 2 for Sub ");
        printf("\n Press 3 for Mul ");
        printf("\n Press 4 for Div ");
        printf("\n Press 5 for Mod ");
        printf("\n Press 0 for Exit \t ");
        scanf("%d", &option);

        switch(option){
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
            case 0:{
                printf("\n Thanks for using Calculator App.");
                break;
            }
            default:{
                printf("\n Invalid Choice");
                break;
            }
        }

        printf("\n Answer is %d", ans);
    }while(option != 0);
}
