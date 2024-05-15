<?php

require_once './phpmailer/phpmailer/src/PHPMailer.php';

// Function to generate a random token for password reset
function generateToken($length = 20) {
    return bin2hex(random_bytes($length));
}

// Start the session
session_start();

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve the email entered in the forgot password form
    $email = $_POST['email'];

    // Generate a random token for password reset
    $token = generateToken();

    // Store the token in the session
    $_SESSION['reset_token'] = $token;
    $_SESSION['reset_email'] = $email;

    // Create a new PHPMailer instance
    $mail = new PHPMailer;
    
    // SMTP settings
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'eastwoodsrms@gmail.com';
    $mail->Password = 'Eastwoods_1994';
    $mail->Port = 587;
    $mail->SMTPSecure = 'tls';

    // Sender and recipient
    $mail->setFrom('eastwoodsrms@gmail.com', 'Your Name');
    $mail->addAddress($email);

    // Email subject and body
    $mail->Subject = 'Password Reset';
    $mail->Body    = 'Click the following link to reset your password: http://yourwebsite.com/reset_password.php?token=' . $token;

    // Send the email
    if ($mail->send()) {
        echo 'An email with password reset instructions has been sent to your email address.';
    } else {
        echo 'Error sending email: ' . $mail->ErrorInfo;
    }
}
?>
