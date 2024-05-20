/**
    r mode : used to read data from file
*/

#include<stdio.h>

void main(){
    FILE *fp;
    char ip[100];

    fp = fopen("data1.txt", "r");
    fgets(ip, 100, fp);
    fclose(fp);

    printf("\n File Reading Completed Data is %s", ip);
}
