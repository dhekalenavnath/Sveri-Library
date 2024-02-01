<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the submitted username and password
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Connect to the database (replace with your database credentials)
    $conn = new mysqli("localhost", "root", "", "library");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Query to check if the username and password match
    $query = "SELECT * FROM admin_credentials WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($query);

    if ($result->num_rows == 1) {
        // Authentication successful, start a session and store admin username
        $_SESSION["admin_username"] = $username;
        header("Location: adminl.php"); // Redirect to admin dashboard
        exit();
    } else {
        // Authentication failed, show an error message or redirect to login page
        echo '<script>alert("Invalid username or password.");';
        echo 'window.open("admin.php","_self");</script>';
    }

    $conn->close();
}
?>
