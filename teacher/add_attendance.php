<?php
    require_once '../vendor/autoload.php';
    use App\classes\attendance;
?>
<!DOCTYPE html>
<html lang="en">

<?php include 'head.php'?>

<body>
<div class="wrapper">
    <!-- Sidebar Holder -->

    <?php include 'sidbar.php'?>

    <!-- Page Content Holder -->
    <div id="content">
        <!-- top-bar -->
        <?php include 'nav.php'?>
        <!--// top-bar -->
        <div class="container-fluid">
            <div class="row">
                <!-- Stats -->
                <div class="outer-w3-agile col-xl">
                    <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="card">
                            <div class="card-heading bg-dark p-3">
                                <h3 class="text-center text-light">Please Select Class</h3>
                            </div>
                            <div class="card-body bg-light">
                                <div class="row mb-5">
                                    <div class="col-md-10 col-md-offset-1">
                                        <a href="attendance.php?name=ten" class="btn btn-info col-md-8 col-md-offset-2"><h3>Ten-10</h3></a>
                                        <a href="attendance.php?name=Nine" class="btn btn-info col-md-8 col-md-offset-2 mt-3"><h3>Nine-9</h3></a>
                                        <a href="attendance.php?name=Eight" class="btn btn-info col-md-8 col-md-offset-2 mt-3"><h3>Eight-8</h3></a>
                                        <a href="attendance.php?name=Seven" class="btn btn-info col-md-8 col-md-offset-2 mt-3"><h3>Seven-7</h3></a>
                                        <a href="attendance.php?name=Six" class="btn btn-info col-md-8 col-md-offset-2 mt-3"><h3>Six-6</h3></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <!-- Copyright -->
                    <?php include 'footer.php'?>
                    <!--// Copyright -->
                </div>
            </div>


            <!-- Required common Js -->

            <!-- //Js for bootstrap working -->

</body>

</html>