// Mocking the JSON response
var xhr = {
  responseText: '{"name": "John", "age": 30}'
};

// Parsing the JSON response
var data = JSON.parse(xhr.responseText);

// Assertion
console.log(data.name); // Expected output: "John"
console.log(data.age); // Expected output: 30