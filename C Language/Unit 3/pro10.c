/**
    check entered value is exist in array or not
*/

#include<stdio.h>

void main(){
    int ip1[10], i, tmp, flag = 0;

    /// scan values from user
    for(i=0; i<10; i++){
        printf("\n Enter value for ip1[%d] \t", i);
        scanf("%d", &ip1[i]);
    }

    printf("\n Enter any value for check exist in array \t");
    scanf("%d", &tmp);

    /// checking value
    for(i=0; i<10; i++){
        if(tmp == ip1[i]){
            flag = 1;
            break;
        }
    }

    if(flag == 1){
        printf("\n Value is Exist in Array");
    }else{
        printf("\n Value is Not Exist in Array");
    }
}
