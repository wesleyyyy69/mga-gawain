let secretMessage = [
    'Learning', 'is', 'not', 'about', 'what', 'you', 
    'get', 'easily', 'the', 'first', 'time,', 'it', 
    'is', 'about', 'what', 'you', 'can', 'figure', 
    'out.', '-2015', 'Chris', 'Pine', 'learn', 'JavaScript'
];

// Remove the last string of the array
secretMessage.pop();

// Add 'to' and 'Program' to the end of the array
secretMessage.push('to', 'Program');

// Replace 'easily' with 'right'
secretMessage[7] = 'right';

// Remove the first string of the array
secretMessage.shift();

// Add 'Programming' to the beginning of the array
secretMessage.unshift('Programming');

// Remove 'get', 'right', 'the', 'first', 'time,' and replace them with 'know,'
let startIndex = secretMessage.indexOf('get');
let endIndex = secretMessage.indexOf('time,') + 1;
secretMessage.splice(startIndex, endIndex - startIndex, 'know,');

// Print the secret message as a sentence
console.log(secretMessage.join(' '));
