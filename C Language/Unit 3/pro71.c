/**
    structure
*/

#include<stdio.h>
#define size 5

struct student{
    int roll;       /// 04
    char name[20];  /// 20
    float per;      /// 04
                    /// 28
};

void main(){

    struct student s1[size];
    int i;

    for(i=0; i<size; i++){
        printf("\n Enter Roll Number \t");
        scanf("%d", &s1[i].roll);
        fflush(stdin);
        printf("\n Enter Name \t");
        gets(s1[i].name);
        printf("\n Enter Percentage \t");
        scanf("%f", &s1[i].per);
    }

    for(i=0; i<size; i++){
        printf("\n Welcome %s roll no. is %d and percentage is %f", s1[i].name, s1[i].roll, s1[i].per);
    }
}
