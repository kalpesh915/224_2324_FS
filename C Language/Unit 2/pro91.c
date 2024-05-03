/**
    check entered number in armstrong or not
    371

    3   027
    7   343
    1   001
        ---
        371
*/

#include<stdio.h>

void main(){
    int ip, tmp, nm, cube, ans = 0;

    printf("\n Enter any Number \t");
    scanf("%d", &ip);

    tmp = ip;

    while(tmp > 0){
        nm = tmp % 10;
        cube = (nm * nm * nm);
        ans += cube;
        tmp = tmp / 10;
    }

    if(ans == ip){
        printf("\n Number is Arm Strong");
    }else{
        printf("\n Try Another Number");
    }
}
