
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
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
            animation: fadeIn 0.5s ease; /* Fade-in animation */
            margin-bottom: 70px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        input[type="text"],
        input[type="tel"],
        input[type="email"],
        input[type="date"] {
            width: calc(100% - 24px);
            padding: 12px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 10px;
            transition: border-color 0.3s ease;
        }

        input[type="text"]:focus,
        input[type="tel"]:focus,
        input[type="email"]:focus,
        input[type="date"]:focus {
            border-color: #007bff;
        }

        .select-wrapper {
            position: relative;
            width: calc(100% - 24px);
            margin-bottom: 10px;
        }

        select {
            width: 100%;
            padding: 12px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: transparent;
            appearance: none;
            cursor: pointer;
        }

        .select-arrow {
            position: absolute;
            top: 50%;
            right: 8px;
            transform: translateY(-50%);
            pointer-events: none;
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
<div class="container">
        <h2>Library Membership Form</h2>
        <form id="membershipForm" action="submitmem.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="membername">Member Name:</label>
                <input type="text" name="membername" placeholder="Member Name" required>
            </div>
            <div class="form-group">
                <label for="member_code">Member Code:</label>
                <input type="text" id="member_code" name="member_code" placeholder="Member code" required>
            </div>
            <div class="form-group">
                <label for="permanentAddress">Permanent Address:</label>
                <input type="text" name="permanentAddress" placeholder="Permanent Address" required>
            </div>
            <div class="form-group">
                <label for="pincode">Pincode:</label>
                <input type="text" name="pincode" placeholder="Pincode" required>
            </div>
            <div class="form-group">
                <label for="contactMobile">Contact Mobile No:</label>
                <input type="tel" name="contactMobile" placeholder="Contact Mobile No" required>
            </div>
            <div class="form-group">
                <label for="email">Email Address:</label>
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <label for="localAddress">Local Address:</label>
                <input type="text" name="localAddress" placeholder="Local Address" required>
            </div>
            <div class="form-group">
                <label for="bloodGroup">Blood Group:</label>
                <input type="text" name="bloodGroup" placeholder="Blood Group" required>
            </div>
            <div class="form-group">
                <label for="castCategory">Cast Category:</label>
                <input type="text" name="castCategory" placeholder="Cast Category" required>
            </div>
            <div class="form-group">
                <label>Gender:</label><br>
                <input type="radio" name="gender" value="Male" required> Male
                <input type="radio" name="gender" value="Female" required> Female
            </div>
            <div class="form-group">
                <label for="dob">Date of Birth:</label>
                <input type="date" name="dob" required>
            </div>
            <div class="form-group select-wrapper">
                <label for="branch">Branch:</label>
                <div class="select-arrow">&#9660;</div>
                <select id="branch" name="branch" required>
                    <option value="" disabled selected>Select Branch</option>
                    <option value="civil">Civil</option>
                    <option value="electronic_telecommunication">Electronic and Telecommunication</option>
                    <option value="computer">Computer</option>
                    <option value="information_technology">Information Technology</option>
                    <option value="electrical">Electrical</option>
                    <option value="mechanical">Mechanical</option>
                </select>
            </div>

            <div class="form-group select-wrapper">
                <label for="class">Class:</label>
                <div class="select-arrow">&#9660;</div>
                <select id="class" name="class" required>
                    <option value="" disabled selected>Select Class</option>
                    <option value="fy">FY</option>
                    <option value="sy">SY</option>
                    <option value="ty">TY</option>
                </select>
            </div>
            <div class="form-group">
                <label for="roll">Roll No:</label>
                <input type="text" name="roll" placeholder="Roll" required>
            </div>
            <div class="form-group">
                <label for="lending_policy">Lending Policy:</label>
                <input type="number" id="lending_policy" name="lending_policy" required>
            </div>
            <div class="form-group">
                <label for="membership_date">Membership Date:</label>
                <input type="date" id="membership_date" name="membership_date" required>
            </div>
            <div class="form-group">
                <label for="membership_expiry_date">Membership Expiry Date:</label>
                <input type="date" id="membership_expiry_date" name="membership_expiry_date" required>
            </div>
            <div class="form-group">
                <label for="membership_category">Membership Category:</label>
                <select id="membership_category" name="membership_category" required>
                    <option value="student">Student</option>
                    <option value="faculty">Faculty</option>
                </select>
            </div>
            <div class="form-group">
                <label>Membership Status:</label><br>
                <input type="radio" id="active" name="membershipStatus" value="active" required>
                <label for="active">Active</label>
                <input type="radio" id="deactive" name="membershipStatus" value="deactive" required>
                <label for="deactive">Deactive</label>
                <input type="radio" id="blocked" name="membershipStatus" value="blocked" required>
                <label for="blocked">Blocked</label>
            </div>
            <div class="form-group">
                <label for="memberPhoto">Member Photo:</label>
                <input type="file" id="memberPhoto" name="memberPhoto" accept="image/*">
                <small>(Accepted formats: JPG, JPEG, PNG)</small>
            </div class="form-group">
                <button type="submit">Submit</button>
            </div>
        </form>
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
