<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            text-align: center;
        }
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #007BFF;
        }
        .form-container {
            text-align: left;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            font-weight: bold;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Update User</h1>
        <?php
        if (isset($_GET['id'])) {
            $userId = $_GET['id'];

            // Connect to the database
            $conn = new mysqli("localhost", "root", "", "library");

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // SQL query to fetch user information based on the ID from the 'users' table
            $sql = "SELECT * FROM users WHERE ID = $userId";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Fetch and display user details
                $user = $result->fetch_assoc();
                ?>
                <div class="form-container">
                    <form action="update_user_process1.php" method="post">
                        <input type="hidden" name="userId" value="<?php echo $user['ID']; ?>">
                        <div class="form-group">
                            <label for="username">Username:</label>
                            <input type="text" name="username" value="<?php echo $user['username']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="text" name="password" value="<?php echo $user['password']; ?>" required>
                        </div>
                        <input type="submit" value="Update">
                    </form>
                </div>
                <?php
            } else {
                echo "User not found.";
            }

            // Close the database connection
            $conn->close();
        } else {
            echo "Invalid request. Please provide a user ID.";
        }
        ?>
    </div>
</body>
</html>
