<?php
require_once '../vendor/autoload.php';
use App\classes\attendance;
$name=$_GET['name'];
$i=1;
$k='p';
$queryResult = attendance::viewClassStudent($name);
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
                                    <h3 class="text-center text-light">Add Attendance (<?php echo $name?>)</h3>
                                </div>
                                <div class="card-body bg-light">
                                    <div class="row mb-5 ">
                                        <div class="col-md-10 col-md-offset-1">
                                            <div class="row">
                                                <div class="table-responsive col-md-12">
                                                    <table class="table table-bordered">
                                                        <tr class="bg-primary">
                                                            <th>SL</th>
                                                            <th>Student Name</th>
                                                            <th>Class</th>
                                                            <th>Roll_no</th>
                                                            <th>Action</th>
                                                        </tr>
                                                        <?php while($p = mysqli_fetch_assoc($queryResult)){?>
                                                            <tr>
                                                                <td><?php echo $i++ ?></td>
                                                                <td><?php echo $p['name']?></td>
                                                                <td><?php echo $p['class']?></td>
                                                                <td><?php echo $p['roll_no']?></td>
                                                                <td>
                                                                    <form action="" method="post">
                                                                        <input type="hidden" name="id" value="<?php echo $p['id']?>"/>
                                                                        <input type="hidden" name="name" value="<?php echo $p['name']?>"/>
                                                                        <input type="hidden" name="class" value="<?php echo $p['class']?>"/>
                                                                        <input type="hidden" name="roll_no" value="<?php echo $p['roll_no']?>"/>
                                                                        <input type="submit" name="present" value="P" class="btn btn-success"/>
                                                                        <input type="submit" name="absent" value="A" class="btn btn-danger"/>
                                                                    </form>
                                                                </td>
                                                            </tr>
                                                        <?php } ?>
                                                    </table>
                                                    <?php
                                                    if(isset($_POST['present'])){
                                                        $date=date("d-m-Y");
                                                        attendance::saveAttendanceP($_POST,$date);
                                                    }
                                                    if(isset($_POST['absent'])){
                                                        $date=date("d-m-Y");
                                                        attendance::saveAttendanceA($_POST,$date);
                                                    }?>
                                                </div>
                                            </div>

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