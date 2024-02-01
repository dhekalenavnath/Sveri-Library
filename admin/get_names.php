<?php
// Connect to your MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "library";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get the user's input and sanitize it to prevent SQL injection
$input = $conn->real_escape_string($_GET['input']);

// Fetch names from the database that match the input
$sql = "SELECT member_name FROM membership WHERE member_name LIKE '%$input%'";
$result = $conn->query($sql);

$names = array();
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $names[] = $row['member_name']; // Corrected column name
  }
}

// Close the database connection
$conn->close();

// Return the names as JSON
echo json_encode($names);
?>
