<?php
ini_set('post_max_size', '100M');

if(isset($_POST['submit'])){
    $department = $_POST['department'];
    $files = $_FILES['files'];

    // Check if files were selected
    if(empty(array_filter($files['name']))) {
        echo '<script>alert("Please select a file.");';
        echo 'window.open("add_ejournal.php","_self");</script>';
    } else {
        foreach($files['name'] as $key => $name){
            $file_name = $files['name'][$key];
            $file_type = $files['type'][$key];
            $file_tmp = $files['tmp_name'][$key];

            // Extract title from file name (remove extension)
            $title = pathinfo($file_name, PATHINFO_FILENAME);

            $file_data = file_get_contents($file_tmp); // Get file content

            // Establish database connection (mysqli or PDO)
            $conn = new mysqli("localhost", "root", "", "library");

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $stmt = $conn->prepare("INSERT INTO ejournal (file_name, file_data, title, department) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $file_name, $file_data, $title, $department);
            $stmt->execute();

            if ($stmt->affected_rows > 0) {
                echo '<script>alert("File \'' . $title . '\' uploaded successfully!");';
                echo 'window.open("add_ejournal.php","_self");</script>';
            } else {
                echo '<script>alert("Error uploading file \'' . $title . '\'");';
                echo 'window.open("add_ejournal.php","_self");</script>';
            }

            // Close the statement and connection
            $stmt->close();
            $conn->close();
        }
    }
}
?>
