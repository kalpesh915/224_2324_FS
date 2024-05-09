/**
    Three Dimensional Array
*/

#include<stdio.h>
#define size 3

void main(){
    int ip[size][size][size];


    /**
        ip array have 3 blocks with 3 rows every rows
        have 3 columns

        ip
                0           1           2

            0   1   2   0   1   2   0   1   2
        0
        1       10                          11
        2

        ip[0][1][1] = 10
        ip[2][1][2] = 11
        ip[block][row][column]
    */

    printf("\n Size of Array is %d Bytes", sizeof(ip));
}
