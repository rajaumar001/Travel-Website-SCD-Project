// Test case 1: Empty email and password
test('Empty email and password should clear the error message', () => {
  // Arrange
  const email = '';
  const password = '';
  const errorElement = document.querySelector('.usernotfound');
  
  // Act
  execute(email, password);
  
  // Assert
  expect(errorElement.innerHTML).toBe('');
});