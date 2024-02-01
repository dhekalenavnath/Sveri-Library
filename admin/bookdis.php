
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
        #all {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
        background-color: #fff; /* Set background color to white */
    }

    #all th,
    #all td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    #all th {
        background-color: #f2f2f2;
    }

    .btn {
        text-decoration: none;
        padding: 8px 12px;
        color: #fff;
        background-color: #007bff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .btn:hover {
        background-color: #0056b3;
    }

    .delete-btn {
        padding: 8px 12px;
        color: #fff;
        background-color: #dc3545;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .delete-btn:hover {
        background-color: #c82333;
    }

    .text-center {
        text-align: center;
    }

    .container.my-5 {
            max-width: 800px; /* Adjust the max-width as needed */
            margin: 0 auto; /* Center the container */
            animation: fadeIn 0.5s ease; /* Fade-in animation */
        }

        .sea {
            width: 100%; /* Make the input element 100% width of the container */
            padding: 10px; /* Add padding for better appearance */
            box-sizing: border-box; /* Include padding and border in the total width */
        }


        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
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

    
    
 

   
      
        <form id="logoutForm">
            <button type="button" class="btn btn-danger" onclick="logout()">Logout</button>
        </form>

        <footer>
    <p>&copy; 2024 Sveri Libary</p>
</footer>
        
    </div>
</div>

<div class="container my-5">
            <input type="text" id="searchInput" placeholder="Search" class="sea" onkeyup="searchBooks()">
            <div class="search-btn-container">
           
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
   
  
    function openUpdateWindow(bookId) {
            window.open('update_book.php?id=' + bookId, 'Update Book', 'width=800,height=600');
        }

        // JavaScript function for real-time search
        function searchBooks() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("searchInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("all");
            tr = table.getElementsByTagName("tr");

            // Loop through all table rows and hide those that don't match the search input
            for (i = 1; i < tr.length; i++) { // Start from 1 to skip the table header row
                td = tr[i].getElementsByTagName("td"); // Get all td elements in the row
                var found = false;
                for (var j = 1; j < td.length - 2; j++) { // Start from 1 to skip the Sr.No. column, one column for "Available," and one column for "Delete"
                    txtValue = td[j].textContent || td[j].innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        found = true;
                        break; // If a match is found in any column, stop checking
                    }
                }
                if (found) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }

        function sample() {
            window.location = "adminl.php";
        }

        // Function to confirm book deletion
        function confirmDelete(bookId) {
            if (confirm("Are you sure you want to delete this book?")) {
                // Redirect to delete_book.php with the book ID
                window.location = 'delete_book.php?id=' + bookId;
            }
        }
   

     
</script>
</html>

<?php
    $conn = new mysqli("localhost", "root", "", "library");

    // Check connection 
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL query to retrieve all data from the table
    $sql = "SELECT * FROM book;";
    // Execute the query
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Create an HTML table to display all data
        echo '<table id="all">';
        echo "<tr><th>Sr.No.</th><th>Title</th><th>AuthorName</th><th>Available</th><th>Update Book</th><th>Delete</th></tr>";

        $sro = 0; // Initialize Sr.No. counter

        while ($row = $result->fetch_assoc()) {
            $sro++; // Increment Sr.No. for each row
            echo "<tr>";
            echo "<td>" . $sro . "</td>";
            echo "<td>" . $row["Title"] . "</td>";
            echo "<td>" . $row["AuthorName"] . "</td>";
            
            // Check the "dis" column to determine availability
            if ($row["dis"] == 0) {
                echo "<td>Available</td>";
            } else {
                echo "<td>Unavailable</td>";
            }
            echo '<td><a href="update_book.php?id=' . $row["ID"] . '" class="btn btn-primary">Update</a></td>';

            // Add the Delete button with the confirmDelete function
            echo '<td><button class="delete-btn" onclick="confirmDelete(' . $row["ID"] . ')">Delete</button></td>';
            
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "<p class='text-center'>No records found.</p>";
    }

    // Close the database connection
    $conn->close();
    ?>