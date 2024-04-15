/// Find area of Circle

#include<stdio.h>

void main(){
    float radius, area, pi = 3.14;

    printf("\n Enter Radius of Circle \t");
    scanf("%f", &radius);

    area = pi * radius * radius;

    printf("\n Area of Circle is %f", area);
}
