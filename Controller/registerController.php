<?php
include "Model/database.php";

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];
$password = $_POST["password"];
$password2 = $_POST["password2"];
$birthday = $_POST["birthday"];
$bimeh = $_POST["bimeh"];
$gender = $_POST["gender"];

if ($password == $password2)
{
    if (strlen($mobile) >= 11)
    {
        $users_count = $db->query("SELECT * FROM users WHERE mobile = '$mobile'")->num_rows;
        $messages = array();
        $message_type = array();
        if($users_count == 0)
        {
            $secure_password = md5($password);

            $db->query("INSERT INTO users (first_name, last_name,password,email,birthday,mobile,num_bime,gender) VALUES ('$firstname', '$lastname', '$secure_password', '$email', '$birthday', '$mobile', $bimeh, $gender )");
            $messages[]= "شما به جمع خانواده ما پیوستی";
            $message_type[] = "success";
        }
        else
        {
            $messages[]= " شماره موبایل شما تکراری است";
            $message_type[]= "error";
        }
    }
    else
    {
        $messages[]= "موبایل نمی تواند کمتر از 11 حرف باشد";
        $message_type[]= "error";
    }

}
else
{
    $messages[] = "گذرواژه تکراری نا معتبر است";
    $message_type[] = "error";

}
$_SESSION["message"] = $messages;
$_SESSION["message_type"] = $message_type;

header("Location: login");

?>