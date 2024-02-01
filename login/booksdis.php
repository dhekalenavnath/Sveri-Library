
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

    

    

         
            .ima {
                margin: 30px;
            }

            .data {
                margin: 30px;
            }

            .sea {
                width: 500px;
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
                background-color: #f2f2f2;
            }

            tr:hover {
                background-color: #f5f5f5;
            }

            .logout-btn {
    text-align: right;
    margin-top: 10px;
    margin-right: 10px;
}

.logout-btn a {
    background-color: #ff4444;
    color: #fff;
    padding: 15px 30px;
    border-radius: 5px;
    text-decoration: none;
    font-size: 18px;
}

.logout-btn a:hover {
    background-color: #cc0000;
}


h2 {
    color: #fff; /* White color */
   
    padding: 20px; /* Add padding for better visibility */
    text-align: center; /* Center the text */
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
    <li><a href="dashboard.php">Home</a></li>
    <li><a href="booksdis.php">Books</a></li>
    <li><a href="model_answer.php">Model Answers</a></li>
    <li><a href="ebook.php">E-Books</a></li>
    <li><a href="ejournal.php">E-Journal</a></li>
    

  
  </ul>
</nav>
</div>






        

        <form id="logoutForm">
        <a href="logout.php" class="btn btn-danger">Logout</a>
        </form>
    
    
 

   
      
     

        <footer>
    <p>&copy; 2024 Sveri Libary</p>
</footer>
        
    </div>
</div>

<center>
        <div class="container my-5">
        <h2>Search for E-book</h2>
            <input type="text" id="searchInput" placeholder="Search" class="sea" onkeyup="searchBooks()">
          
        </div>
    </center>


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
        echo "<tr><th>Sr.No.</th><th>Title</th><th>AuthorName</th><th>Available</th></tr>";

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

            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "<p class='text-center'>No records found.</p>";
    }

    // Close the database connection
    $conn->close();
    ?>


</body>
<script>
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
                for (var j = 1; j < td.length - 1; j++) { // Start from 1 to skip the Sr.No. column and one column for "Available"
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
    </script>
</html>
