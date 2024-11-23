let buffer1 = new Buffer(26);

for(let i = 0; i < 26; i++){
    buffer1[i] = i + 97;
}

console.log(buffer1);
console.log(buffer1.toString());
console.log(buffer1.toString("ascii"));
console.log(buffer1.toString("utf-8"));
console.log(buffer1.toString("ascii", 0, 10));
console.log(buffer1.toString(undefined));