

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
        .logout-btn {
    position: fixed;
    top: 20px;
    right: 10px;
    text-align: center;
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
.container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        .search-container {
            margin-top: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .search-container input[type="text"] {
            padding: 10px;
            width: 70%;
            border: none;
            border-radius: 25px;
            margin-right: 10px;
        }

        .search-container select {
            padding: 10px;
            border: none;
            border-radius: 25px;
            margin-right: 10px;
        }

        .search-container button {
            padding: 10px 20px;
            background-color: #3897f0;
            color: white;
            border: none;
            border-radius: 25px;
            cursor: pointer;
        }

        .search-container button:hover {
            background-color: #26689e;
        }

        .results-container {
            margin-top: 20px;
            background-color: #fff;
            padding:20px 20px 20px 20px;
        }

        .result-card {
            background-color: #fff;
            margin-bottom: 15px;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        }

        .result-card h2 {
            font-size: 1.2rem;
            margin-bottom: 10px;
        }

        .result-card a {
            color: #3897f0;
            text-decoration: none;
            font-weight: bold;
        }

        .search-result {
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 8px;
        }

        .title {
            font-size: 1.2rem;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .download-link a {
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
        }

        .download-link a:hover {
            text-decoration: underline;
        }
        /* ... (existing styles) */

/* Animation for results-container */
.results-container {
    margin-top: 20px;
    opacity: 0;
    animation: fadeIn 0.5s ease forwards;
}

@keyframes fadeIn {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

/* Styles for result cards */
.result-card {
    background-color: #ffffff;
    margin-bottom: 15px;
    padding: 15px;
    border-radius: 10px;
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
}

.result-card:hover {
    transform: translateY(-5px);
}

.result-card h2 {
    font-size: 1.2rem;
    margin-bottom: 10px;
    color: #333;
}

.result-card a {
    color: #007bff;
    text-decoration: none;
    font-weight: bold;
}

.result-card a:hover {
    text-decoration: underline;
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


<body onload="searchBooks()">
    <div class="header">
        <h2>Search for E-book</h2>
    </div>

    <div class="container">
        <div class="search-container">
            <input type="text" id="searchInput" placeholder="Enter book title...">
            <select id="departmentSelect">
                <option value="IT">Information Technology</option>
                <option value="computer">Computer</option>
                <option value="civil">Civil</option>
                <option value="electronics">Electronics and Telecommunication</option>
                <option value="electrical">Electrical</option>
                <option value="mechanical">Mechanical</option>
            </select>
            <button onclick="searchBooks()">Search</button>
        </div>

        <div class="results-container" id="searchResults"></div>
    </div>

    <script>
        function searchBooks() {
            var searchTerm = document.getElementById('searchInput').value;
            var department = document.getElementById('departmentSelect').value;
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            var resultsContainer = document.getElementById('searchResults');
            resultsContainer.innerHTML = xhr.responseText;
            // Apply fadeIn animation after setting innerHTML
            resultsContainer.style.animation = 'fadeIn 0.5s ease forwards';
        }
    };
            xhr.open('GET', 'search_ebook.php?search=' + searchTerm + '&department=' + department, true);
            xhr.send();
        }
    </script>
</body>


</body>

</html>
