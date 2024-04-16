/**
    Create result with five subjects
*/

#include<stdio.h>

void main(){
    int sub1, sub2, sub3, sub4, sub5, total;
    float percentage;

    printf("\n Enter marks of subject 1 \t");
    scanf("%d", &sub1);
    printf("\n Enter marks of subject 2 \t");
    scanf("%d", &sub2);
    printf("\n Enter marks of subject 3 \t");
    scanf("%d", &sub3);
    printf("\n Enter marks of subject 4 \t");
    scanf("%d", &sub4);
    printf("\n Enter marks of subject 5 \t");
    scanf("%d", &sub5);

    total = sub1 + sub2 + sub3 + sub4 + sub5;
    percentage = total / 5;

    printf("\n Total Marks are %d", total);
    printf("\n Percentage is %f", percentage);
}
