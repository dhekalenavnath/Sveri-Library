<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$database = "library";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Prepare statement to prevent SQL injection
    $stmt = $conn->prepare("SELECT title, file_data, department FROM model_answers WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        // Bind the result variables
        $stmt->bind_result($title, $fileData, $department);
        $stmt->fetch();

        // Set the Content-Type to application/pdf
        header('Content-Type: application/pdf');

        // Specify the file name for download
        header('Content-Disposition: attachment; filename="' . $title . '.pdf"');

        // Output the file data
        echo $fileData;
    } else {
        echo "File not found";
    }

    // Close the statement
    $stmt->close();
}

// Close the database connection
$conn->close();
?>
