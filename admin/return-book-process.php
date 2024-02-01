<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "library";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$accno = mysqli_real_escape_string($conn, $_POST["accessionNumber"]);
$uname = mysqli_real_escape_string($conn, $_POST["acc"]);
$returndate = mysqli_real_escape_string($conn, $_POST["returnDate"]);

try {
    // Check if the book with the given 'accno' exists
    $checkSql = "SELECT dis FROM book WHERE Accno = '$accno'";
    $checkResult = $conn->query($checkSql);

    if ($checkResult->num_rows > 0) {
        $row = $checkResult->fetch_assoc();
        if ($row['dis'] == 0) {
            echo '<script>alert("Book is already returned."); window.location="returnbook.php";</script>';
        } else {
            // Book with the given 'accno' exists and is not already returned

            // Update the book status to mark it as returned
            $sql = "UPDATE book SET dis = 0 WHERE Accno = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("s", $accno);
            $result = $stmt->execute();

            // Update the student's record with the return_date
            $sql1 = "UPDATE $uname SET dis = 0, return_date = ? WHERE accno = ?";
            $stmt1 = $conn->prepare($sql1);
            $stmt1->bind_param("ss", $returndate, $accno);
            $result1 = $stmt1->execute();

            if ($result && $result1) {
                echo '<script>alert("Book Return Successfully!"); window.location="returnbook.php";</script>';
            } else {
                echo '<script>alert("Error in updating the book status.");</script>';
            }
        }
    } else {
        // Book with the given 'accno' doesn't exist
        echo '<script>alert("No book found with the provided accession number"); window.location="returnbook.php";</script>';
    }
} catch (mysqli_sql_exception $e) {
    echo '<script>alert("Error: No User Name Found");window.location="returnbook.php";</script>';
}

$conn->close();
?>
