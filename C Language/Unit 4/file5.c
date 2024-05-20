/**
    read data from file
    character by character
*/

#include<stdio.h>

void main(){
    FILE *fp;
    char ip;

    fp = fopen("data2.txt", "r");
    ip = fgetc(fp);
    printf(" %c", ip);
    ip = fgetc(fp);
    printf(" %c", ip);
    ip = fgetc(fp);
    printf(" %c", ip);
    ip = fgetc(fp);
    printf(" %c", ip);
    ip = fgetc(fp);
    printf(" %c", ip);
    fclose(fp);
}
