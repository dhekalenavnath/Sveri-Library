<?php
session_start();

if (!isset($_SESSION["admin_username"])) {
    // If the session variable is not set, redirect to the login page
    header("Location: admin_login.php");
    exit();
}
?>
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
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
            margin-bottom: 70px;
        }

        .process_form {
            margin-bottom: 15px;
        }

        input[type="text"],
        input[type="tel"],
        input[type="email"],
        input[type="date"],
        input[type="number"],
        select {
            width: 90%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            width: 100%;
            padding: 12px;
            font-size: 18px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
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
      <li> <a href="search_ebook.php">View E-books</a></li>
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
      <li> <a href="search_model_answer.php">View Model Answers</a></li>
      <li> <a href="search_ejournal.php">View Journals</a></li>
      </ul>
    </li>

    <li class="submenu">
      <a href="">Manage users</a>
      <ul>
      <li> <a href="register_user.php">Create user</a></li>
      <li> <a href="update_user.php">Update user</a></li>
      <li> <a href="staff_registration.php">Create Librarian</a></li>
      <li> <a href="update_libusers.php">Update Librarian</a></li>
      </ul>
    </li>

    <li class="submenu">
      <a href="new_arrival.php">New Arrival</a>
    </li>
 
  </ul>
</nav>
</div>

<div class="container">
    <h1>Add Books to Library</h1>
    <form action="booksubmit.php" method="POST">
        <label for="book_type">Book Type:</label><br><br>
        <select id="book_type" name="book_type">
            <option value="Regular">Regular</option>
            <option value="Book Bank">Book Bank</option>
            <option value="Social Welfare">Social Welfare</option>
            <option value="Competitive Examination">Competitive Examination</option>
        </select><br><br>

        <label for="quantity">Quantity:</label><br><br>
        <input type="number" id="quantity" name="quantity"   ><br><br>

        <label for="account_number">Acc. No.:</label><br><br>
        <input type="text" id="account_number" name="account_number"   ><br><br>

        <label for="title">Title:</label><br><br>
        <input type="text" id="title" name="title"   ><br><br>

        <label for="author_name">Author Name:</label><br><br>
        <input type="text" id="author_name" name="author_name"   ><br><br>

        <label for="edition">Edition:</label><br><br>
        <input type="text" id="edition" name="edition"   ><br><br>

        <label for="volume">Vol.:</label><br><br>
        <input type="text" id="volume" name="volume"><br><br>

        <label for="name_of_publication">Name of Publication:</label><br><br>
        <input type="text" id="name_of_publication" name="name_of_publication"><br><br>

        <label for="place_of_publication">Place of Pub.:</label><br><br>
        <input type="text" id="place_of_publication" name="place_of_publication"><br><br>

        <label for="year_of_publication">Year of Publication:</label><br><br>
        <input type="text" id="year_of_publication" name="year_of_publication"><br><br>

        <label for="series">Series:</label><br><br>
        <input type="text" id="series" name="series"><br><br>

        <label for="actual_price">Actual Price:</label><br><br>
        <input type="number" id="actual_price" name="actual_price"><br><br>

        <label for="discount">Discount(%):</label><br><br>
        <input type="number" id="discount" name="discount"><br><br>

        <label for="subject">Subject:</label><br><br>
        <input type="text" id="subject" name="subject"><br><br>

        <label for="vendor">Vendor:</label><br><br>
        <input type="text" id="vendor" name="vendor"><br><br>

    

        <label for="book_received_date">Book Received date:</label><br><br>
        <input type="date" id="book_received_date" name="book_received_date"><br><br>

        <label for="bill_number">Bill No.:</label><br><br>
        <input type="text" id="bill_number" name="bill_number"><br><br>

        <label for="bill_date">Bill Date:</label><br><br>
        <input type="date" id="bill_date" name="bill_date"><br><br>

        <label for="accession_date">Accession Date:</label><br><br>
        <input type="date" id="accession_date" name="accession_date"><br><br>

        <label for="material_status">Material Status:</label><br><br>
        <input type="text" id="material_status" name="material_status"><br><br>

        <label for="language_code">Language Code:</label><br><br>
        <input type="text" id="language_code" name="language_code"><br><br>

        <label for="pages">Pages:</label><br><br>
        <input type="number" id="pages" name="pages"><br><br>

       

        <label for="class_no">Class No.:</label><br><br>
        <input type="text" id="class_no" name="class_no"><br><br>

        <label for="book_no">Book No.:</label><br><br>
        <input type="text" id="book_no" name="book_no"><br><br>

        <label for="material_name">Material Name:</label><br><br>
        <input type="text" id="material_name" name="material_name"><br><br>

        <label for="location">Location:</label><br><br>
        <input type="text" id="location" name="location"><br><br>

        <label for="cupboard">Cupboard:</label><br><br>
        <input type="text" id="cupboard" name="cupboard"><br><br>

        <label for="shelf_no">Shelf No.:</label><br><br>
        <input type="text" id="shelf_no" name="shelf_no"><br><br>

        <div class="form-group">
            <button type="submit">Submit</button>
        </div>
    </form>
  
</div>
    
 

   
      
        <form id="logoutForm">
            <button type="button" class="btn btn-danger" onclick="logout()">Logout</button>
        </form>

        <footer>
    <p>&copy; 2024 Sveri Libary</p>
</footer>
        
    </div>
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
