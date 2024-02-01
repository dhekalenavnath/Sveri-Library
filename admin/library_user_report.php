
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
        
       #f1 {
            max-width: 400px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2);
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background-color: #007acc;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        h2 {
            color: white;
            margin-top: 30px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            margin-bottom: 70px;
            background-color: white;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #007acc;
            color: white;
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



<form id="f1"action="" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <button type="submit">Generate Report</button>
    </form>
    <?php
    // Establish a connection to the database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "library";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve staff login data based on the provided username
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];

        $sql = "SELECT * FROM staff_loginouttime WHERE username='$username'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<h2>Staff Login Report for $username</h2>";
            echo '<style>
            h2 {
                color: white;
          
            }
          </style>';
            echo "<table border='1'><tr><th>Username</th><th>Login Time</th><th>Logout Time</th></tr>";

            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>{$row['username']}</td><td>{$row['login_time']}</td><td>{$row['logout_time']}</td></tr>";
            }

            echo "</table>";
        } else {
             echo '<style>
            p {
                color: white;
            }
          </style>';
            echo "<p>No records found for the username: $username</p>";
        }
    }

    $conn->close();
    ?>


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
