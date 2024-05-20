/**
    convert file in uppercase text
*/

#include<stdio.h>

void main(){
    FILE *rfp, *wfp;
    char ip[100];

    rfp = fopen("data4.txt", "r");
    wfp = fopen("upper.txt", "w");

    while(!feof(rfp)){
        fgets(ip, 100, rfp);

        fputs(strupr(ip), wfp);
    }

    fclose(rfp);
    fclose(wfp);
}
