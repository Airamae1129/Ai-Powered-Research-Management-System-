<?php
include('system/dist/dbcon.php');
session_start();

if(isset($_GET['aid'])) {
    // Assuming $_SESSION['auth_info']['password'] contains the hashed password

    $old_password = $_SESSION['auth_info']['password']; // Using the hashed password from session
    $new_password = $_POST['npass'];
    $new_email = $_POST['email'];

    // Hash the new password
    $hash_new_password = password_hash($new_password, PASSWORD_DEFAULT);

    // Check if the new email already exists
    $check_email_query = $connect->prepare('SELECT COUNT(*) FROM user WHERE email=:email');
    $check_email_query->bindValue('email', $new_email);
    $check_email_query->execute();
    $email_exists = $check_email_query->fetchColumn();

    if($email_exists) {
        // Email already exists, show alert and redirect back
        echo "<script>alert('Email already exists'); window.location.href = 'changep.php?aid={$_GET['aid']}';</script>";
        exit(); // Add exit to prevent further execution
    } else {
        // Email doesn't exist, proceed with updating
        $update_info = $connect->prepare('UPDATE user SET password=:password, email=:email, login=:login WHERE id=:id');
        $update_info->bindValue('password', $hash_new_password); // Using the hashed new password
        $update_info->bindValue('email', $new_email);
        $update_info->bindValue('login', 1);
        $update_info->bindValue('id', $_SESSION['auth_info']['id']);
        $update_info->execute();

        // Update session
        $_SESSION['auth_info']['password'] = $hash_new_password; // Updating with the hashed new password
        $_SESSION['auth_info']['email'] = $new_email;
        $_SESSION['auth_info']['login'] = 1;

        // Check user type
        if(isset($_SESSION['auth_info']['type'])) {
            if ($_SESSION['auth_info']['type'] == 0) {
                header('location: system/users/dashboard.php');
            } elseif ($_SESSION['auth_info']['type'] == 7) {
                header('location:index.php');
            } else {
                header('location:index.php');
            }
            exit(); 
        } else {
           
            header('location:index.php');
            exit();
        }       
    }
} else {
    // Redirect if 'aid' is not set
    header('location: changep.php?aid');
    exit();
}
?>
