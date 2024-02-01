<?php
// update_process.php

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the user ID and updated values from the form
    $userId = $_POST['userId'];
    $newUsername = $_POST['username'];
    $newPassword = $_POST['password'];

    // Connect to the database
    $conn = new mysqli("localhost", "root", "", "library");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL query to update user information based on the ID
    $sql = "UPDATE staff_credentials SET username = ?, password = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);

    // Bind the parameters
    $stmt->bind_param("ssi", $newUsername, $newPassword, $userId);

    // Execute the update
    if ($stmt->execute()) {
        $message = "User information updated successfully!";
    } else {
        $error = "Error updating User information: " . $conn->error;
    }

    // Close the database connection
    $conn->close();
} else {
    $error = "Invalid request. Please submit the form for updating user information.";
}
?>


<!DOCTYPE html>
<html>
<head>
    <style>
        /* Add your CSS styles here for a professional look */
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            text-align: center;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #007BFF;
        }
        .message {
            color: green;
        }
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Update Library user</h1>
        <?php
        if (isset($message)) {
            echo "<p class='message'>$message</p>";
        } elseif (isset($error)) {
            echo "<p class='error'>$error</p>";
        }
        ?>
        <a href="update_libusers.php">Back to Users List</a>
    </div>
</body>
</html>
