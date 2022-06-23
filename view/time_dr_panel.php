<?php
include "view/header.php";
include "view/navbar_dashborad_dr.php";
include "Model/database.php";

$services = $db->query("SELECT * FROM service");
$i = 1
?>


<div class="container">
    <div class="row">
        <?php
        include "view/sidebar_dr.php";
        ?>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2"> خدمات</h1>
            </div>

            <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalToggleLabel">خدمات خود را اضافه کنین</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="service-dr" method="post" class="row g-3">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                    <textarea class="form-control" name="text" rows="3"></textarea>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                    <h3 hidden="hidden">From Date</h3>
                                    <div class="input-group mb-3">
                                        <span id="dtp1" class="input-group-text cursor-pointer" data-mds-dtp-guid="f43a28f4-a501-4ed8-afe2-13879d016db3" data-bs-original-title="" title="" data-mds-dtp-group="group1" data-from-date="true"> <i class="fas fa-calendar"></i> </span>
                                        <input type="text" placeholder="تاریخ "  name="date" data-name="dtp1-text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                    <input type="time" step="60"  placeholder="ساعت"  name="time"  class="form-control">
                                </div>
                                <button class="btn btn-success mt-3" >ذخیره</button>

                            </form>

                        </div>

                    </div>
                </div>
            </div>
            <a class="btn btn-primary" data-bs-toggle="modal" href="#exampleModalToggle" role="button">افزودن خدمات</a>
            <hr class="text-dark">
            <h3>لیست خدمات</h3>
            <hr class="text-dark">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">نام </th>
                    <th scope="col">ساعت</th>
                    <th scope="col">تاریخ</th>

                </tr>
                </thead>
                <tbody>
                <?php foreach ($services as $service):?>
                <tr>
                    <th scope="row"><?php echo $i++ ?></th>
                    <td><?php echo $service["text"] ?> </td>
                    <td><?php echo $service["time"] ?></td>
                    <td><?php echo $service["date"] ?></td>
                </tr>
                <?php endforeach; ?>

                </tbody>
            </table>
        </main>
    </div>
</div>


<?php
include "view/footer.php";
?>
