/**
    read pointer
*/

#include<stdio.h>

void main(){
    FILE *fp;
    char ip[100];

    fp = fopen("data4.txt", "r");
    printf("\n Reading pointer at %d", ftell(fp));
    fgets(ip, 100, fp);
    printf("\n Reading pointer at %d", ftell(fp));
    fgets(ip, 100, fp);
    printf("\n Reading pointer at %d", ftell(fp));
    fclose(fp);
}
