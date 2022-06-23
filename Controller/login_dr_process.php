<?php
include "Model/database.php";

$user_name = $_POST["Username_dr"];
$password = $_POST["password_dr"];

$secure_password = md5($password);

$result = $db->query("SELECT * FROM doctors WHERE mobile = '$user_name' AND password = '$secure_password' or email = '$user_name' AND password = '$secure_password' ");
$users_count = $result->num_rows;

$username_valid = $db->query("SELECT * FROM doctors WHERE mobile = '$user_name' or email = '$user_name'");
$username_count = $username_valid->num_rows;

$password_valid = $db->query("SELECT * FROM doctors WHERE password='$secure_password'");
$password_count = $password_valid->num_rows;

$message_error = array();
$message_type_error = array();

if ($users_count == 1) {
    $doctor = $result->fetch_assoc();
    $_SESSION["login_status"] = true;
    $_SESSION["doctor_id"] = $doctor["id"];
    header("Location: dr-panel");
} else {
    if ($username_count == 0) {
        $message_error[] = "پزشک گرامی موبایل یا ایمیل نامعتبر است ";
        $message_type_error[] = "error";
    }
    if ($password_count == 0) {
        $message_error[] = "پزشک گرامی گذرواژه نامعتبر است  ";
        $message_type_error[] = "error";
    }
    $_SESSION["message"] = $message_error;
    $_SESSION["message_type"] = $message_type_error;

    header("Location: login");

}