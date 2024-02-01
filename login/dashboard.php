<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
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
.welcome-message {
    
    color: #fff;
    padding: 15px;
    text-align: center;
    font-size: 18px;
  
}

@media (max-width: 600px) {
    /* Adjust styles for smaller screens if needed */
    .welcome-message {
        font-size: 16px;
    }
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



<div class="welcome-message">
            Welcome, <?php echo $_SESSION["username"]; ?>!
        </div>


      
        <form id="logoutForm">
        <a href="logout.php" class="btn btn-danger">Logout</a>
        </form>
    

    
    
 

   
      
     

        <footer>
    <p>&copy; 2024 Sveri Libary</p>
</footer>
        
    </div>
</div>




</body>

</html>
