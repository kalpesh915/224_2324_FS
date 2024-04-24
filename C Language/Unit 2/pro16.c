/**
    create basic result with 3 subjects
*/

#include<stdio.h>

void main(){
    int sub1, sub2, sub3, total;
    float percentage;

    printf("\n Enter marks for subject 1 \t");
    scanf("%d", &sub1);
    printf("\n Enter marks for subject 2 \t");
    scanf("%d", &sub2);
    printf("\n Enter marks for subject 3 \t");
    scanf("%d", &sub3);

    if(sub1 >= 35 && sub2 >= 35 && sub3 >= 35){
        total = sub1 + sub2 + sub3;
        percentage = total / 3;

        printf("\n Total Marks is %d", total);
        printf("\n Percentage is %f", percentage);
    }else{
        printf("\n Please try in next examination");
    }
}
