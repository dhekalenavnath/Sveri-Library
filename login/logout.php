<?php
session_start();

if (isset($_SESSION["username"])) {
    // Get the current username
    $username = $_SESSION["username"];

    // Update the corresponding record in the database using NOW()
    $conn = new mysqli("localhost", "root", "", "library");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Find the latest login record for the user and update its logout time
    $update_query = "UPDATE login_logout_logs SET logout_time = NOW() WHERE user_id = '$username' AND logout_time IS NULL ORDER BY login_time DESC LIMIT 1";
    $conn->query($update_query);
    $conn->close();
}

// Clear the session
session_unset();
session_destroy();

header("Location: login.php"); // Redirect to the login page
exit();
?>
