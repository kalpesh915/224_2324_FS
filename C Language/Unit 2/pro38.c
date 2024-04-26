/**
    1 10 2 9 3 8 4 7 5 6 6 5 7 4 8 3 9 2 10 1
*/


#include<stdio.h>

void main(){
    int i = 1, j = 10;

    while(i <= 10){
        printf(" %d %d", i, j);
        i++;
        j--;
    }
}
