<?php
// session_start();
include './db_conn.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $course_id = $_POST['course_id'];
    
    $sql = "UPDATE enrollments SET confirmed = 0 WHERE Email_Address = ? AND Course_id = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("si", $email, $course_id);
    
    if ($stmt->execute()) {
        $subject = "Course Enrollment.";
        $message = "You are successfully enrolled in the course with ID $course_id. Congratulations and good luck with your learning journey.";
        
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
            $mail->addAddress($email);
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body = $message;
            $mail->send();
            
            echo "<script>alert('Enrollment confirmed and email sent successfully.'); window.location.href = 'admin.php';</script>";
        } catch (Exception $e) {
            echo "<script>alert('Enrollment confirmed but failed to send email.'); window.location.href = 'admin.php';</script>";
        }
    } else {
        echo "<script>alert('Error confirming enrollment.'); window.location.href = 'admin.php';</script>";
    }
    
    $stmt->close();
}

$mysqli->close();
