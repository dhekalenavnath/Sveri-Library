<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "library";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT title, author FROM new_arrival";
$result = $conn->query($sql);
$newArrivals = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $newArrivals[] = $row['title'] . " by " . $row['author'];
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        /* Your existing styles here */
        .navbar {
            background-color: #bebebe;
            overflow: hidden;
        }

        .navbar img {
            float: left;
            padding: 10px;
        }

        .navbar .title {
            text-align: center;
            color: white;
            padding: 10px;
            margin: 0 auto;
        }

        .left-container {
            padding: 20px;
            width: 25%;
            float: left;
            color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 20px;
        }

        .gif-container {
            width: 100%;
            max-width: 300px;
            margin-bottom: 20px;
        }

        .gif-container img {
            width: 100%;
            height: 200px;
        }

        .marquee-container {
            margin-bottom: 20px;
            padding: 25px;
            color: white;
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100%;
            position: relative;
        }

        .marquee {
            font-size: 20px;
            font-weight: bold;
            overflow: hidden;
            white-space: nowrap;
            animation: marquee 8s linear infinite;
            position: absolute;
            top: 0px;
            left: 10px;
        }

        .container11 {
            display: flex;
            padding: 200px;
            justify-content: center;
            align-items: center;
        }

        .container11 button {
            margin: 20px;
            font-size: 20px;
            font-weight: bold;
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

        /* Additional styling for video */
        body {
            margin: 0; /* Remove default margin */
            overflow: hidden; /* Prevent scrollbars */
        }

        video {
            position: fixed;
            object-fit: cover;
            width: 100%;
            height: 100%;
            z-index: -1;
        }
        /* Apply general styles to all buttons */
button {
  display: inline-block;
  padding: 10px 20px;
  font-size: 16px;
  font-weight: bold;
  text-align: center;
  text-decoration: none;
  cursor: pointer;
  border: 2px solid #3498db;
  border-radius: 5px;
  color: #ffffff;
  background-color: #3498db;
  transition: background-color 0.3s, color 0.3s, border-color 0.3s;
}

/* Hover effect for buttons */
button:hover {
  background-color: #ffffff;
  color: #3498db;
}

/* Additional styles for different button states (optional) */
button:active {
  transform: translateY(2px);
}

/* Add more specific styles if needed, for example, for different button classes or IDs */

    </style>
</head>
<body>

<!-- Video Element -->
<video autoplay muted loop>
    <source src="bgvideo.mp4" type="video/mp4">
    Your browser does not support the video tag.
</video>

<div class="navbar">
    <img src="Sveri Logo1.png" alt="Logo" height="150px" width="150px" style="margin-left: 45px;">
    <div class="title">
        <h1 style="color: black; margin-top: 0px;">SVERI's COE(Poly), Pandharpur<br>Library</h1>
    </div>
    <div class="admin">
        <button onclick="adminl()">Admin Login</button>
    </div>
    <marquee behavior="" direction="" class="mar">Welcome to SVERI Library !</marquee>
</div>

<div class="left-container">
    <div class="gif-container">
    <img src="newarrival.gif" alt="New Arrivals GIF" style="filter: hue-rotate(0deg);">
    </div>
    <div class="marquee-container">
        <marquee direction="up" behavior="scroll" scrollamount="3" class="marquee">
            <br><br><br>
            <?php
            $i=0;
            foreach ($newArrivals as $newArrival) {
                $i=$i+1;
                echo $i,".",$newArrival . "<br>";
            }
            ?>
        </marquee>
    </div>
</div>

<div class="container11 ">
    <button  onclick="openp1()">Login Portal</button>
    <button  onclick="openp2()"> Staff Login</button>
</div>
<footer>
    <p>&copy; 2024 Sveri Library</p>
</footer>

<script>
    function openp2() {
        window.open('staff/stafflogin.php', '_self');
    }

    function openp1() {
        window.open('login/login.php', '_self');
    }

    function adminl() {
        window.open('admin/admin.php', '_self');
    }
</script>
</body>
</html>
