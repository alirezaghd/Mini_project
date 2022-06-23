<?php
include "Model/database.php";

$firstname = $_POST["firstname_dr"];
$lastname = $_POST["lastname_dr"];
$email = $_POST["email_dr"];
$mobile = $_POST["mobile_dr"];
$password = $_POST["password_dr"];
$password2 = $_POST["password2_dr"];
$parvande = $_POST["parvande"];
$gender = $_POST["gender_dr"];
$specialists_id = $_POST["specialist_id"];


if ($password == $password2)
{
    if (strlen($mobile) >= 11)
    {
        $dr_count = $db->query("SELECT * FROM doctors WHERE mobile = '$mobile' or email = '$email' ")->num_rows;
        $messages = array();
        $message_type = array();
        if($dr_count == 0)
        {
            $secure_password = md5($password);

            $db->query("INSERT INTO doctors (first_name, last_name, password, email, mobile, num_parvande, gender, specialist_id) VALUES ('$firstname', '$lastname', '$secure_password', '$email', '$mobile', '$parvande', $gender, '$specialists_id')");
            $messages[]= "پزشک گرامی شما به جمع خانواده ما پیوستی";
            $message_type[] = "success";
        }
        else
        {
            $messages[]= " پزشک گرامی شماره موبایل یا ایمیل شما قبلا ثبت شده است";
            $message_type[]= "error";
        }
    }
    else
    {
        $messages[]= " پزشک گرامی موبایل نمی تواند کمتر از 11 حرف باشد";
        $message_type[]= "error";
    }

}
else
{
    $messages[] = "پزشک گرامی گذرواژه تکراری نا معتبر است  ";
    $message_type[] = "error";

}
$_SESSION["message"] = $messages;
$_SESSION["message_type"] = $message_type;

header("Location: login");

?>

