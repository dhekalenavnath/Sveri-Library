<?php
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    // Retrieve the book ID from the URL
    $bookId = $_GET['id'];

    // Connect to the database
    $conn = new mysqli("localhost", "root", "", "library");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL query to delete the book based on the ID
    $sql = "DELETE FROM book WHERE ID = ?";
    $stmt = $conn->prepare($sql);

    // Bind the book ID as a parameter
    $stmt->bind_param("i", $bookId);

    // Execute the delete operation
    if ($stmt->execute()) {
        // Book deleted successfully
        echo "<script>alert('Book  has been deleted.'); window.location='bookdis.php','_self';</script>";
    } else {
        // Error occurred during deletion
        echo "Error deleting the book: " . $conn->error;
    }

    // Close the database connection
    $conn->close();
} else {
    echo "Invalid request. Please provide a valid book ID.";
}
?>
