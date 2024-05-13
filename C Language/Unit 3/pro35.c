/**
    create menu driven banking application
*/

#include<stdio.h>

/// global balance

float balance;

void deposit();
void withdrawal();
void balanceinq();

void main(){
    balance = 10000;

    int option;

    do{
        printf("\n*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*\n");
        printf(" Press 1 for deposit");
        printf("\n Press 2 for withdrawal");
        printf("\n Press 3 for Balance Inquiery ");
        printf("\n Press 0 for exit \t");
        scanf("%d", &option);

        switch(option){
            case 1:{
                deposit();
                break;
            }
            case 2:{
                withdrawal();
                break;
            }
            case 3:{
                balanceinq();
                break;
            }
            case 0:{
                printf("\n Thanks for Using our Banking Software ");
                break;
            }
            default:{
                printf("\n Invalid Option Selected");
                break;
            }
        }

    }while(option != 0);
}

void deposit(){
    float amount;
    printf("\n Enter amount for Deposit \t");
    scanf("%f", &amount);

    if(amount > 0){
        balance += amount;
        balanceinq();
    }else{
        printf("\n Invalid Amount for Deposit");
    }
}

void withdrawal(){
    float amount;
    printf("\n Enter amount for Withdrawal \t");
    scanf("%f", &amount);

    if(amount > 0){
        if(balance > amount){
            balance -= amount;
        }else{
            printf("\n not enough balance in Account");
        }
    }else{
        printf("\n Invalid Amount for Withdrawal");
    }

    balanceinq();
}

void balanceinq(){
    printf("\n Current Balance is %f", balance);
}
