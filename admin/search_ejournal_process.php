<style>
    .no-results {
        text-align: center;
        color: white;
        font-size: 18px;
        margin-top: 20px;
    }
</style>
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
$sql = "SELECT id, title FROM ejournal WHERE department = ? AND title LIKE ?";
$stmt = $conn->prepare($sql);
$searchTerm = '%' . $searchTerm . '%';
$stmt->bind_param("ss", $department, $searchTerm);
$stmt->execute();
$result = $stmt->get_result();

// Output results as HTML
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '<div class="search-result">';
        echo '<div class="title">' . $row["title"] . '</div>';
        echo '<div class="download-link"><a href="download_ejournal.php?id=' . $row["id"] . '">Download PDF</a></div>';
        echo '</div>';
    }
} else {
    echo '<p class="no-results">No results found</p>';
}

// Close the database connection
$stmt->close();
$conn->close();
?>
