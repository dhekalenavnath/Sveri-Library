    <!DOCTYPE html>
    <html>
    <head>
        <style>
            /* Add CSS styles for the table and its elements */
            table {
                border-collapse: collapse;
                width: 100%;
                margin-top: 20px;
                font-family: Arial, sans-serif;
            }

            th, td {
                padding: 12px;
                text-align: left;
                border-bottom: 1px solid #ddd;
            }

            th {
                background-color: #f2f2f2;
            }

            tr:hover {
                background-color: #f5f5f5;
            }

            /* Search button styles */
            .search-btn-container {
                margin-top: 10px;
                text-align: center;
            }

            .search-btn {
                padding: 10px 20px;
                background-color: #007BFF;
                color: white;
                border: none;
                cursor: pointer;
            }

            .search-btn:hover {
                background-color: #0056b3;
            }

            /* Your existing CSS styles here */
            .combine {
                border: 1px solid #ddd;
                background-color: #fff;
                padding: 35px;
                margin-bottom: 20px;
                margin: 30px;
                border-radius: 5px;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                display: flex ;
                flex-direction: row;
                line-height: 35px;
                font-size: 30px;
            }

            .combine1 {
                border: 1px solid #ddd;
                background-color: #fff;
                padding: 15px;
                margin-bottom: 20px;
                border-radius: 5px;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                display: flex ;
                flex-direction: row;
                line-height: 35px;
                font-size: 30px;
            }

            img {
                border: 2px solid #ddd;
                border-radius: 50%;
            }

            .ima {
                margin: 30px;
            }

            .data {
                margin: 30px;
            }

            .sea {
                width: 500px;
            }
        </style>
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script>
        // JavaScript function for real-time search
        function searchBooks() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("searchInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("all");
            tr = table.getElementsByTagName("tr");

            // Loop through all table rows and hide those that don't match the search input
            for (i = 1; i < tr.length; i++) { // Start from 1 to skip the table header row
                td = tr[i].getElementsByTagName("td"); // Get all td elements in the row
                var found = false;
                for (var j = 1; j < td.length - 1; j++) { // Start from 1 to skip the Sr.No. column and one column for "Available"
                    txtValue = td[j].textContent || td[j].innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        found = true;
                        break; // If a match is found in any column, stop checking
                    }
                }
                if (found) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    </script>
</head>
<body>
    <center>
        <div class="container my-5">
            <input type="text" id="searchInput" placeholder="Search" class="sea" onkeyup="searchBooks()">
            <div class="search-btn-container">
                <button class="btn btn-primary search-btn" name="searchBtn">Search</button>
                <button class="btn btn-secondary search-btn" name="showall">Show All</button>
            </div>
        </div>
    </center>

    <?php
    $conn = new mysqli("localhost", "root", "", "library");

    // Check connection 
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL query to retrieve all data from the table
    $sql = "SELECT * FROM book;";
    // Execute the query
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Create an HTML table to display all data
        echo '<table id="all">';
        echo "<tr><th>Sr.No.</th><th>Title</th><th>AuthorName</th><th>Available</th></tr>";

        $sro = 0; // Initialize Sr.No. counter

        while ($row = $result->fetch_assoc()) {
            $sro++; // Increment Sr.No. for each row
            echo "<tr>";
            echo "<td>" . $sro . "</td>";
            echo "<td>" . $row["Title"] . "</td>";
            echo "<td>" . $row["AuthorName"] . "</td>";
            
            // Check the "dis" column to determine availability
            if ($row["dis"] == 0) {
                echo "<td>Available</td>";
            } else {
                echo "<td>Unavailable</td>";
            }

            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "<p class='text-center'>No records found.</p>";
    }

    // Close the database connection
    $conn->close();
    ?>

</body>
</html>