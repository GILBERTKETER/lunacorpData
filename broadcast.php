<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

require 'vendor/autoload.php'; 

include './db_conn.php';

if (!isset($_SESSION['LOGGED_IN_EMAIL'])) {
    header('Location: signin.php');
    exit();
}

$email = $_SESSION['LOGGED_IN_EMAIL'];
$sql = "SELECT user_type FROM lunacorp_students WHERE Email_Address = ?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->bind_result($user_type);
$stmt->fetch();
$stmt->close();

if ($user_type !== 'administrator') {
    $mysqli->close();
    header('Location: index.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    if (!empty($subject) && !empty($message)) {
        include './db_conn.php'; 

        $sql = "SELECT Email_Address FROM lunacorp_students";
        $result = $mysqli->query($sql);

        if ($result->num_rows > 0) {
            $mail = new PHPMailer(true);

            try {
                $mail->SMTPDebug = 0;
                $mail->isSMTP();
                $mail->Host = $_ENV['SMTP_HOST'];
                $mail->Port = $_ENV['SMTP_PORT'];
                $mail->SMTPAuth = true;
                $mail->Username = $_ENV['SMTP_USERNAME'];
                $mail->Password = $_ENV['SMTP_PASSWORD'];
                $mail->SMTPSecure = 'tls'; 
                $mail->setFrom($_ENV['SMTP_FROM_EMAIL'], $_ENV['SMTP_FROM_NAME']);

                while ($row = $result->fetch_assoc()) {
                    $mail->addAddress($row['Email_Address']);
                }
                
                $mail->isHTML(true);
                $mail->Subject = $subject;
                $mail->Body    = $message;
                $mail->send();
                
                echo json_encode(['success' => true, 'message' => "Emails have been sent successfully."]);
            } catch (Exception $e) {
                echo json_encode(['success' => false, 'error' => "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"]);
            }

            $result->free(); 
        } else {
            echo json_encode(['success' => false, 'message' => 'No students found.']);
        }

        $mysqli->close(); 
    } else {
        echo json_encode(['success' => false, 'message' => 'Please fill in both the subject and message.']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request method.']);
}

