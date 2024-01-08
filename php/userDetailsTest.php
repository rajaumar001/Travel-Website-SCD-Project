<?php
require_once 'userDetails.php';

// Test case 1: Test when user is logged in and exists in the database
$_SESSION['username'] = 'john_doe';
$result = $mysqli->query("INSERT INTO signup (Username) VALUES ('john_doe')");
$userDetails = getUserDetails();
assert($userDetails['Username'] === 'john_doe');

// Test case 2: Test when user is logged in but does not exist in the database
$_SESSION['username'] = 'jane_doe';
$userDetails = getUserDetails();
assert($userDetails['error'] === 'User not found');

// Test case 3: Test when user is not logged in
unset($_SESSION['username']);
$userDetails = getUserDetails();
assert($userDetails['error'] === 'User not logged in');

// Helper function to get user details
function getUserDetails() {
    ob_start();
    include 'userDetails.php';
    $output = ob_get_clean();
    return json_decode($output, true);
}
?>