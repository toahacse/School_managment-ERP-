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
$a=0;
$queryResult = student::viewStudent();
while($p = mysqli_fetch_assoc($queryResult)){
    $a++;
}
$b=0;
$queryResult1 = teacher::viewTeacher();
while($p = mysqli_fetch_assoc($queryResult1)){
    $b++;
}
$c=0;
$queryResult2 = librarian::viewLibrarian();
while($p = mysqli_fetch_assoc($queryResult2)){
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
$f=0;
$queryResult5 = attendance::viewAttendance();
while($p = mysqli_fetch_assoc($queryResult5)){
    $f++;
}
$g=0;
$queryResult6 = assignment::viewAssignment();
while($p = mysqli_fetch_assoc($queryResult6)){
    $g++;
}
$h=0;
$queryResult7 = result::viewResult();
while($p = mysqli_fetch_assoc($queryResult7)){
    $h++;
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
                        <div id="result"></div>
                        <div class="col-md-3">
                            <div class="card bg-danger">
                                <div class="card-body bg-danger">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <span style="font-size: 50px; color: white;" class="glyphicon glyphicon-user"></span>
                                        </div>
                                        <div class="col-md-9">
                                            <h4 class="text-light text-center mb-3">Total Student</h4>
                                            <h3 class="text-center text-light"><?php echo $a;?></h3>
                                        </div>
                                    </div>
                                </div>
                                <a href="manage_student.php">
                                    <div class="card-footer bg-light">
                                        <h5 class="text-danger">View Details <span style="font-size: 15px; margin-left: 80px" class="glyphicon glyphicon-arrow-right"></span></h5>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card bg-primary">
                                <div class="card-body bg-primary">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <span style="font-size: 50px; color: white;" class="glyphicon glyphicon-user"></span>
                                        </div>
                                        <div class="col-md-9">
                                            <h4 class="text-light text-center mb-3">Total Teacher</h4>
                                            <h3 class="text-center text-light"><?php echo $b;?></h3>
                                        </div>
                                    </div>
                                </div>
                                <a href="manage_teacher.php">
                                    <div class="card-footer bg-light">
                                        <h5 class="text-primary">View Details <span style="font-size: 15px; margin-left: 80px" class="glyphicon glyphicon-arrow-right"></span></h5>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card bg-success">
                                <div class="card-body bg-success">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <span style="font-size: 50px; color: white;" class="glyphicon glyphicon-user"></span>
                                        </div>
                                        <div class="col-md-9">
                                            <h4 class="text-light text-center mb-3">Total Librarian</h4>
                                            <h3 class="text-center text-light"><?php echo $c;?></h3>
                                        </div>
                                    </div>
                                </div>
                                <a href="manage_librarian.php">
                                    <div class="card-footer bg-light">
                                        <h5 class="text-success">View Details <span style="font-size: 15px; margin-left: 80px" class="glyphicon glyphicon-arrow-right"></span></h5>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card bg-info">
                                <div class="card-body bg-info">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <span style="font-size: 50px; color: white;" class="glyphicon glyphicon-briefcase"></span>
                                        </div>
                                        <div class="col-md-9">
                                            <h4 class="text-light text-center mb-3">Total Event</h4>
                                            <h3 class="text-center text-light"><?php echo $d;?></h3>
                                        </div>
                                    </div>
                                </div>
                                <a href="manage_event.php">
                                    <div class="card-footer bg-light">
                                        <h5 class="text-info">View Details <span style="font-size: 15px; margin-left: 80px" class="glyphicon glyphicon-arrow-right"></span></h5>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-3 mt-3">
                            <div class="card bg-success">
                                <div class="card-body bg-success">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <span style="font-size: 50px; color: white;" class="glyphicon glyphicon-book"></span>
                                        </div>
                                        <div class="col-md-9">
                                            <h4 class="text-light text-center mb-3">Request Book</h4>
                                            <h3 class="text-center text-light"><?php echo $e;?></h3>
                                        </div>
                                    </div>
                                </div>
                                <a href="view_book.php">
                                    <div class="card-footer bg-light">
                                        <h5 class="text-success">View Details <span style="font-size: 15px; margin-left: 80px" class="glyphicon glyphicon-arrow-right"></span></h5>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-3 mt-3">
                            <div class="card bg-danger">
                                <div class="card-body bg-danger">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <span style="font-size: 50px; color: white;" class="glyphicon glyphicon-calendar"></span>
                                        </div>
                                        <div class="col-md-9">
                                            <h4 class="text-light text-center mb-3">Attendance</h4>
                                            <h3 class="text-center text-light"><?php echo $f;?></h3>
                                        </div>
                                    </div>
                                </div>
                                <a href="view_attendance.php">
                                    <div class="card-footer bg-light">
                                        <h5 class="text-danger">View Details <span style="font-size: 15px; margin-left: 80px" class="glyphicon glyphicon-arrow-right"></span></h5>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-3 mt-3">
                            <div class="card bg-info">
                                <div class="card-body bg-info">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <span style="font-size: 50px; color: white;" class="glyphicon glyphicon-list-alt"></span>
                                        </div>
                                        <div class="col-md-9">
                                            <h4 class="text-light text-center mb-3">Assignment</h4>
                                            <h3 class="text-center text-light"><?php echo $g;?></h3>
                                        </div>
                                    </div>
                                </div>
                                <a href="view_assignment.php">
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
                                            <span style="font-size: 50px; color: white;" class="glyphicon glyphicon-user"></span>
                                        </div>
                                        <div class="col-md-9">
                                            <h4 class="text-light text-center mb-3">Result</h4>
                                            <h3 class="text-center text-light"><?php echo $h;?></h3>
                                        </div>
                                    </div>
                                </div>
                                <a href="view_result.php">
                                    <div class="card-footer bg-light">
                                        <h5 class="text-primary">View Details <span style="font-size: 15px; margin-left: 80px" class="glyphicon glyphicon-arrow-right"></span></h5>
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