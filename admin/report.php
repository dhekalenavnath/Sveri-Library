
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
  z-index: 2; /* Add this line */
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
  z-index: 2; /* Add this line */
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
        

        
        .form-container {
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 400px;
            width: 90%;
            margin: 20px auto;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-group input[type="text"],
        .form-group input[type="date"],
        .dropdown input[type="text"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #fff;
            border: 1px solid #ddd;
            max-height: 150px;
            overflow-y: auto;
            z-index: 1;
        }

        .dropdown-content a {
            padding: 10px;
            text-decoration: none;
            display: block;
            color: #333;
        }

        .dropdown-content a:hover {
            background-color: #f9f9f9;
        }

        .form-group button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        @media (max-width: 768px) {
            .navbar img {
                max-height: 60px;
            }

            .navbar .title {
                font-size: 1.2em;
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
      <a href="#">Report</a>
      <ul>
      <li> <a href="library_user_report.php">Librarian</a></li>
      <li> <a href="user_report.php">Student</a></li>
      </ul>
    </li>

    <li class="submenu">
      <a href="#">Study Material</a>
      <ul>
      <li> <a href="add_model_answer.php">Add Model Answer</a></li>
      <li> <a href="add_ejournal.php">Add Journals</a></li>
      <li> <a href="search_model_answer.php">View Model Answers</a></li>
      <li> <a href="search_ejournal.php">View Journals</a></li>
      </ul>
    </li>

    <li class="submenu">
      <a href="#">Manage users</a>
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


<div class="form-container">
    <form action="generate_report.php" method="post" target="_self">

            <div class="form-group">
                <label for="nameInput">Name Of Student:</label>
                <div class="dropdown">
                    <input type="text" id="nameInput" name="acc" oninput="filterNames()" placeholder="Type a name">
                    <div class="dropdown-content" id="nameList">
                        <!-- List of names will be displayed here -->
                    </div>
                </div>
            </div>
            
            <div class="form-group">
                <button type="submit">Generate Report</button>
            </div>
        </form>
    </div>

</body>
<script>
    
   

   
    const nameInput = document.getElementById("nameInput");
        const nameList = document.getElementById("nameList");
      
        function filterNames() {
          const inputValue = nameInput.value.toLowerCase();
          nameList.innerHTML = ""; // Clear the previous list
      
          if (inputValue.trim() !== '') {
            // Use AJAX to fetch names from the server
            const xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function () {
              if (xhr.readyState === 4 && xhr.status === 200) {
                const names = JSON.parse(xhr.responseText);
                names.forEach(name => {
                  const nameItem = document.createElement("a");
                  nameItem.textContent = name;
                  nameItem.href = "#";
                  nameItem.addEventListener("click", function () {
                    nameInput.value = name;
                    nameList.innerHTML = ""; // Clear the list when a name is selected
                  });
                  nameList.appendChild(nameItem);
                });
      
                if (nameList.children.length > 0) {
                  nameList.style.display = "block";
                } else {
                  nameList.style.display = "none";
                }
              }
            };
      
            xhr.open("GET", "get_names.php?input=" + inputValue, true);
            xhr.send();
          }
        }
      
        // Close the dropdown list if the user clicks outside of it
        document.addEventListener("click", function (e) {
          if (e.target !== nameInput && e.target !== nameList) {
            nameList.style.display = "none";
          }
        });
 

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
