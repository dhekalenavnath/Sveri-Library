
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

        /* body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
} */

.search-container {
    text-align: center;
    margin-bottom: 20px;

}

.search-input {
    padding: 10px;
    width: 70%;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.search-btn {
    padding: 10px 20px;
    background-color: #007BFF;
    color: white;
    border: none;
    cursor: pointer;
    border-radius: 5px;
}

.search-btn:hover {
    background-color: #0056b3;
}

table {
    border-collapse: collapse;
    width: 100%;
    margin-top: 20px;
    font-family: Arial, sans-serif;
    background-color: #fff;
}

th, td {
    padding: 12px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

th {
    background-color: #fff;
}

tr:hover {
    background-color: #f5f5f5;
}

.btn {
    display: inline-block;
    padding: 8px 16px;
    text-align: center;
    text-decoration: none;
    background-color: #007BFF;
    color: white;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.btn:hover {
    background-color: #0056b3;
}

@media screen and (max-width: 600px) {
    .search-input {
        width: 100%;
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


                
<div class="search-container">
        <input type="text" id="myInput" class="search-input" placeholder="Search for usernames...">
        <button class="search-btn" onclick="searchUsers()">Search</button>
    </div>

    <?php
    $conn = new mysqli("localhost", "root", "", "library");

    // Check connection 
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Delete user if a user ID is provided
    if (isset($_GET['deleteId'])) {
        $deleteId = $_GET['deleteId'];
        $deleteSql = "DELETE FROM users WHERE ID = $deleteId";
        if ($conn->query($deleteSql) === TRUE) {
            echo "<script>alert('User deleted successfully.');</script>";
        } else {
            echo "<script>alert('Error deleting user: " . $conn->error . "');</script>";
        }
    }

    // SQL query to retrieve all data from the table
    $sql = "SELECT * FROM users;";
    // Execute the query
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Create an HTML table to display all data
        echo '<table id="all">';
        echo "<tr><th>Sr.No.</th><th>Username</th><th>Password</th><th>Update</th><th>Delete</th></tr>";

        $sro = 0; // Initialize Sr.No. counter

        while ($row = $result->fetch_assoc()) {
            $sro++; // Increment Sr.No. for each row
            echo "<tr>";
            echo "<td>" . $sro . "</td>";
            echo "<td>" . $row["username"] . "</td>";
            echo "<td>" . $row["password"] . "</td>";
            
            // Check the "dis" column to determine availability
            
            echo '<td><a href="update_user_process.php?id=' . $row["ID"] . '" class="btn btn-primary">Update</a></td>';
            
            // Add a "Delete" button with a confirmation dialog
            echo '<td><a href="update_user.php?deleteId=' . $row["ID"] . '" class="btn btn-danger" onclick="return confirm(\'Are you sure you want to delete this user?\')">Delete</a></td>';
            
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "<p class='text-center'>No records found.</p>";
    }

    // Close the database connection
    $conn->close();
    ?>


<script>
        function searchUsers() {
            // Declare variables
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("all");
            tr = table.getElementsByTagName("tr");

            // Loop through all table rows, and hide those that don't match the search query
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[1]; // Index 1 corresponds to the "Username" column

                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>

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
