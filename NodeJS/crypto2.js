// Node.js program to demonstrate the  crypto.createCipheriv() method

const crypto = require('crypto');
const algorithm = 'aes-256-cbc';

const key = crypto.randomBytes(32); // Defining key
const iv = crypto.randomBytes(16); // Defining iv

// An encrypt function
function encrypt(text) {
    // Creating Cipheriv with its parameter
    let cipher = crypto.createCipheriv('aes-256-cbc', Buffer.from(key), iv); 
    let encrypted = cipher.update(text); // Updating text
    encrypted = Buffer.concat([encrypted, cipher.final()]); // Using concatenation

    // Returning iv and encrypted data
    return {
        iv: iv.toString('hex'),
        encryptedData: encrypted.toString('hex')
    };
}

// Displays output
var output = encrypt("GeeksforGeeks");
console.log(output);
