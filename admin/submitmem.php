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

// Retrieve data from the form and validate
$membername = isset($_POST["membername"]) ? $_POST["membername"] : "";
$membername = str_replace(" ", "_", $membername);
$member_code = isset($_POST["member_code"]) ? $_POST["member_code"] : "";
$permanentAddress = isset($_POST["permanentAddress"]) ? $_POST["permanentAddress"] : "";
$pincode = isset($_POST["pincode"]) ? $_POST["pincode"] : "";
$contactMobile = isset($_POST["contactMobile"]) ? $_POST["contactMobile"] : "";
$email = isset($_POST["email"]) ? $_POST["email"] : "";
$localAddress = isset($_POST["localAddress"]) ? $_POST["localAddress"] : "";
$bloodGroup = isset($_POST["bloodGroup"]) ? $_POST["bloodGroup"] : "";
$castCategory = isset($_POST["castCategory"]) ? $_POST["castCategory"] : "";
$gender = isset($_POST["gender"]) ? $_POST["gender"] : "";
$dob = isset($_POST["dob"]) ? $_POST["dob"] : "";
$branch = isset($_POST["branch"]) ? $_POST["branch"] : "";
$class = isset($_POST["class"]) ? $_POST["class"] : "";
$roll = isset($_POST["roll"]) ? $_POST["roll"] : "";
$lending_policy = isset($_POST["lending_policy"]) ? $_POST["lending_policy"] : "";
$membership_date = isset($_POST["membership_date"]) ? $_POST["membership_date"] : "";
$membership_expiry_date = isset($_POST["membership_expiry_date"]) ? $_POST["membership_expiry_date"] : "";
$membership_category = isset($_POST["membership_category"]) ? $_POST["membership_category"] : "";
$membershipStatus = isset($_POST["membershipStatus"]) ? $_POST["membershipStatus"] : "";

// Check if any required fields are empty
if (empty($membername) || empty($member_code) || empty($_FILES['memberPhoto']['name'])) {
    echo '<script>alert("Please Fill Up All Fields, Including Member Photo");</script>';
} else {
    // Process member photo upload
    $fileContent = file_get_contents($_FILES['memberPhoto']['tmp_name']);

    // Create the table for the member
    $createTableSql = "CREATE TABLE $membername (
        bookname varchar(200),
        accno int(20),
        issue_date date,
        return_date date,
        dis int(1) DEFAULT 1
    );";
    if ($conn->query($createTableSql) === FALSE) {
        echo "Error creating table: " . $conn->error;
    }

    // Insert member data into the 'membership' table
    $insertMembershipSql = "INSERT INTO membership (member_name, member_code, p_address, pincode, contact, email, local_address, blood_group, cast_category, gender, dob, branch, class, roll_no, lending_policy, mem_date, mem_exp_date, mem_category, mem_status, photo)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?,STR_TO_DATE(?, '%Y-%m-%d'), ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($insertMembershipSql);
    if ($stmt) {
        $dob = date('Y-m-d', strtotime($dob)); // Convert dob to MySQL date format
        $stmt->bind_param("ssssssssssssssssssss", $membername, $member_code, $permanentAddress, $pincode, $contactMobile, $email, $localAddress, $bloodGroup, $castCategory, $gender, $dob, $branch, $class, $roll, $lending_policy, $membership_date, $membership_expiry_date, $membership_category, $membershipStatus, $fileContent);
        $result = $stmt->execute();

        if ($result) {
            // The password is set to plain text
            $password = date('dmY', strtotime($dob));
            echo '<script>
                alert("Member Registered Successfully");
                window.open("adminl.php", "_self");
            </script>';
        } else {
            echo "Error: " . $stmt->error;
        }
    } else {
        echo "Error preparing the SQL statement: " . $conn->error;
    }

    // Insert into the 'users' table with username and plain text password
    $username = $member_code;
    $insertUserSql = "INSERT INTO users (username, password) VALUES (?, ?)";
    $stmtUser = $conn->prepare($insertUserSql);
    if ($stmtUser) {
        // Set the password as plain text
        $stmtUser->bind_param("ss", $username, $password);
        $resultUser = $stmtUser->execute();
        if (!$resultUser) {
            echo "Error inserting user: " . $stmtUser->error;
        }
    } else {
        echo "Error preparing the user insert statement: " . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
