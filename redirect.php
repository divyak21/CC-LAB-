<?php
// Credentials for valid login
$valid_userid = "your_name";
$valid_password = "your_roll_number";

// Get user input
$user_id = $_POST['userid'];
$password = $_POST['password'];

// Check if credentials are valid
if ($user_id === $valid_userid && $password === $valid_password) {
    // Redirect to valid user page
    header("Location: valid_user.html");
    exit();
} else {
    // Redirect to invalid user page
    header("Location: invalid_user.html");
    exit();
}
?>
