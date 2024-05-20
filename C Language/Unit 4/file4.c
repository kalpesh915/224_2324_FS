/**
    writing data in file
*/

#include<stdio.h>

void main(){
    FILE *fp;
    char ip;

    fp = fopen("data2.txt", "w");

    printf("\n Write data in file press X for exit \t");

    while(ip != 'X'){
        ip = getche();
        if(ip == 'X'){
            break;
        }

        fputc(ip, fp);
    }

    fclose(fp);

    printf("\n File Writing Completed");
}
