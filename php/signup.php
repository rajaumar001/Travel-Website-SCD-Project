<?php
$success = null;
$failure = null;

require_once 'DatabaseSingleton.php';  // Include the Singleton Pattern file
require_once 'UserFactory.php';        // Include the Factory Method Pattern file

$databaseSingleton = DatabaseSingleton::getInstance();
$mysqli = $databaseSingleton->getMySQLi();

if (isset($_POST["submit"])) {
    $email = $_POST['username'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirm_password'];

    if ($password !== $cpassword) {
        $failure = "Password and Confirm Password do not match.";
    } else {
        $checkQuery = "SELECT COUNT(*) FROM signup WHERE Username = ?";
        $checkStmt = $mysqli->prepare($checkQuery);
        $checkStmt->bind_param('s', $email);
        $checkStmt->execute();
        $checkStmt->bind_result($count);
        $checkStmt->fetch();
        $checkStmt->close();

        if ($count > 0) {
            $failure = "This email address is already in use.";
        } else {
            // Use the factory method to create a user object
            $userFactory = new SignupUserFactory();
            $user = $userFactory->createUser($email, $name, $password);

            $emailVar = $user->getEmail();
            $nameVar = $user->getName();
            $passwordVar = $user->getPassword();

            $insertQuery = "INSERT INTO signup (Username, Name, Pass) VALUES (?, ?, ?)";
            $insertStmt = $mysqli->prepare($insertQuery);
            $insertStmt->bind_param('sss', $emailVar, $nameVar, $passwordVar);

            if ($insertStmt->execute()) {
                $success = "User Registered Successfully";
            } else {
                echo "Something went wrong during registration.";
            }

            $insertStmt->close();
        }
    }
}
?>
