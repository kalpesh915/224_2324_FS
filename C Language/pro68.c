/**
!	Called Logical NOT Operator.
It is used to reverse the logical state of its operand.
If a condition is true, then Logical NOT  operator will make it false.

*/

#include<stdio.h>

void main(){
    printf("\n Answer is %d", (10 > 5));
    printf("\n Answer is %d", !(10 > 5));
    printf("\n Answer is %d", (10 > 15 && 15 > 150));
    printf("\n Answer is %d", !(10 > 15 && 15 > 150));
    printf("\n Answer is %d", (10 > 15 && !15 > 150));
}
