/**
    read pointer
*/

#include<stdio.h>

void main(){
    FILE *fp;
    char ip[100];

    fp = fopen("data4.txt", "r");
    printf("\n Reading pointer at %d", ftell(fp));
    fseek(fp, 20, 0);
    fgets(ip, 100, fp);
    printf("\n Data is : %s", ip);
    printf("\n Reading pointer at %d", ftell(fp));
    fclose(fp);
}
