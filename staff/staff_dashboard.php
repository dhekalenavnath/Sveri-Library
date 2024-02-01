<?php
session_start();

// Check if the library user is authenticated
if (!isset($_SESSION["library_user_username"])) {
    // If not authenticated, redirect to the login page
    header("Location: stafflogin.php"); // Replace with your login page URL
    exit();
}

// Logout handling
if (isset($_POST["logout"])) {
    // Record logout time in the staff_loginouttime table
    date_default_timezone_set('Asia/Kolkata');
    $logoutTime = date("Y-m-d H:i:s");
    $username = $_SESSION["library_user_username"];
    $insertLogoutQuery = "UPDATE staff_loginouttime SET logout_time = '$logoutTime' WHERE username = '$username' AND logout_time IS NULL";
    $conn = new mysqli("localhost", "root", "", "library"); // Connect to the database
    $conn->query($insertLogoutQuery);

    // Destroy the session and redirect to the login page
    session_destroy();
    header("Location: stafflogin.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Library User Dashboard</title>
    <link rel="stylesheet" href="styles.css"> <!-- You can create a separate CSS file for styling -->
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f2f2f2;
        }

        .container {
            width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #333;
        }

        .buttons {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 20px;
        }

        .button {
            margin: 10px;
            padding: 15px 30px;
            font-size: 18px;
            font-weight: bold;
            text-align: center;
            text-transform: uppercase;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Welcome, <?php echo $_SESSION["library_user_username"]; ?>!</h2>
        <div class="buttons">
            <button class="button" onclick="searchForBooks()">Search for Books</button>
            <button class="button" onclick="circulatin()">Circulation</button>
            <button class="button" onclick="report()">Student Report</button>
            <!-- Add more buttons as needed -->
        </div>
        <!-- Logout form -->
        <form method="post">
            <input type="submit" name="logout" value="Logout" class="button logout-button">
        </form>
    </div>

    <script>
        function searchForBooks() {
            // Redirect to the Search for Books page
            window.location.href = "../booksdis.php"; // Replace with the actual URL
        }

        function circulatin() {
            // Redirect to the Circulation page
            window.location.href = "../admin/circulation.php"; // Replace with the actual URL
        }
        function report() {
            // Redirect to the Circulation page
            window.location.href = "../admin/report.php"; // Replace with the actual URL
        }
        // Add functions for other buttons as needed
    </script>
</body>
</html>
