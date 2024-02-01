
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
<?php
if (isset($_POST['acc'])) {
    $studentName = $_POST['acc'];
    
    // Connect to your database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "library";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Perform a database query to fetch data based on the student name
    $sql = "SELECT * FROM $studentName;";

    try {
        $result = $conn->query($sql);

        if ($result && $result->num_rows > 0) {
            echo '<!DOCTYPE html>
            <html>
            <head>
                <style>
                   
                    .table-container {
                        background-color: #fff;
                        border: 1px solid #ccc;
                        border-radius: 5px;
                        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                        padding: 20px;
                        max-width: 800px;
                        width: 100%;
                    }
                    
                    table {
                        width: 100%;
                        border-collapse: collapse;
                    }
                    
                    th, td {
                        border: 1px solid #ddd;
                        padding: 8px;
                        text-align: left;
                    }
                    
                    th {
                        background-color: #007BFF;
                        color: white;
                    }
                    
                    tr:nth-child(even) {
                        background-color: #f2f2f2;
                    }
                    
                    tr:hover {
                        background-color: #ddd;
                    }
                </style>
            </head>
            <body>
                <div class="table-container">
                    <h1>Student Report for ' . $studentName . '</h1>
                    <table>
                        <tr>
                            <th>Sr.No.</th>
                            <th>Book Name</th>
                            <th>Accession Number</th>
                            <th>Issue Date</th>
                            <th>Return Date</th>
                            <th>Status</th>
                        </tr>';
            
            $sro = 0; // Initialize Sr.No. counter
            
            while ($row = $result->fetch_assoc()) {
                $sro++; // Increment Sr.No. for each row
                echo "<tr>";
                echo "<td>" . $sro . "</td>";
                echo "<td>" . $row["bookname"] . "</td>";
                echo "<td>" . $row["accno"] . "</td>";
                echo "<td>" . $row["issue_date"] . "</td>";
                echo "<td>" . $row["return_date"] . "</td>";
            
                // Check the "dis" column to determine availability
                if ($row["dis"] == 0) {
                    echo "<td>Returned</td>";
                } else {
                    echo "<td>Not Returned</td>";
                }
            
                echo "</tr>";
            }
            
            echo '</table>
                </div>
            </body>
            </html>';
        } else {
            echo '<!DOCTYPE html>
            <html>
            <head>
                <style>
                  
                    
                    .message-container {
                        background-color: #fff;
                        border: 1px solid #ccc;
                        border-radius: 5px;
                        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                        padding: 20px;
                        max-width: 800px;
                        width: 100%;
                        text-align: center;
                    }
                </style>
            </head>
            <body>
                <div class="message-container">
                    <h1>No records found for ' . $studentName . '</h1>
                </div>
            </body>
            </html>';
        }
    } catch (Exception $e) {
        echo '<!DOCTYPE html>
        <html>
        <head>
            <style>
               
                .message-container {
                    background-color: #fff;
                    border: 1px solid #ccc;
                    border-radius: 5px;
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                    padding: 20px;
                    max-width: 800px;
                    width: 100%;
                    text-align: center;
                }
            </style>
        </head>
        <body>
            <div class="message-container">
                <h1>Error: No data found for ' . $studentName . '</h1>
            </div>
        </body>
        </html>';
    }
}
?>