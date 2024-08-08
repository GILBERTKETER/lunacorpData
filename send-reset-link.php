<?php
session_start();

require_once './vendor/autoload.php'; 
use Dotenv\Dotenv;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

require './db_conn.php'; 

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = filter_input(INPUT_POST, 'email_address', FILTER_SANITIZE_EMAIL);

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $token = bin2hex(random_bytes(32));
        $expiry = date('Y-m-d H:i:s', strtotime('+1 day'));

        $stmt = $mysqli->prepare("UPDATE lunacorp_students SET reset_token = ?, token_expiry = ? WHERE Email_Address = ?");
        $stmt->bind_param("sss", $token, $expiry, $email);
        if ($stmt->execute()) {
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
                $mail->Username = $_ENV['EMAIL_USERNAME']; 
                $mail->Password = $_ENV['EMAIL_PASSWORD']; 
                $mail->SMTPSecure = 'tls';
                $mail->setFrom($_ENV['EMAIL_USERNAME'], 'Lunacorp Data Team');
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
?>
