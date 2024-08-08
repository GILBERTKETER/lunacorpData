<?php

require('./db_conn.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
    return $data;
}

function validate_password($password) {
    return preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_])[A-Za-z\d\W_]{8,}$/', $password);
}

function generateOTP() {
    return rand(100000, 999999);
}

function validateKenyanPhoneNumber($number) {
    $cleanedNumber = preg_replace('/[^0-9]/', '', $number);
    return strlen($cleanedNumber) === 10 && preg_match('/^(07|01)/', $cleanedNumber);
}

$EMAIL_ADDRESS = sanitize_input($_POST['email_address']);
$Full_Name = sanitize_input($_POST['full_name']);
$PASSWORD = $_POST['password'];
$phoneNumber = sanitize_input($_POST["phone_number"]);
$CPASSWORD = $_POST['conf_password'];
$error = '';
$otp = generateOTP();
$verified = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email_CheckQuery = "SELECT * FROM lunacorp_students WHERE Email_Address = ?";
    $phone_CheckQuery = "SELECT * FROM lunacorp_students WHERE Phone_No = ?";
    
    $stmt1 = $mysqli->prepare($email_CheckQuery);
    $stmt1->bind_param("s", $EMAIL_ADDRESS);
    $stmt1->execute();
    $results1 = $stmt1->get_result();

    $stmt0 = $mysqli->prepare($phone_CheckQuery);
    $stmt0->bind_param("s", $phoneNumber);
    $stmt0->execute();
    $results0 = $stmt0->get_result();

    if ($results1->num_rows > 0) {
        echo json_encode(['success' => false, 'error' => "Email is already registered! Please check your gmail app."]);

    } elseif ($results0->num_rows > 0) {
        echo json_encode(['success' => false, 'error' => "Phone number is already taken!"]);

    } elseif ($PASSWORD != $CPASSWORD) {
        echo json_encode(['success' => false, 'error' => "Passwords don't match!"]);

    } elseif (!validate_password($PASSWORD)) {
        echo json_encode(['success' => false, 'error' => "Password should be at least 8 characters long and contain at least one uppercase letter, one lowercase letter, one number, and one special character."]);

    } elseif (!validateKenyanPhoneNumber($phoneNumber)) {
        echo json_encode(['success' => false, 'error' => "The site is not available for your country."]);

    } else {
        $status = 'Active';
        $hashed_password = password_hash($PASSWORD, PASSWORD_BCRYPT);
        $sql = "INSERT INTO lunacorp_students (Email_Address, Full_Name, Password, Phone_No, Gender) 
                VALUES (?, ?, ?, ?, ?)";
        $stmt3 = $mysqli->prepare($sql);
        $stmt3->bind_param("sssss", $EMAIL_ADDRESS, $Full_Name, $hashed_password, $phoneNumber, $_POST['gender']);
        
        if ($stmt3->execute()) {
            $updateUserQuery = "UPDATE lunacorp_students SET OTPCODE = ?, Verified = ? WHERE Email_Address = ?";
            $updateUserStmt = $mysqli->prepare($updateUserQuery);
            $updateUserStmt->bind_param('iis', $otp, $verified, $EMAIL_ADDRESS);
            $otpset = $updateUserStmt->execute();
            
            if ($otpset) {
                $subject = "Verification Code";
                $message = "Please use the code $otp to verify your account and proceed with your learning journey!";
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
                    $mail->addAddress($EMAIL_ADDRESS);
                    $mail->isHTML(true);
                    $mail->Subject = $subject;
                    $mail->Body = $message;
                    $mail->send();
                    echo json_encode(['success' => true, 'message' => "Registration successful! Verification code sent to $EMAIL_ADDRESS. Please check your email."]);
                } catch (Exception $e) {
                    echo json_encode(['success' => false, 'error' => "Error sending verification code! But you can check your email account!"]);
                }
            } else {
                echo json_encode(['success' => false, 'error' => 'An error occurred while updating the OTP.']);
            }
        } else {
            echo json_encode(['success' => false, 'error' => 'An error occurred while adding you to the system!']);
        }
        $stmt3->close();
    }
    $stmt1->close();
    $stmt0->close();
    $mysqli->close();
}
?>
