<?php
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

$accno = $conn->real_escape_string($_POST["accessionNumber"]); // Use real_escape_string to prevent SQL injection
$uname = $conn->real_escape_string($_POST["acc"]);
$issuedate = $conn->real_escape_string($_POST["issueDate"]);
$returndate = $conn->real_escape_string($_POST["returnDate"]);

// Check if the book with the given 'accno' exists
$checkSql = "SELECT * FROM book WHERE Accno = '$accno'";
$checkResult = $conn->query($checkSql);

if ($checkResult->num_rows > 0) {
    // Book with the given 'accno' exists

    $sql = "UPDATE book SET dis = 1 WHERE Accno = '$accno'";
    $result = $conn->query($sql);

    $bookSql = "SELECT title FROM book WHERE Accno = '$accno'";
    $bookResult = $conn->query($bookSql);
    $row = $bookResult->fetch_assoc();

    $book_name = $row['title'];

    try {
        // Insert into the student's table
        $sql1 = "INSERT INTO $uname (bookname, accno, issue_date, return_date) VALUES ('$book_name', '$accno', '$issuedate', '$returndate')";
        $result1 = $conn->query($sql1);

        echo '<script>alert("Book Issued Successfully !");
        window.location="issuesbook.php";
        </script>';
    } catch (Exception $e) {
        echo '<script>alert("Error:  user not exist ");
            window.location="issuesbook.php";
            </script>';
    }
} else {
    // Book with the given 'accno' doesn't exist
    echo '<script>alert("No book found with the provided accession number");
        window.location="issuesbook.php";
        </script>';
}

$conn->close();
?>
