<?php
include "Model/database.php";

$user_id = $_SESSION["user_id"];
$user = $db->query("SELECT * FROM users where users.id = $user_id ")->fetch_assoc();

?>

<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">

            <li class="nav-item">
                <div class="row align-items-center ">
                    <div class="col-3">
                        <img src="<?php echo $user["image"] ?>" class="img-fluid rounded-circle ms-3">
                    </div>
                    <div class="col-9">
                        <a class="nav-link " aria-current="page" href="">
                            <?php echo $user["first_name"] ?>
                            <?php echo $user["last_name"] ?>
                        </a>
                    </div>
                </div>

            </li>
            <hr class="text-dark">

            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="user-panel">
                    <span data-feather="home" class="align-text-bottom"> <i class="far fa-home"></i></span>
                    داشبورد
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="file" class="align-text-bottom"></span>
                    پرونده پزشکی
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="shopping-cart" class="align-text-bottom"></span>
                    داروخانه
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="users" class="align-text-bottom"></span>
                    گزارش ها
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="bar-chart-2" class="align-text-bottom"></span>
                    باشگاه مشتریان
                </a>
            </li>

        </ul>

<!--        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">-->
<!--            <span>Saved reports</span>-->
<!--            <a class="link-secondary" href="#" aria-label="Add a new report">-->
<!--                <span data-feather="plus-circle" class="align-text-bottom"></span>-->
<!--            </a>-->
<!--        </h6>-->
<!--        <ul class="nav flex-column mb-2">-->
<!--            <li class="nav-item">-->
<!--                <a class="nav-link" href="#">-->
<!--                    <span data-feather="file-text" class="align-text-bottom"></span>-->
<!--                    Current month-->
<!--                </a>-->
<!--            </li>-->
<!--            <li class="nav-item">-->
<!--                <a class="nav-link" href="#">-->
<!--                    <span data-feather="file-text" class="align-text-bottom"></span>-->
<!--                    Last quarter-->
<!--                </a>-->
<!--            </li>-->
<!--            <li class="nav-item">-->
<!--                <a class="nav-link" href="#">-->
<!--                    <span data-feather="file-text" class="align-text-bottom"></span>-->
<!--                    Social engagement-->
<!--                </a>-->
<!--            </li>-->
<!--            <li class="nav-item">-->
<!--                <a class="nav-link" href="#">-->
<!--                    <span data-feather="file-text" class="align-text-bottom"></span>-->
<!--                    Year-end sale-->
<!--                </a>-->
<!--            </li>-->
<!--        </ul>-->
    </div>
</nav>
