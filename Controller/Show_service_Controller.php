<?php
include "Model/database.php";

$services = $db->query("SELECT * FROM service");

require "view/time_dr_panel.php";
