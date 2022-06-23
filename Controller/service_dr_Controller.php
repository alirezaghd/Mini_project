<?php

include "Model/database.php";

$text = $_POST["text"];
$time = $_POST["time"];
$date = $_POST["date"];
$doctor_id = $_SESSION["doctor_id"];

$db->query("INSERT INTO service (text,time,date, doctor_id) VALUES ('$text','$time', '$date','$doctor_id')");

header("Location: time-dr");


?>