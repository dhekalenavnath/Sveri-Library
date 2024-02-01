<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve username and password from the login form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Database connection (replace with your database credentials)
    $conn = new mysqli("localhost", "root", "", "library");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Perform a database query to check if the user exists (replace with your authentication logic)
    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($query);

    if ($result->num_rows == 1) {
        // User exists, create a session
        $_SESSION["username"] = $username;

        // Insert login time into the database using NOW()
        $insert_query = "INSERT INTO login_logout_logs (user_id, login_time) VALUES ('$username', NOW())";
        $conn->query($insert_query);

        $conn->close();

        header("Location: dashboard.php"); // Redirect to the dashboard or another page after login
        exit();
    } else {
        echo '<script>
        alert("Unvalid Username or Password");
        window.open("login.php", "_self");
    </script>';
    }
}
?>
