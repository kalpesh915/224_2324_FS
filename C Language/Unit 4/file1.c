/**
    write some text in file

    fopen(file name, file mode)

    file name = data1.txt
    file mode = w (open for writing)
*/

#include<stdio.h>

void main(){
    FILE *fp;

    fp = fopen("data1.txt", "w");
    fputs("Welcome to world of Files with C Language", fp);
    fclose(fp);

    printf("\n File Writing Completed");
}
