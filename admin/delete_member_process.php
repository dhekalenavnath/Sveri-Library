<?php
// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "library";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve member code from the form submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['member_code'])) {
    $member_code = $_POST['member_code'];
    
    // SQL query to delete member based on member code
    $sql = "DELETE FROM membership WHERE member_code = '$member_code'";

    if ($conn->query($sql) === TRUE) {
        echo '<script>
            alert("Member Deleted Successfully");
            window.open("delete_member.php", "_self");
        </script>';
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
