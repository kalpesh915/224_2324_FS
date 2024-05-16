/**
    structure
*/

#include<stdio.h>

struct student{
    int roll;       /// 04
    char name[20];  /// 20
    float per;      /// 04
                    /// 28
};

void main(){
    struct student s1 = {123, "Het Manani", 58.65};;
    printf("\n Size of Structure is %d Bytes ",sizeof(s1));

    printf("\n Roll No. is %d", s1.roll);
    printf("\n Name is %s", s1.name);
    printf("\n Percentage is %f", s1.per);
}
