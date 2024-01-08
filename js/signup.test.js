// Test case 1: Matching passwords
document.getElementById("password").value = "password123";
document.getElementById("confirm_password").value = "password123";
check();
// Expected output: <div id="confirm"></div>

// Test case 2: Non-matching passwords
document.getElementById("password").value = "password123";
document.getElementById("confirm_password").value = "password456";
check();
// Expected output: <div id="confirm">Password does not match</div>

// Test case 3: Empty confirm password
document.getElementById("password").value = "password123";
document.getElementById("confirm_password").value = "";
check();
// Expected output: <div id="confirm"></div>