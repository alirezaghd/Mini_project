<?php

include "Model/database.php";

$service_id =$_POST["service_id"];
$user_id =$_SESSION["user_id"];

$count = $db->query("SELECT * FROM reserve WHERE service_id = $service_id AND user_id = $user_id")->num_rows;


if($count == 0)
{
    $db->query("INSERT INTO reserve(user_id, service_id) VALUES($user_id, $service_id)");
    echo 1;
}
else{
    $db->query("DELETE FROM reserve WHERE service_id = $service_id AND user_id = $user_id");
    echo 0;
}


?>


