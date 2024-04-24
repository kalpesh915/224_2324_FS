/**
    create light bill calculator

    units           rate
    000-100         10
    101-200         11
    201-300         12
    301-NNN         13

    110 =   100 * 10 = 1000
            010 * 11 = 0110
                       ----
                       1110
*/

#include<stdio.h>

void main(){
    int units, bill, diff;

    printf("\n Enter units \t");
    scanf("%d", &units);

    if(units >= 0 && units <= 100){
        bill = units * 10;
    }else if(units > 100 && units <= 200){
        diff = units - 100;
        bill = (diff * 11) + 1000;
    }else if(units > 200 && units <= 300){
        diff = units - 200;
        bill = (diff * 12) + 2100;
    }else if(units > 300 ){
        diff = units - 300;
        bill = (diff * 13) + 3300;
    }

    printf("\n Payable Bill is %d", bill);
}
