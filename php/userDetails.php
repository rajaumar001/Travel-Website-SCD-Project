<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    http_response_code(403); // Forbidden
    echo json_encode(["error" => "User not logged in"]);
    exit();
}

require_once 'DatabaseSingleton.php';

$databaseSingleton = DatabaseSingleton::getInstance();
$mysqli = $databaseSingleton->getMySQLi();

$query = "SELECT * FROM signup WHERE Username = ?";
$stmt = $mysqli->prepare($query);
$stmt->bind_param('s', $_SESSION['username']);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();
} else {
    http_response_code(404); // Not Found
    echo json_encode(["error" => "User not found"]);
    exit();
}

$stmt->close();
$mysqli->close();
?>