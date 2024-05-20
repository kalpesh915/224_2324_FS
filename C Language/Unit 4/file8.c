/**
    append mode
*/

#include<stdio.h>

void main(){
    FILE *fp;
    char ip[100];

    fp = fopen("data4.txt", "a");
    fputs("This is another line of text \n", fp);
    fclose(fp);
}
