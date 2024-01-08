// Test case 1: Valid JSON response
var xhr = {
  responseText: '{"name": "John", "age": 30}'
};

var data = JSON.parse(xhr.responseText);
console.log(data);
// Expected output: { name: 'John', age: 30 }