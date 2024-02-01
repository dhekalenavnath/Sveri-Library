<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "library1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$data = array();

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the new_arrival table
$sql = "SELECT title, author FROM new_arrival";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        $data[] = array('title' => $row["title"], 'author' => $row["author"]);
    }
}

// Return the data as JSON
echo json_encode($data);

$conn->close();
?>
