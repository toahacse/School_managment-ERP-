<?php
require_once '../vendor/autoload.php';
use App\classes\student;
use App\classes\teacher;
use App\classes\librarian;
use App\classes\event;
use App\classes\book;
use App\classes\attendance;
use App\classes\assignment;
use App\classes\result;
$c=0;
$queryResult1 = book::viewBook();
while($p = mysqli_fetch_assoc($queryResult1)){
    $c++;
}
$d=0;
$queryResult3 = event::viewEvent();
while($p = mysqli_fetch_assoc($queryResult3)){
    $d++;
}
$e=0;
$queryResult4 = book::viewAllBookForStudent();
while($p = mysqli_fetch_assoc($queryResult4)){
    $e++;
}
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
                        <div class="col-md-3 mt-3">
                            <div class="card bg-info">
                                <div class="card-body bg-info">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <span style="font-size: 50px; color: white;" class="glyphicon glyphicon-book"></span>
                                        </div>
                                        <div class="col-md-9">
                                            <h4 class="text-light text-center mb-3">Total Book</h4>
                                            <h3 class="text-center text-light"><?php echo $c;?></h3>
                                        </div>
                                    </div>
                                </div>
                                <a href="manage_book.php">
                                    <div class="card-footer bg-light">
                                        <h5 class="text-info">View Details <span style="font-size: 15px; margin-left: 80px" class="glyphicon glyphicon-arrow-right"></span></h5>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-3 mt-3">
                            <div class="card bg-primary">
                                <div class="card-body bg-primary">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <span style="font-size: 50px; color: white;" class="glyphicon glyphicon-book"></span>
                                        </div>
                                        <div class="col-md-9">
                                            <h4 class="text-light text-center mb-3">Issue Book</h4>
                                            <h3 class="text-center text-light"><?php echo $e;?></h3>
                                        </div>
                                    </div>
                                </div>
                                <a href="manage_issue_book.php">
                                    <div class="card-footer bg-light">
                                        <h5 class="text-primary">View Details <span style="font-size: 15px; margin-left: 80px" class="glyphicon glyphicon-arrow-right"></span></h5>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-3 mt-3">
                            <div class="card bg-success">
                                <div class="card-body bg-success">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <span style="font-size: 50px; color: white;" class="glyphicon glyphicon-briefcase"></span>
                                        </div>
                                        <div class="col-md-9">
                                            <h4 class="text-light text-center mb-3">Event</h4>
                                            <h3 class="text-center text-light"><?php echo $d;?></h3>
                                        </div>
                                    </div>
                                </div>
                                <a href="view_event.php">
                                    <div class="card-footer bg-light">
                                        <h5 class="text-success">View Details <span style="font-size: 15px; margin-left: 80px" class="glyphicon glyphicon-arrow-right"></span></h5>
                                    </div>
                                </a>
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