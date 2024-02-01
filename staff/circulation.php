

      <!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .button-container {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .button-container button {
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 10px 20px;
            margin: 0 10px;
            cursor: pointer;
            border-radius: 5px;
        }

        .button-container button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to the Book Management System</h1>

        <div class="button-container">
            <form method="post">
                <button type="submit" name="issue">Issue Book</button>
                <button type="submit" name="return">Return Book</button>
            </form>
        </div>

        <?php
        if (isset($_POST['issue'])) {
            header('Location: issuesbook.php');
            exit();
        } elseif (isset($_POST['return'])) {
            header('Location: returnbook.php');
            exit();
        }
        ?>
    </div>
</body>
</html>
