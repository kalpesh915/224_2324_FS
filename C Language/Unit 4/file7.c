/**
    read data from file
    line by line
*/

#include<stdio.h>

void main(){
    FILE *fp;
    char ip[100];

    fp = fopen("data3.txt", "r");
    while(!feof(fp)){
        fgets(ip, 100, fp);
        printf(" %s", ip);
    }
    fclose(fp);
}
