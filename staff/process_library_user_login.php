<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the submitted username and password
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Set the time zone to Indian Standard Time (IST)
    date_default_timezone_set('Asia/Kolkata');

    // Connect to the database (replace with your database credentials)
    $conn = new mysqli("localhost", "root", "", "library");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Query to check if the username and password match in staff_credentials table
    $query = "SELECT * FROM staff_credentials WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($query);

    if ($result->num_rows == 1) {
        // Authentication successful, start a session for the library user and store username
        $_SESSION["library_user_username"] = $username;

        // Record login time in the staff_loginouttime table using Indian Standard Time (IST)
        $loginTime = date("Y-m-d H:i:s");
        $insertLoginQuery = "INSERT INTO staff_loginouttime (username, login_time) VALUES ('$username', '$loginTime')";
        $conn->query($insertLoginQuery);

        header("Location: staff_dashboard.php"); // Redirect to library user dashboard
        exit();
    } else {
        // Authentication failed, show an error message or redirect to login page
        echo "Invalid username or password.";
    }

    $conn->close();
}

?>
