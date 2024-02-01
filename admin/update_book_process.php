<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the book ID and updated values from the form
    $bookId = $_POST['bookId'];
    $bookType = $_POST['book_type'];
    $quantity = $_POST['quantity'];
    $accNo = $_POST['account_number'];
    $title = $_POST['title'];
    $authorName = $_POST['author_name'];
    $edition = $_POST['edition'];
    $vol = $_POST['volume'];
    $nameOfPublication = $_POST['name_of_publication'];
    $placeOfPublication = $_POST['place_of_publication'];
    $yearOfPublication = $_POST['year_of_publication'];
    $series = $_POST['series'];
    $actualPrice = $_POST['actual_price'];
    $discount = $_POST['discount'];
    $subject = $_POST['subject'];
    $vendor = $_POST['vendor'];
    $bookReceivedDate = $_POST['book_received_date'];
    $billNo = $_POST['bill_number'];
    $billDate = $_POST['bill_date'];
    $accessionDate = $_POST['accession_date'];
    $materialStatus = $_POST['material_status'];
    $languageCode = $_POST['language_code'];
    $pages = $_POST['pages'];
    $classNo = $_POST['class_no'];
    $bookNo = $_POST['book_no'];
    $materialName = $_POST['material_name'];
    $location = $_POST['location'];
    $cupboard = $_POST['cupboard'];
    $shelfNo = $_POST['shelf_no'];

    // Connect to the database
    $conn = new mysqli("localhost", "root", "", "library");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL query to update book information based on the ID
    $sql = "UPDATE book SET 
            BookType = '$bookType',
            Quantity = '$quantity',
            AccNo = '$accNo',
            Title = '$title',
            AuthorName = '$authorName',
            Edition = '$edition',
            Vol = '$vol',
            NameOfPublication = '$nameOfPublication',
            PlaceOfPublication = '$placeOfPublication',
            YearOfPublication = '$yearOfPublication',
            Series = '$series',
            ActualPrice = '$actualPrice',
            Discount = '$discount',
            Subject = '$subject',
            Vendor = '$vendor',
            BookReceivedDate = '$bookReceivedDate',
            BillNo = '$billNo',
            BillDate = '$billDate',
            AccessionDate = '$accessionDate',
            MaterialStatus = '$materialStatus',
            LanguageCode = '$languageCode',
            Pages = '$pages',
            ClassNo = '$classNo',
            BookNo = '$bookNo',
            MaterialName = '$materialName',
            Location = '$location',
            Cupboard = '$cupboard',
            ShelfNo = '$shelfNo'
            WHERE ID = '$bookId'";

    if ($conn->query($sql) === TRUE) {
        $message = "";
        echo '<script>
        alert("Book information updated successfully!");
        window.open("bookdis.php", "_self");
    </script>';
    } else {
        $error = "Error updating book information: " . $conn->error;
    }

    // Close the database connection
    $conn->close();
} else {
    $error = "Invalid request. Please submit the form for updating book information.";
}
?>
