<?php
ini_set('post_max_size', '100M');

if(isset($_POST['submit'])){
    // Check if files were selected
    if(empty($_FILES['files']['name'][0])){
        echo '<script>alert("Please select a file.");';
        echo 'window.open("add_ebook.php","_self");</script>';
        exit; // Stop further execution
    }

    $department = $_POST['department'];
    $files = $_FILES['files'];

    // Establish database connection (mysqli or PDO)
    $conn = new mysqli("localhost", "root", "", "library");

    foreach($files['name'] as $key => $name){
        $file_name = $files['name'][$key];
        $file_type = $files['type'][$key];
        $file_tmp = $files['tmp_name'][$key];

        // Extract title from file name (remove extension)
        $title = pathinfo($file_name, PATHINFO_FILENAME);

        $file_data = file_get_contents($file_tmp); // Get file content

        // Insert file information, department, and title into the database
        $stmt = $conn->prepare("INSERT INTO ebooks (file_name, file_data, title, department) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $file_name, $file_data, $title, $department);
        $stmt->execute();

        // Check if the insertion was successful
        if ($stmt->affected_rows > 0) {
            echo '<script>alert("File \'' . $title . '\' uploaded successfully!");';
            echo 'window.open("add_ebook.php","_self");</script>';
        } else {
            echo "Error uploading file '$file_name'.<br>";
        }

        // Close the statement to prepare for the next iteration
        $stmt->close();
    }

    // Close the database connection
    $conn->close();
}
?>
