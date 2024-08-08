<?php
require './db_conn.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';


function validate_password($password) {
    return preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_])[A-Za-z\d\W_]{8,}$/', $password);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Sanitize and validate the input
    $token = filter_input(INPUT_POST, 'token', FILTER_SANITIZE_STRING);
    $new_password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    $cnew_password = filter_input(INPUT_POST, 'cpassword', FILTER_SANITIZE_STRING);

    // Check if passwords match
    if ($new_password !== $cnew_password) {
        echo json_encode(['success' => false, 'error' => 'Passwords don\'t match.']);
        exit;
    }

    // Validate the new password
    if (!validate_password($new_password)) {
        echo json_encode(['success' => false, 'error' => 'Password should be at least 8 characters long and contain at least one uppercase letter, one lowercase letter, one number, and one special character.']);
        exit;
    }

    // Basic validation
    if (empty($token) || empty($new_password)) {
        echo json_encode(['success' => false, 'error' => 'Token and password are required.']);
        exit;
    }

    // Prepare statement for checking the token
    if ($stmt = $mysqli->prepare("SELECT Email_Address FROM lunacorp_students WHERE reset_token = ? AND token_expiry > NOW()")) {
        $stmt->bind_param("s", $token);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $email = $result->fetch_assoc()['Email_Address'];

            // Hash the new password
            $hashed_password = password_hash($new_password, PASSWORD_BCRYPT);

            // Prepare statement for updating the password and clearing the token
            if ($stmt = $mysqli->prepare("UPDATE lunacorp_students SET Password = ?, reset_token = NULL, token_expiry = NULL WHERE Email_Address = ?")) {
                $stmt->bind_param("ss", $hashed_password, $email);

                if ($stmt->execute()) {
                    // Send email to the user using PHPMailer
                    $subject = "Password Successfully Updated";
                    $message = "Hello,<br><br>Your password has been successfully updated.<br><br>If you did not make this change, please contact support immediately.<br><br>Best regards,<br>Lunacorp Data Team";

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
                        echo json_encode(['success' => true, 'message' => 'Password updated successfully. A confirmation email has been sent.']);
                    } catch (Exception $e) {
                        echo json_encode(['success' => true, 'message' => 'Password updated successfully, but failed to send email notification.']);
                    }
                } else {
                    echo json_encode(['success' => false, 'error' => 'Error updating your password.']);
                }
            } else {
                echo json_encode(['success' => false, 'error' => 'Database query error.']);
            }
        } else {
            echo json_encode(['success' => false, 'error' => 'Invalid or expired token.']);
        }

        $stmt->close();
    } else {
        echo json_encode(['success' => false, 'error' => 'Database query error.']);
    }

} else {
    echo json_encode(['success' => false, 'error' => 'Invalid request method.']);
}

$mysqli->close();
