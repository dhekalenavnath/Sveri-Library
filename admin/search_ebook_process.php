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

// Initialize variables
$searchTerm = '';
$department = '';

// Get search term and department from GET request
if(isset($_GET['search'])){
    $searchTerm = $_GET['search'];
}

if(isset($_GET['department'])){
    $department = $_GET['department'];
}

// Prepare and execute query to fetch files based on search term and department
$sql = "SELECT id, title FROM ebooks WHERE department = ? AND title LIKE ?";
$stmt = $conn->prepare($sql);
$searchTerm = '%' . $searchTerm . '%';
$stmt->bind_param("ss", $department, $searchTerm);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '<div class="search-result">';
        echo '<div class="title">' . $row["title"] . '</div>';
        echo '<div class="download-link"><a href="download_ebook.php?id=' . $row["id"] . '">Download PDF</a></div>';

        // Add a delete button
       

        echo '</div>';
    }
} else {
    echo "No results found";
}

// Close the database connection
$stmt->close();
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    
<script>
function deleteEbook(ebookId) {
    // You can use JavaScript or a library like jQuery to send an AJAX request
    // to a PHP script that handles ebook deletion.
    // Here's a simple example using jQuery for the AJAX request:
    alert("hello");

    $.ajax({
        type: "POST",
        url: "delete_ebook.php", // Create this PHP file to handle the deletion
        data: { id: ebookId },
        success: function(response) {
            if (response === 'success') {
                // Optionally, you can remove the search result container from the DOM.
                $('.search-result:has(.delete-button button:contains("Delete"))').remove();
            } else {
                alert("Failed to delete ebook.");
            }
        }
    });
}
</script>

</body>
</html>