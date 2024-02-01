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

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $membername = $_POST['membername'];
    $permanentAddress = $_POST['permanentAddress'];
    $pincode = $_POST['pincode'];
    $contactMobile = $_POST['contactMobile'];
    $email = $_POST['email'];
    $localAddress = $_POST['localAddress'];
    $bloodGroup = $_POST['bloodGroup'];
    $castCategory = $_POST['castCategory'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $branch = $_POST['branch'];
    $class = $_POST['class'];
    $roll = $_POST['roll'];
    $lending_policy = $_POST['lending_policy'];
    $membership_date = $_POST['membership_date'];
    $membership_expiry_date = $_POST['membership_expiry_date'];
    $membership_category = $_POST['membership_category'];
    $membershipStatus = $_POST['membershipStatus'];

    // Check if a new member photo is uploaded
    if (isset($_FILES['new_member_photo']) && $_FILES['new_member_photo']['error'] == UPLOAD_ERR_OK) {
        $photo = addslashes(file_get_contents($_FILES['new_member_photo']['tmp_name']));
        $updatePhoto = ", photo='$photo'";
    } else {
        $updatePhoto = ""; // No new photo uploaded
    }

    // SQL query to update member information
    $sql = "UPDATE membership SET member_name='$membername', p_address='$permanentAddress', pincode='$pincode', contact='$contactMobile', email='$email', local_address='$localAddress', blood_group='$bloodGroup', cast_category='$castCategory', gender='$gender', dob='$dob', branch='$branch', class='$class', roll_no='$roll', lending_policy='$lending_policy', mem_date='$membership_date', mem_exp_date='$membership_expiry_date', mem_category='$membership_category', mem_status='$membershipStatus' $updatePhoto WHERE member_name='$membername'";

    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("Information Updated Successfully");
        window.open("update_member.php", "_self");
        </script>';
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$conn->close();
?>
