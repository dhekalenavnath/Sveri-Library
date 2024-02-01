<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the title from the form
    $titleToDelete = $_POST['title'];

    // Connect to the database
    $conn = new mysqli("localhost", "root", "", "library");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL query to delete arrival information based on the title
    $sql = "DELETE FROM new_arrival WHERE title = ?";

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $titleToDelete);

    if ($stmt->execute()) {
        echo '<script>
            alert("Arrival information deleted successfully!");
            window.location.href = "new_arrival.php";
        </script>';
    } else {
        echo "Error deleting arrival information: " . $stmt->error;
    }

    // Close the statement and database connection
    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request. Please submit the form for deleting arrival information.";
}
?>
