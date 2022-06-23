<?php
include "view/header.php";
include "Model/database.php";
$specialists = $db->query("SELECT * FROM specialists");


?>

<div class="container">
    <a class="btn btn-outline-secondary mt-3" href="index">
         بازگشت به صفحه اصلی
        </a>
    <hr class="text-dark">
    <?php if(isset($_SESSION["message"])): ?>

        <div class="row justify-content-center mt-1">
            <?php for($i=0, $len=count($_SESSION["message"]); $i<$len; $i++): ?>
                <div class="col-12">
                    <?php if($_SESSION["message_type"][$i] == "success"): ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?php echo $_SESSION["message"][$i]; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php elseif($_SESSION["message_type"][$i] == "error"): ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <?php echo $_SESSION["message"][$i]; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif ?>
                </div>
            <?php endfor; ?>
        </div>

        <?php unset($_SESSION["message"]); ?>
    <?php endif; ?>
    <div class="row d-flex aligns-items-center justify-content-center bg-secondary bg-opacity-50 mt-1  mx-0"  >
        <div class="col-12 col-lg-5 col-md-10 col-sm-12 mt-1 ">
            <ul class="nav nav-tabs " id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active text-dark fw-bold" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">کاربران</button>

                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link text-dark fw-bold border-5" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">پزشکان</button>
                </li>

            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                    <!--                    فرم ورود بیمار -->
                    <div class="card text-center mt-0 rounded-0">
                        <div class="card-header">
                            پنل  کاربری
                        </div>
                        <div class="card-body text-start">
                            <form method="post" action="login-user">
                                <div class="mb-3">
                                    <label class="form-label ">موبایل یا ایمیل</label>
                                    <input type="text" class="form-control" name="Username">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label ">گذرواژه</label>
                                    <input type="password" name="password" class="form-control">
                                </div>

                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label " for="exampleCheck1">مرا به خاطر بسپار</label>
                                </div>
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary ">ورود</button>
                                </div>


                            </form>
                            <div class="text-center">
                                <a href="#" class="text-muted text-decoration-none">گذرواژه رو فراموش کردی</a>
                            </div>
                            <hr>
                            <div class="text-center ">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                    ثبت نام
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                     aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">ثبت نام کاربران</h5>

                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form class="row g-3" action="register" method="post" id="register_form" enctype="multipart/form-data">
                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                                        <input type="text" name="firstname" class="form-control" placeholder="نام">
                                                    </div>
                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                                        <input type="text" name="lastname" class="form-control" placeholder="نام خانوادگی">
                                                    </div>


                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                                        <input type="text" name="email" class="form-control" placeholder="ایمیل " >
                                                    </div>
                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                                        <input type="text" name="mobile"  class="form-control" placeholder=" موبایل" >
                                                    </div>
                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                                        <input type="password" name="password" class="form-control"  placeholder="گذرواژه">
                                                    </div>
                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                                        <input type="password" class="form-control" name="password2"  placeholder="تکرار گذرواژه">
                                                    </div>

                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">

                                                        <h3 hidden="hidden">From Date</h3>
                                                        <div class="input-group mb-3">
                                                            <span id="dtp1" class="input-group-text cursor-pointer" data-mds-dtp-guid="f43a28f4-a501-4ed8-afe2-13879d016db3" data-bs-original-title="" title="" data-mds-dtp-group="group1" data-from-date="true"> <i class="fas fa-calendar"></i> </span>
                                                            <input type="text" placeholder="تاریخ تولد"  name="birthday" data-name="dtp1-text" class="form-control">
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                                        <input type="text" name="bimeh"  class="form-control" placeholder=" شماره بیمه" >
                                                    </div>
                                                    <div class="col-lg-2 col-md-12 col-sm-12 col-12 mt-0">
                                                        <h6 class="mb-2">جنسیت</h6>
                                                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                                            <input type="radio" class="btn-check" name="gender"  id="btnradio1"value="1" autocomplete="off" >
                                                            <label class="btn btn-outline-secondary" for="btnradio1">مرد</label>

                                                            <input type="radio" class="btn-check" name="gender" value="0" id="btnradio2" autocomplete="off">
                                                            <label class="btn btn-outline-secondary" for="btnradio2">زن</label>

                                                        </div>
                                                    </div>

                                                </form>


                                            </div>
                                            <div class="modal-footer  d-flex justify-content-center   ">
                                                <button type="submit" form="register_form" class="btn  btn-success">ذخیره</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">


                    <!--                    فرم ورود پزشک -->

                    <div class="card text-center mt-0 rounded-0">
                        <div class="card-header">
                            پنل  پزشکان
                        </div>
                        <div class="card-body">
                            <form method="post" action="login-dr">
                                <div class="mb-3">
                                    <label class="form-label ">نام کاربری</label>
                                    <input type="text" class="form-control" name="Username_dr">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label ">گذرواژه</label>
                                    <input type="password" name="password_dr" class="form-control">
                                </div>

                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label " for="exampleCheck1">مرا به خاطر بسپار</label>
                                </div>
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary ">ورود</button>
                                </div>


                            </form>
                            <div class="text-center">
                                <a href="#" class="text-muted text-decoration-none">گذرواژه رو فراموش کردی</a>
                            </div>
                            <hr>
                            <div class="text-center ">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal2">
                                    ثبت نام
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel"
                                     aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">ثبت نام پزشکان</h5>

                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form class="row g-3 "  action="register-dr"  method="post" id="register_form_dr" >
                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                                        <input type="text" name="firstname_dr" class="form-control" placeholder="نام">
                                                    </div>
                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                                        <input type="text" name="lastname_dr" class="form-control" placeholder="نام خانوادگی">
                                                    </div>
                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                                        <input type="text" name="email_dr" class="form-control" placeholder="ایمیل " >
                                                    </div>
                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                                        <input type="text" name="mobile_dr"  class="form-control" placeholder=" موبایل" >
                                                    </div>
                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                                        <input type="password" name="password_dr" class="form-control"  placeholder="گذرواژه">
                                                    </div>
                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                                        <input type="password" class="form-control" name="password2_dr"  placeholder="تکرار گذرواژه">
                                                    </div>

                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                                        <input type="text" name="parvande"  class="form-control" placeholder=" شماره پرونده طبابت" >
                                                    </div>


                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-12 mt-3">
                                                        <h6 class=" d-inline">جنسیت</h6>
                                                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                                            <input type="radio" class="btn-check" name="gender_dr"  id="btnradio4"value="1" autocomplete="off" >
                                                            <label class="btn btn-outline-secondary" for="btnradio4">مرد</label>

                                                            <input type="radio" class="btn-check" name="gender_dr" value="0" id="btnradio5" autocomplete="off">
                                                            <label class="btn btn-outline-secondary" for="btnradio5">زن</label>

                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
                                                        <select class="form-select"  name="specialist_id">
                                                            <option selected>لطفا تخصص خود را انتخاب کنین</option>
                                                            <?php foreach ($specialists as $specialist): ?>
                                                            <option value="<?php echo $specialist["id"] ?>>"><?php echo $specialist["name"] ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>


                                                </form>

                                            </div>
                                            <div class="modal-footer  d-flex justify-content-center ">
                                                <button type="submit" form="register_form_dr" class="btn  btn-success">ذخیره</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
        <div class="col-12 col-lg-7 col-md-0 col-sm-0 mt-lg-0 mt-md-0 mt-sm-3 mt-3  px-0">
            <img src="images/bg/bg1.jpg" id = "image_bg_login" class="img-fluid mt-lg-0 mt-md-5" alt="...">
        </div>
    </div>

<script>
    let user_btn = document.getElementById("home-tab")
    let dr_btn = document.getElementById("profile-tab")
    let image_bg = document.getElementById("image_bg_login")

    user_btn.addEventListener("click", userclick) ;
    dr_btn.addEventListener("click", drclick) ;
    function userclick() {
        image_bg.src = "images/bg/bg1.jpg";
    }

    function drclick() {
        image_bg.src = "images/bg/bg2.jpg";
    }
</script>
<?php
include "view/footer.php"
?>
