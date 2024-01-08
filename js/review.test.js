// Test case 1: Valid JSON response
var xhr = {
  responseText: '{"name": "John", "age": 30}'
};

var data = JSON.parse(xhr.responseText);

test('JSON response should be parsed correctly', () => {
  expect(data).toEqual({ name: 'John', age: 30 });
});