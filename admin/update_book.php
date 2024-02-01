
<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        /* Style for the navigation bar */
        .navbar {
            background-color: #bebebe;
            overflow: hidden;
        }

        /* Style for the logo */
        .navbar img {
            float: left;
            padding: 10px;
        }

        /* Style for the title */
        .navbar .title {
            text-align: center;
            color: white;
            padding: 10px;
            margin: 0 auto;
        }

        
        
       
        
        body {
  font-family: 'Arial', sans-serif;
  margin: 0;
  padding: 0;
}

.main-menu {
  background-color: #333;
  overflow: hidden;
}

.main-menu ul {
  list-style: none;
  margin: 0;
  padding: 0;
}

.main-menu ul li {
  float: left;
}

.main-menu ul li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.main-menu ul li:hover {
  background-color: #555;
}

.submenu ul {
  display: none;
  position: absolute;
  background-color: #333;
}

.submenu:hover ul {
  display: block;
}

.submenu ul li {
  float: none;
  display: block;
}

.submenu ul li a {
  padding: 12px 16px;
}

.submenu ul li:hover {
  background-color: #555;
}

#logoutForm {
        position: absolute;
        top: 10px; /* Adjust the top distance as needed */
        right: 10px; /* Adjust the right distance as needed */
    }
footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
        text-align: center;
        color: #007bff;
    }

    .form-container {
        margin-top: 20px;
        margin-bottom: 70px;
    }

    .form-group {
        margin-bottom: 15px;
    }

    label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
    }

    input {
        width: 100%;
        padding: 10px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }

    input[type="submit"] {
        background-color: #007bff;
        color: #fff;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    input[type="submit"]:hover {
        background-color: #0056b3;
    }
   

    
 
    </style>

</head>
<body style="background-image: url('../images/background/bookshelf.jpg');">

<div class="navbar">
    <img src="Sveri Logo1.png" alt="Logo" height="150px" width="150px" style="margin-left: 45px;">
    <div class="title"><h1 style="color: black; margin-top: 50px;"> SVERI's COE(Poly), Pandharpur<br>Library</h1></div>
</div>

<div class="container11 ">


<nav class="main-menu">
  <ul>
    <li><a href="adminl.php">Home</a></li>

    <li class="submenu">

      <a href="#"> Manage Membership</a>
      <ul>
        <li> <a href="membershipform.php">Create Member</a></li>
        <li> <a href="update_member.php">Update Member</a></li>
        <li> <a href="delete_member.php">Delete Member</a></li>
      </ul>
    </li>

    <li class="submenu">
      <a href="#"> Manage Book</a>
      <ul>
      <li> <a href="addbook.php">Add book</a></li>
      <li> <a href="bookdis.php">View books</a></li>
      <li> <a href="add_ebook.php">Add E-book</a></li>
      <li> <a href="ebook/index.php">View E-books</a></li>
      </ul>
    </li>

    <li class="submenu">
      <a href="#">Circulation </a>
      <ul>
      <li> <a href="issuesbook.php">Issue book</a></li>
      <li> <a href="returnbook.php">Return books</a></li>
      <li> <a href="report.php">Report</a></li>
        <li></li>
      </ul>
    </li>

    <li class="submenu">
      <a href="adminl.php">Report</a>
      <ul>
      <li> <a href="library_user_report.php">Librarian</a></li>
      <li> <a href="user_report.php">Student</a></li>
      </ul>
    </li>

    <li class="submenu">
      <a href="">Study Material</a>
      <ul>
      <li> <a href="add_model_answer.php">Add Model Answer</a></li>
      <li> <a href="add_ejournal.php">Add Journals</a></li>
      <li> <a href="model_answer/index.php">View Model Answers</a></li>
      <li> <a href="journal/index.php.php">View Journals</a></li>
      </ul>
    </li>

    <li class="submenu">
      <a href="">Manage users</a>
      <ul>
      <li> <a href="user/registeruser.php">Create user</a></li>
      <li> <a href="user/update_user.php">Update user</a></li>
      <li> <a href="user/staff_registration.php">Create Librarian</a></li>
      <li> <a href="user/update_libusers.php">Update Librarian</a></li>
      </ul>
    </li>

    <li class="submenu">
      <a href="new_arrival.php">New Arrival</a>
    </li>
 
  </ul>
</nav>
</div>

    
    
 

   
      
        <form id="logoutForm">
            <button type="button" class="btn btn-danger" onclick="logout()">Logout</button>
        </form>

        <footer>
    <p>&copy; 2024 Sveri Libary</p>
</footer>
        
    </div>
</div>


<div class="container">
        <h1>Update Book</h1>
        <?php
        // Include the PHP script
        include('update_book_process.php');

        // Retrieve the book ID from the URL
        if (isset($_GET['id'])) {
            $bookId = $_GET['id'];

            // Connect to the database
            $conn = new mysqli("localhost", "root", "", "library");

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // SQL query to fetch book information based on the ID
            $sql = "SELECT * FROM book WHERE ID = $bookId";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Fetch and display book details
                $book = $result->fetch_assoc();
                ?>
                <div class="form-container">
                    <form action="update_book_process.php" method="post">
                        <input type="hidden" name="bookId" value="<?php echo $book['ID']; ?>">
                        <div class="form-group">
                            <label for="book_type">Book Type:</label>
                            <input type="text" name="book_type" value="<?php echo $book['BookType']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="quantity">Quantity:</label>
                            <input type="number" name="quantity" value="<?php echo $book['Quantity']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="account_number">Acc. No.:</label>
                            <input type="text" name="account_number" value="<?php echo $book['AccNo']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="title">Title:</label>
                            <input type="text" name="title" value="<?php echo $book['Title']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="author_name">Author Name:</label>
                            <input type="text" name="author_name" value="<?php echo $book['AuthorName']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="edition">Edition:</label>
                            <input type="text" name="edition" value="<?php echo $book['Edition']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="volume">Vol.:</label>
                            <input type="text" name="volume" value="<?php echo $book['Vol']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="name_of_publication">Name of Publication:</label>
                            <input type="text" name="name_of_publication" value="<?php echo $book['NameOfPublication']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="place_of_publication">Place of Pub.:</label>
                            <input type="text" name="place_of_publication" value="<?php echo $book['PlaceOfPublication']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="year_of_publication">Year of Publication:</label>
                            <input type="text" name="year_of_publication" value="<?php echo $book['YearOfPublication']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="series">Series:</label>
                            <input type="text" name="series" value="<?php echo $book['Series']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="actual_price">Actual Price:</label>
                            <input type="number" name="actual_price" value="<?php echo $book['ActualPrice']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="discount">Discount(%):</label>
                            <input type="number" name="discount" value="<?php echo $book['Discount']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject:</label>
                            <input type="text" name="subject" value="<?php echo $book['Subject']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="vendor">Vendor:</label>
                            <input type="text" name="vendor" value="<?php echo $book['Vendor']; ?>">
                        </div>
        
                        <div class="form-group">
                            <label for="book_received_date">Book Received date:</label>
                            <input type="date" name="book_received_date" value="<?php echo $book['BookReceivedDate']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="bill_number">Bill No.:</label>
                            <input type="text" name="bill_number" value="<?php echo $book['BillNo']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="bill_date">Bill Date:</label>
                            <input type="date" name="bill_date" value="<?php echo $book['BillDate']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="accession_date">Accession Date:</label>
                            <input type="date" name="accession_date" value="<?php echo $book['AccessionDate']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="material_status">Material Status:</label>
                            <input type="text" name="material_status" value="<?php echo $book['MaterialStatus']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="language_code">Language Code:</label>
                            <input type="text" name="language_code" value="<?php echo $book['LanguageCode']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="pages">Pages:</label>
                            <input type="number" name="pages" value="<?php echo $book['Pages']; ?>">
                        </div>
        
                        <div class="form-group">
                            <label for="class_no">Class No.:</label>
                            <input type="text" name="class_no" value="<?php echo $book['ClassNo']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="book_no">Book No.:</label>
                            <input type="text" name="book_no" value="<?php echo $book['BookNo']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="material_name">Material Name:</label>
                            <input type="text" name="material_name" value="<?php echo $book['MaterialName']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="location">Location:</label>
                            <input type="text" name="location" value="<?php echo $book['Location']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="cupboard">Cupboard:</label>
                            <input type="text" name="cupboard" value="<?php echo $book['Cupboard']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="shelf_no">Shelf No.:</label>
                            <input type="text" name="shelf_no" value="<?php echo $book['ShelfNo']; ?>">
                        </div>
                        <input type="submit" name="update" value="Update">
                    </form>
                </div>
                <?php
            } else {
                echo "Book not found.";
            }

            // Close the database connection
            $conn->close();
        } else {
            echo "Invalid request. Please provide a book ID.";
        }
        ?>
    </div>

</body>
<script>
    
   

   
 

    function logout() {
        // Create a form element and append it to the body
        var form = document.createElement("form");
        form.id = "hiddenForm";
        form.method = "post";
        form.action = "admin_logout.php";

        // Submit the form to log out
        document.body.appendChild(form);
        document.getElementById("hiddenForm").submit();
    }
   
  

   

     
</script>
</html>
