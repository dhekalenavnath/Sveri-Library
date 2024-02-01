
<?php
// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "library";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize variables
$membername = "";
$member_code = "";
$permanentAddress = "";
$pincode = "";
$contactMobile = "";
$email = "";
$localAddress = "";
$bloodGroup = "";
$castCategory = "";
$gender = "";
$dob = "";
$branch = "";
$class = "";
$roll = "";
$lending_policy = "";
$membership_date = "";
$membership_expiry_date = "";
$membership_category = "";
$membershipStatus = "";
$photo = ""; // Added photo variable

// Retrieve member code from the form submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['member_code'])) {
    $member_code = $_POST['member_code'];
    $sql = "SELECT * FROM membership WHERE member_code = '$member_code'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Data retrieval successful, populate the form fields
        $membername = $row['member_name'];
        $member_code = $row['member_code'];
        $permanentAddress = $row['p_address'];
        $pincode = $row['pincode'];
        $contactMobile = $row['contact'];
        $email = $row['email'];
        $localAddress = $row['local_address'];
        $bloodGroup = $row['blood_group'];
        $castCategory = $row['cast_category'];
        $gender = $row['gender'];
        $dob = $row['dob'];
        $branch = $row['branch'];
        $class = $row['class'];
        $roll = $row['roll_no'];
        $lending_policy = $row['lending_policy'];
        $membership_date = $row['mem_date'];
        $membership_expiry_date = $row['mem_exp_date'];
        $membership_category = $row['mem_category'];
        $membershipStatus = $row['mem_status'];
        $photo = $row['photo']; // Retrieve photo
    } else {
        // Member not found, handle this case (e.g., display an error message)
    }
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
        .photo-container {
        width: 200px; /* Adjust the width as needed */
    }

    .photo-wrapper img {
        width: 100%;
        height: auto;
        border-radius: 5px;
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
        <h2>Edit Member Information</h2>
        <form id="searchForm" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="member_code">Member Code:</label>
                <input type="text" id="member_code" name="member_code" value="<?php echo $member_code; ?>">
            </div>
            <div class="form-group">
                <button type="submit" name="search">Search</button>
            </div>
        </form>

        <form id="membershipForm" action="update_member_process.php" method="post" enctype="multipart/form-data">
            <!-- Populate form fields with retrieved data -->
            <div class="form-group">
                <label for="membername">Member Name:</label>
                <input type="text" name="membername" value="<?php echo $membername; ?>">
            </div>

            <div class="form-group">
                <label for="permanentAddress">Permanent Address:</label>
                <input type="text" name="permanentAddress" value="<?php echo $permanentAddress; ?>">
            </div>

            <div class="form-group">
                <label for="pincode">Pincode:</label>
                <input type="text" name="pincode" value="<?php echo $pincode; ?>">
            </div>

            <div class="form-group">
                <label for="contactMobile">Contact Mobile:</label>
                <input type="text" name="contactMobile" value="<?php echo $contactMobile; ?>">
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" value="<?php echo $email; ?>">
            </div>

            <div class="form-group">
                <label for="localAddress">Local Address:</label>
                <input type="text" name="localAddress" value="<?php echo $localAddress; ?>">
            </div>

            <div class="form-group">
                <label for="bloodGroup">Blood Group:</label>
                <input type="text" name="bloodGroup" value="<?php echo $bloodGroup; ?>">
            </div>

            <div class="form-group">
                <label for="castCategory">Cast Category:</label>
                <input type="text" name="castCategory" value="<?php echo $castCategory; ?>">
            </div>

            <div class="form-group">
                <label for="gender">Gender:</label>
                <input type="text" name="gender" value="<?php echo $gender; ?>">
            </div>

            <div class="form-group">
                <label for="dob">Date of Birth:</label>
                <input type="date" name="dob" value="<?php echo $dob; ?>">
            </div>

            <div class="form-group">
                <label for="branch">Branch:</label>
                <input type="text" name="branch" value="<?php echo $branch; ?>">
            </div>

            <!-- Replace the existing class form-group with the following code -->
<div class="form-group select-wrapper">
    <label for="class">Class:</label>
    <div class="select-arrow">&#9660;</div>
    <select id="class" name="class">
        <option value="fy" <?php echo ($class === 'fy') ? 'selected' : ''; ?>>FY</option>
        <option value="sy" <?php echo ($class === 'sy') ? 'selected' : ''; ?>>SY</option>
        <option value="ty" <?php echo ($class === 'ty') ? 'selected' : ''; ?>>TY</option>
    </select>
</div>


            <div class="form-group">
                <label for="roll">Roll Number:</label>
                <input type="text" name="roll" value="<?php echo $roll; ?>">
            </div>

            <div class="form-group">
                <label for="lending_policy">Lending Policy:</label>
                <input type="text" name="lending_policy" value="<?php echo $lending_policy; ?>">
            </div>

            <div class="form-group">
                <label for="membership_date">Membership Date:</label>
                <input type="date" name="membership_date" value="<?php echo $membership_date; ?>">
            </div>

            <div class="form-group">
                <label for="membership_expiry_date">Membership Expiry Date:</label>
                <input type="date" name="membership_expiry_date" value="<?php echo $membership_expiry_date; ?>">
            </div>

           <!-- Replace the existing membership_category form-group with the following code -->
<div class="form-group">
    <label for="membership_category">Membership Category:</label>
    <select id="membership_category" name="membership_category">
        <option value="student" <?php echo ($membership_category === 'student') ? 'selected' : ''; ?>>Student</option>
        <option value="faculty" <?php echo ($membership_category === 'faculty') ? 'selected' : ''; ?>>Faculty</option>
    </select>
</div>


          <!-- Replace the existing membershipStatus form-group with the following code -->
<div class="form-group">
    <label>Membership Status:</label><br>
    <input type="radio" id="active" name="membershipStatus" value="active" <?php echo ($membershipStatus === 'active') ? 'checked' : ''; ?>>
    <label for="active">Active</label>
    <input type="radio" id="deactive" name="membershipStatus" value="deactive" <?php echo ($membershipStatus === 'deactive') ? 'checked' : ''; ?>>
    <label for="deactive">Deactive</label>
    <input type="radio" id="blocked" name="membershipStatus" value="blocked" <?php echo ($membershipStatus === 'blocked') ? 'checked' : ''; ?>>
    <label for="blocked">Blocked</label>
</div>


            <div class="form-group">
    <label for="photo">Member Photo:</label>
    <div class="photo-container">
        <?php
        $query = "SELECT photo FROM membership WHERE member_code = '$member_code'";
        $result = mysqli_query($conn, $query);

        if ($result) {
            $row = mysqli_fetch_assoc($result);

            // Base64 encode the blob data for displaying the image
            $base64_image = base64_encode($row['photo']);

            // Display the image inside a container
            echo '<div class="photo-wrapper"><img src="data:image/jpeg;base64,' . $base64_image . '" alt="Member Photo"></div>';
        } else {
            echo "Error: " . mysqli_error($conn);
        }
        ?>
    </div>
</div>
          

            <div class="form-group">
                <label for="new_member_photo">Upload New Member Photo:</label>
                <input type="file" name="new_member_photo">
            </div>

            <div class="form-group">
                <button type="submit">Update</button>
            </div>
        </form>
    </div>

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
</body>
</html>
