/**
    Enumeration (or enum) is a user defined data type in C.
    It is mainly used to assign names to integral constants,
    the names make a program easy to read and maintain.
*/

#include<stdio.h>

enum days {sunday, monday, tuesday, wednesday, thursday, friday, saturday};

void main(){
    /// variable of enum
    enum days d1;
    d1 = monday;

    printf("\n value of d1 is %d", d1);
}
