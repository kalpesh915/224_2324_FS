let buffer1 = new Buffer(256);

let count = buffer1.write("Welcome to NodeJS");

console.log("Writen Characters are "+count);
console.log(buffer1);