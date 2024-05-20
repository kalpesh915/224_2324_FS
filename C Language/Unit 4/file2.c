/**
    write some text in file

    fopen(file name, file mode)

    file name = data1.txt
    file mode = w (open for writing)
*/

#include<stdio.h>

void main(){
    FILE *fp;
    char ip[100];

    fp = fopen("data1.txt", "w");
    printf("\n Enter Your First Name \t");
    gets(ip);
    fputs(ip, fp);
    printf("\n Enter Your Last Name \t");
    gets(ip);
    fputs(ip, fp);
    fclose(fp);

    printf("\n File Writing Completed");
}
