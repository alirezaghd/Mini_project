<?php if ($_SESSION["login_status"] != null && $_SESSION["login_status"] == true):?>

    <?php
include "view/header.php";
    include "view/navbar_dashborad_dr.php"

?>






    <div class="container-fluid">
        <div class="row">
            <?php
            include "view/sidebar_dr.php";
            ?>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between align-items-center pt-3  mb-3 border-bottom">
                    <h1 class="h2">داشبورد</h1>
                </div>
                <div class="row">
                    <div class="card col-4 mb-3 mx-1" >
                        <div class="row g-0 d-flex  text-center">
                            <div class="col-md-3 ">
                                <img src="images/profile/dr/1.jpg" class="img-fluid rounded-circle ms-2 mt-3" alt="...">
                            </div>
                            <div class="col-md-9">
                                <div class="card-body">
                                    <h5 class="card-title">دکتر حمیدرضا معظم</h5>
                                    <p class="card-text">تخصص کودکان و نوزادان</p>
                                    <hr class="text-dark">
                                    <button class="btn btn-success" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                        نوبت دهی
                                    </button>
                                    </p>
                                    <div class="collapse" id="collapseExample">
                                        <div class="card card-body">
                                            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <a class="btn btn-primary d-grid rounded-pill">1 تیر</a>
                                                    </div>

                                                </div>
                                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Previous</span>
                                                </button>
                                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Next</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>


            </main>
        </div>
    </div>



<?php else:
    header("Location: login");
endif; ?>
<?php
include "view/footer.php";
?>