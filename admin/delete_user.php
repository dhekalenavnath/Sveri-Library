<?php
if (isset($_GET['id'])) {
    $userId = $_GET['id'];
    
    // Establish a database connection (similar to your other scripts)
    $conn = new mysqli("localhost", "root", "", "library");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute the SQL query to delete the user
    $sql = "DELETE FROM staff_credentials WHERE id = $userId";

    if ($conn->query($sql) === TRUE) {
        // User deleted successfully
        header("Location: update_libusers.php"); // Redirect to the appropriate page after deletion
        exit();
    } else {
        echo "Error deleting user: " . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
