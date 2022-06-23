<?php if ($_SESSION["login_status_user"] != null && $_SESSION["login_status_user"] == true):?>

<?php
include "view/header.php";
?>




    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">آن تایم</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
        <div class="navbar-nav">
            <div class="nav-item text-nowrap">
                <a class="nav-link px-3" href="logout_user">خروج</a>
            </div>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">
            <?php
            include "view/sidebar.php";
            ?>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">داشبورد</h1>

                </div>
                <div class="row ">

                    <?php foreach ($my_array as $doctor): ?>
                    <div class="card col-lg col-md-12 col-sm-12 col-12 mb-3 mx-1 " >
                        <div class="row g-0 d-flex  text-center">
                            <div class="col-lg col-md-2 col-sm-12 col-12 ">
                                <img src="<?php
                                if ($doctor["image"] != "")
                                {
                                    echo $doctor["image"];
                                }
                                else
                                {
                                    if ($doctor["gender"] == 0){
                                        echo "images/profile/dr/userfemale.png";
                                    }
                                    else{
                                        echo "images/profile/dr/usermale.png";
                                    }
                                }

                                ?>" class="img-fluid rounded-circle ms-2 mt-3" alt="...">
                            </div>
                            <div class="col-md-9">
                                <div class="card-body">
                                    <h5 class="card-title">دکتر <?php echo $doctor["first_name"]. " " . $doctor["last_name"];?>  </h5>
                                    <p class="card-text"> تخصص : <?php echo $doctor["name"]?>  </p>
                                    <hr class="text-dark">
                                    <button class="btn btn-success" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $doctor["drid"]?>" aria-expanded="false" aria-controls="collapseExample">
                                        نوبت دهی
                                    </button>
                                    </p>
                                    <div class="collapse" id="collapse<?php echo $doctor["drid"]?>">
                                        <div class="card card-body">
                                            <div id="carousel<?php echo $doctor["drid"]?>" class="carousel slide" data-bs-ride="carousel">
                                                <div class="carousel-inner">
                                                    <?php foreach ($doctor["service"] as $service): ?>

                                                    <div class="carousel-item active">
                                                        <div class="card text-center">
                                                            <div class="card-header">
                                                                <?php echo $service["text"]?>
                                                            </div>
                                                            <div class="card-body">
                                                                <h5 class="card-title"><?php echo $service["date"]?></h5>
                                                                <p class="card-text"><?php echo $service["time"]?></p>
                                                            </div>
                                                            <div class="card-footer text-muted">
                                                                <form class="d-inline" id="form-res-<?php echo $service["serviceid"];?>">
                                                                    <input type="hidden" name="service_id" value="<?php echo $service["serviceid"];?>">
                                                                    <button type="button" id="btn-res-<?php echo $service["serviceid"];?>" onclick="reserve(<?php echo $service["serviceid"]; ?>)" class="btn btn-success">
                                                                        رزرو
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <?php endforeach; ?>


                                                </div>
                                                <button class="carousel-control-prev " type="button" data-bs-target="#carousel<?php echo $doctor["drid"]?>" data-bs-slide="prev">
                                                    <span class="carousel-control-prev-icon bg-secondary" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Previous</span>
                                                </button>
                                                <button class="carousel-control-next" type="button" data-bs-target="#carousel<?php echo $doctor["drid"]?>" data-bs-slide="next">
                                                    <span class="carousel-control-next-icon bg-secondary " aria-hidden="true"></span>
                                                    <span class="visually-hidden">Next</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>

            </div>


            </main>
        </div>
    </div>

<script>

    function reserve(serviceid) {

        let btn = document.getElementById("btn-res-" + serviceid)
        let form_reserve = document.getElementById("form-res-" + serviceid)
        let form_data = new FormData(form_reserve)


        fetch("reserve",{
            method :"post",
            body:form_data
        }).then(result=> result.text()
        ).then(result=>{

            if(result == 1)
            {
                btn.classList.remove("btn-success")
                btn.classList.add("btn-secondary")
                btn.innerHTML = " رزرو شده"

            }
            else if(result == 0){
                btn.classList.remove("btn-secondary")
                btn.classList.add("btn-success")
                btn.innerHTML = " رزرو"


            }
        }).catch(erorr =>{
            alert(erorr)
        });

    }



</script>

<?php else:
    header("Location: login");
endif; ?>
<?php
include "view/footer.php";
?>