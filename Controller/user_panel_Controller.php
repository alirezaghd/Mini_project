<?php

include "Model/database.php";


//$doctors = $db->query("SELECT *  FROM service INNER JOIN doctors ON doctor_id = doctors.id ");
$doctors = $db->query("SELECT *, doctors.id As drid  FROM doctors INNER JOIN specialists ON specialist_id = specialists.id");

$my_array = array();
foreach ($doctors as $doctor){
    $doctor_id = $doctor["drid"];
    $user_id =$_SESSION["user_id"];
    $doctor["service"] = $db->query("SELECT *,service.id AS serviceid FROM service WHERE doctor_id = $doctor_id ");

//    $doctor["reserve"] = $db->query("SELECT * FROM reserve WHERE service_id = $service_id AND user_id = $user_id")->num_rows;

    $my_array[] = $doctor;

}

require "view/user_panel.php";
?>

