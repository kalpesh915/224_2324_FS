let x = 10;

console.log("Outside block x is "+x);

{
    let x = 20;
    console.log("Inside block x is "+x);
}

console.log("After block x is "+x);
