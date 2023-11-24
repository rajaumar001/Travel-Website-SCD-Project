<?php
$notFound = null;
$failure = null;

require_once 'DatabaseSingleton.php';  // Include the Singleton Pattern file

$databaseSingleton = DatabaseSingleton::getInstance();
$mysqli = $databaseSingleton->getMySQLi();

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Retrieve user data based on the provided username
    $query = "SELECT * FROM signup WHERE Username = ?";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();

        // Compare the provided password with the stored password
        if ($password === $user['Pass']) {
            session_start();
            $_SESSION['username'] = $username;
            header("Location: index.php");
            exit();
        } else {
            $failure = "Incorrect password. Please try again.";
        }
    } else {
        $notFound = "User not found. Please check your username.";
    }
}

$mysqli->close();
?>
