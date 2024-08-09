<?php
require './db_conn.php';
session_start();

$course_id = isset($_POST['course_id']) ? intval($_POST['course_id']) : 0;
$course_name = isset($_POST['course_name']) ? trim($_POST['course_name']) : '';
$email_address = isset($_POST['email_address']) ? trim($_POST['email_address']) : '';
$phone_number = isset($_POST['phone_number']) ? trim($_POST['phone_number']) : '';

if ($course_id <= 0 || empty($email_address) || empty($phone_number)) {
    echo json_encode(['success' => false, 'error' => 'Invalid input.']);
    exit;
}

$enrolled = "SELECT * FROM enrollments WHERE Course_id = ?";
$enroll_stmt = $mysqli->prepare($enrolled);
$enroll_stmt->bind_param("s", $course_id);
$execute_enrolled = $enroll_stmt->execute();
$enrolled_results = $enroll_stmt->get_result();
if ($enrolled_results->num_rows > 0) {
    echo json_encode(['success' => false, 'error' => 'Sorry! You are already enrolled!']);
} else {

    $sql = "INSERT INTO enrollments (Email_Address, Phone_No, Course_id, Course_Name) VALUES (?, ?, ?, ?)";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("ssis", $email_address, $phone_number, $course_id, $course_name);

    if ($stmt->execute()) {
        echo json_encode(['success' => true, 'message' => 'Enrollment successful! You will be contacted by one of our instructors! Good Luck.']);
    } else {
        echo json_encode(['success' => false, 'error' => 'An error occurred while enrolling.']);
    }
}


$mysqli->close();
