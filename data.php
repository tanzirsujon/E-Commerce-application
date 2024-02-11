<?php

$dbhost="localhost";

$dbuser= "root";

$dbpass="";

$dbname="furniture";

$conn=mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(!$conn){

die("Could not connect to the database".mysqli_connect_error());

}



// Start or resume the session
session_start();

// Check if the user is logged in, if not, redirect to login page
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Handle the form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input
    $currentPassword = $_POST["current_password"];
    $newPassword = $_POST["new_password"];
    $confirmPassword = $_POST["confirm_password"];

    // Validate if new password matches the confirmation
    if ($newPassword != $confirmPassword) {
        echo "New password and confirm password do not match.";
    } else {
        // Get user ID from the session
        $userId = $_SESSION['user_id'];

        // Retrieve the current password hash from the database
        $sql = "SELECT password FROM users WHERE id = $userId";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $currentPasswordHash = $row['password'];

            // Verify the current password
            if (password_verify($currentPassword, $currentPasswordHash)) {
                // Hash the new password
                $newPasswordHash = password_hash($newPassword, PASSWORD_DEFAULT);

                // Update the password in the database
                $updateSql = "UPDATE users SET password = '$newPasswordHash' WHERE id = $userId";
                if ($conn->query($updateSql) === TRUE) {
                    echo "Password updated successfully!";
                } else {
                    echo "Error updating password: " . $conn->error;
                }
            } else {
                echo "Incorrect current password.";
            }
        } else {
            echo "User not found.";
        }
    }
}

// Close the database connection
$conn->close();

?>