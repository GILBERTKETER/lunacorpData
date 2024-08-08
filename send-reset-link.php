<?php
require './db_conn.php'; // Include your database connection
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get and sanitize the form data
    $email = filter_input(INPUT_POST, 'email_address', FILTER_SANITIZE_EMAIL);

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Generate a unique token
        $token = bin2hex(random_bytes(32));
        $expiry = date('Y-m-d H:i:s', strtotime('+1 day')); 
        
        // Store the token and expiry in the database
        $stmt = $mysqli->prepare("UPDATE lunacorp_students SET reset_token = ?, token_expiry = ? WHERE Email_Address = ?");
        $stmt->bind_param("sss", $token, $expiry, $email);
        if ($stmt->execute()) {
            // Prepare the reset link
            $link = "http://localhost:3000/changepassword.php?token=" . urlencode($token);

            $subject = "Password Reset Request";
            $message = "Please use the following link to reset your password and continue with your learning journey:<br><a href=\"$link\">Reset Password</a>";

            $mail = new PHPMailer(true);
            try {
                $mail->SMTPDebug = 0;
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->Port = 587;
                $mail->SMTPAuth = true;
                $mail->Username = 'gilbertketer759@gmail.com'; 
                $mail->Password = 'yrviddfylrzsnkim'; 
                $mail->SMTPSecure = 'tls';
                $mail->setFrom('gilbertketer759@gmail.com', 'Lunacorp Data Team');
                $mail->addAddress($email);
                $mail->isHTML(true);
                $mail->Subject = $subject;
                $mail->Body = $message;
                $mail->send();
                echo json_encode(['success' => true, 'message' => "Email sent successfully to $email. Please check your email."]);
            } catch (Exception $e) {
                echo json_encode(['success' => false, 'error' => "Error sending reset link: " . $e->getMessage()]);
            }
        } else {
            echo json_encode(['success' => false, 'error' => 'Error updating database.']);
        }
        
        $stmt->close();
    } else {
        echo json_encode(['success' => false, 'error' => 'Invalid email address.']);
    }
} else {
    echo json_encode(['success' => false, 'error' => 'Invalid request method!']);
}

$mysqli->close();
