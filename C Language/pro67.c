/**
    ||	Called Logical OR operator.
    If any the operands are non-zero,
    then the condition becomes true.

    Truth Table
    Condition 1     Condition 2     Result
    True            False           True
    False           True            True
    False           False           False
    True            True            True
*/

#include<stdio.h>

void main(){
    printf("\n Answer is %d", (10 > 5 || 10 > 50));
    printf("\n Answer is %d", (10 > 15 || 10 > 5));
    printf("\n Answer is %d", (10 > 15 || 10 > 50));
    printf("\n Answer is %d", (10 > 5 || 10 > 8));
}
