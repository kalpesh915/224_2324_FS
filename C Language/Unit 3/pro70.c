/**
    structure
*/

#include<stdio.h>

struct student{
    int roll;       /// 04
    char name[20];  /// 20
    float per;      /// 04
                    /// 28
}s1, s2;

void main(){

    printf("\n Enter Roll Number \t");
    scanf("%d", &s1.roll);
    fflush(stdin);
    printf("\n Enter Name \t");
    gets(s1.name);
    printf("\n Enter Percentage \t");
    scanf("%f", &s1.per);

    s2 = s1;

    printf("\n Roll No. is %d", s1.roll);
    printf("\n Name is %s", s1.name);
    printf("\n Percentage is %f", s1.per);

    printf("\n New Structure is \n");
    printf("\n Roll No. is %d", s2.roll);
    printf("\n Name is %s", s2.name);
    printf("\n Percentage is %f", s2.per);
}
