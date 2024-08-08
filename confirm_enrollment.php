<?php
// session_start();
include './db_conn.php'; // Include your database connection
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';
// Check if the form data is posted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $course_id = $_POST['course_id'];
// $email = 'gilbertketer759@gmail.com';
// $course_id = 2;
    // Update the confirmed field to 0
    $sql = "UPDATE enrollments SET confirmed = 0 WHERE Email_Address = ? AND Course_id = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("si", $email, $course_id);
    
    if ($stmt->execute()) {
        // Prepare email content
        $subject = "Course Enrollment.";
        $message = "You are successfully enrolled to the course of id $course_id. Congratulations and good luck with your learning journey.";
        
        // Send email using PHPMailer
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
?>
