<?php
    session_start();

    date_default_timezone_set("Asia/tehran");

    $request = $_SERVER["REQUEST_URI"];
    $request = str_replace("/Mini_project","", $request);
    switch ($request)
    {

        case("/"):
        case("/index"):
            require "Controller/indexController.php";
            break;


        case("/login"):
        case("/Login"):
            require "Controller/LoginController.php";
            break;

        case("/reserve"):
            require "Controller/reserveController.php";
            break;

        case("/register"):
            require "Controller/registerController.php";
            break;

        case("/register-dr"):
            require "Controller/register_dr_Controller.php";
            break;

        case("/user-panel"):
            require "Controller/user_panel_Controller.php";
            break;

        case("/dr-panel"):
            require "view/dr_panel.php";
            break;

        case("/login-user"):
            require "Controller/login_user_process.php";
            break;

        case("/login-dr"):
            require "Controller/login_dr_process.php";
            break;

        case("/time-dr"):
            require "view/time_dr_panel.php";
            break;

        case("/set-time-dr"):
            require "Controller/set_time_dr_process_Controller.php";
            break;

        case("/service-dr"):
            require "Controller/service_dr_Controller.php";
            break;

        case("/logout_user"):
            require "Controller/log_out_user.php";
            break;

        default:
            require "view/404.php";
            break;
    }

?>