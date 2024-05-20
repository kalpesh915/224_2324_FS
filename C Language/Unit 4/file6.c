/**
    read data from file
    character by character
*/

#include<stdio.h>

void main(){
    FILE *fp;
    char ip;

    fp = fopen("data2.txt", "r");
    while(!feof(fp)){
        ip = fgetc(fp);
        printf(" %c", ip);
    }
    fclose(fp);
}
