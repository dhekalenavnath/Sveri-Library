<?php
// Database connection parameters
$servername = "localhost";  // Change this to your database server
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$dbname = "library";         // Change this to your database name

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$bookType = $_POST["book_type"];
$quantity = $_POST["quantity"];
$accNo = $_POST["account_number"];
$title = $_POST["title"];
$authorName = $_POST["author_name"];
$edition = $_POST["edition"];
$vol = $_POST["volume"];
$nameOfPublication = $_POST["name_of_publication"];
$placeOfPublication = $_POST["place_of_publication"];
$yearOfPublication = $_POST["year_of_publication"];
$series = $_POST["series"];
$actualPrice = $_POST["actual_price"];
$discount = $_POST["discount"];
$subject = $_POST["subject"];
$vendor = $_POST["vendor"];
$bookReceivedDate = $_POST["book_received_date"];
$billNo = $_POST["bill_number"];
$billDate = $_POST["bill_date"];
$accessionDate = $_POST["accession_date"];
$materialStatus = $_POST["material_status"];
$languageCode = $_POST["language_code"];
$pages = $_POST["pages"];
$classNo = $_POST["class_no"];
$bookNo = $_POST["book_no"];
$materialName = $_POST["material_name"];
$location = $_POST["location"];
$cupboard = $_POST["cupboard"];
$shelfNo = $_POST["shelf_no"];

// Create an array to store book entries
$bookEntries = array();

// Create multiple entries if quantity is greater than 1
for ($i = 0; $i < $quantity; $i++) {
     // Increment Accno
    $bookEntries[] = "('$bookType', 1, '$accNo', '$title', '$authorName', '$edition', '$vol', '$nameOfPublication', '$placeOfPublication', '$yearOfPublication', '$series', $actualPrice, $discount, '$subject', '$vendor',  '$bookReceivedDate', '$billNo', '$billDate', '$accessionDate', '$materialStatus', '$languageCode', $pages, '$classNo', '$bookNo', '$materialName', '$location', '$cupboard', '$shelfNo')";
    $accNo += 1;
}

// Combine entries into a single SQL query
$sql = "INSERT INTO book (booktype, quantity, accno, title, authorname, edition, vol, nameofpublication, placeofpublication, yearofpublication, series, actualprice, discount, subject, vendor, bookreceiveddate, billno, billdate, accessiondate, materialstatus, languagecode, pages, classno, bookno, materialname, location, cupboard, shelfno)
    VALUES " . implode(",", $bookEntries);

if ($conn->query($sql) === TRUE) {
    echo "Records added successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();

?>
