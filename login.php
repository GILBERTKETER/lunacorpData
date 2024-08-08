<?php
session_start();
require './db_conn.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = filter_input(INPUT_POST, 'email_address', FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];

    $emailLoggedIn = '';
    $phoneNoLoggedIn = '';
    $sql = "SELECT * FROM lunacorp_students WHERE Email_Address = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        $hashed_password = $row['Password'];


        if (password_verify($password, $hashed_password)) {
            echo json_encode(['success' => true, 'message' => 'You are successfully logged in!']);

            $allInfo = "SELECT * FROM lunacorp_students WHERE Email_Address = ?";
            $stmt3 = $mysqli->prepare($allInfo);
            $stmt3->bind_param("s", $email);
            $stmt3->execute();
            $result2 = $stmt3->get_result();
            if ($result2->num_rows === 1) {
                $rowAllInfo = $result2->fetch_assoc();

                $emailLoggedIn = $rowAllInfo['Email_Address'];
                $phoneNoLoggedIn = $rowAllInfo['Phone_No'];
            }
            $_SESSION['LOGGED_IN_EMAIL'] = $emailLoggedIn;
            $_SESSION['LOGGED_IN_PHONE'] = $phoneNoLoggedIn;
        } else {
            echo json_encode(['success' => false, 'error' => 'Incorrect Password']);
        }
    } else {
        echo json_encode(['success' => false, 'error' => 'Email Not Enrolled in our institution!']);
    }
} else {
    echo json_encode(['success' => false, 'error' => 'Invalid request method!']);
}
