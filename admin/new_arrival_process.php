<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "library";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data from the form submission
$title = $_POST['title'];
$author = $_POST['author'];

// Insert data into the new_arrival table
$sql = "INSERT INTO new_arrival (title, author) VALUES ('$title', '$author')";

if ($conn->query($sql) === TRUE) {
    echo '<script>alert("Information added successfully");
    window.open("new_arrival.php","_self");</script>';
} else {
    echo '<script>alert("Error");
    window.location="new_arrival.php";
    </script>
';;
}

$conn->close();
?>
