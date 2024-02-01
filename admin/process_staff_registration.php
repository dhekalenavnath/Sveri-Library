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

    // Insert the new library user into the staff_credentials table
    $sql = "INSERT INTO staff_credentials (username, password) VALUES ('$username', '$password')";

    if ($conn->query($sql) === TRUE) {
        // Registration successful, redirect to admin_dashboard.php
        echo '<script>alert("Registration successful!");';
        echo 'window.open("staff_registration.php","_self");</script>';
        exit(); // Ensure script execution stops after the redirect
    } else {
        // Registration failed
        echo "<script>alert('Error: " . $conn->error . "');</script>";
    }

    $conn->close();
}
?>
