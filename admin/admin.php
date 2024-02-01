<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background-image: url("background.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-container {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.2);
        }

        .login-container h2 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
        }

        .login-form input[type="text"],
        .login-form input[type="password"] {
            width: 100%;
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .login-form input[type="submit"] {
            width: 100%;
            padding: 15px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
            transition: background-color 0.3s ease;
        }

        .login-form input[type="submit"]:hover {
            background-color: #0056b3;
        }

        /* Card Styles */
        .card {
            position: relative;
            box-sizing: border-box;
            background: linear-gradient(-45deg, #6bc5f8, #cf59e6, #6bc5f8, #cf59e6);
            animation: gradient 5s ease infinite;
            background-size: 500% 500%;
            width: 230px;
            height: 280px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-direction: column;
            padding: 20px;
            border-radius: 20px;
            margin-top: 20px; /* Adjust the margin as needed */
        }

        @keyframes gradient {
            0% {
                background-position: 0 50%;
                box-shadow: 0px 0px 2px #ffffff,
                    0px 0px 5px #ffffff,
                    0px 0px 10px #6bc5f8,
                    0px 0px 50px #6bc5f8;
            }

            50% {
                background-position: 100% 50%;
                box-shadow: 0px 0px 2px #ffffff,
                    0px 0px 5px #ffffff,
                    0px 0px 10px #cf59e6,
                    0px 0px 50px #cf59e6;
            }

            100% {
                background-position: 0 50%;
                box-shadow: 0px 0px 2px #ffffff,
                    0px 0px 5px #ffffff,
                    0px 0px 10px #6bc5f8,
                    0px 0px 50px #6bc5f8;
            }
        }
        

        /* ... Rest of the existing styles ... */
    </style>
</head>

<body>
   

    <!-- Card Element -->
    <div class="card">
        <div class="heading">
            <span>Admin Login</span>
        </div>
        <div class="content">
        <h2></h2>
        <form method="post" action="admin_dashboard.php" class="login-form">
            <input type="text" name="username" placeholder="Username" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <input type="submit" name="login" value="Login">
        </form>
    </div>
        </div>
       
    </div>
</body>

</html>
