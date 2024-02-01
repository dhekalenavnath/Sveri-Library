<?php
// Connect to the MySQL database
$mysqli = new mysqli("localhost", "root", "", "library");

// Check the connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Retrieve user input from the form
$username = $_POST['username'];
$password = $_POST['password'];

// Check if the user already exists
$check_sql = "SELECT * FROM users WHERE username = '$username'";
$result = $mysqli->query($check_sql);

if ($result->num_rows > 0) {
    // User already exists, display a message
    echo '<script>alert("User already exists. Please choose a different username.");
    window.open("register_user.php","_self");</script>';
} else {
    // User doesn't exist, insert data into the database
    $insert_sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

    if ($mysqli->query($insert_sql) === TRUE) {
        echo'<script>alert("User Created Successfully");
        window.open("register_user.php","_self");
        </script>';
    } else {
        echo "Error: " . $insert_sql . "<br>" . $mysqli->error;
    }
}

// Close the database connection
$mysqli->close();
?>
