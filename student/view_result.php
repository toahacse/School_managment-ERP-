<?php
require_once '../vendor/autoload.php';
use App\classes\result;
$i=1;
$mass='';

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
                                    <h3 class="text-center text-light">View Result</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                    <div class="table-responsive col-md-5 mt-3">
                                        <table class="table table-bordered">
                                            <?php
                                            $id = $_SESSION['student_id'];
                                            $queryResult = result::viewResultById($id);
                                            $p = mysqli_fetch_assoc($queryResult)?>
                                                <tr>
                                                    <th style="width: 50px;">Name:</th>
                                                    <td><?php echo $p['student_name']?></td>
                                                </tr>
                                                <tr>
                                                    <th style="width: 50px;">Class:</th>
                                                    <td><?php echo $p['class']?></td>
                                                </tr>
                                                <tr>
                                                    <th style="width: 50px;">Roll:</th>
                                                    <td><?php echo $p['roll_no']?></td>
                                                </tr>
                                        </table>
                                        <a href="pdf.php?id=<?php echo $id?>" class="btn btn-lg btn-primary">Make PDF</a>
                                    </div>
                                        <div class="table-responsive col-md-5 col-md-offset-1">
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th style="width: 50px;">Subject Name:</th>
                                                    <th>Grade</th>
                                                    <th>GPA</th>
                                                </tr>
                                                <tr>
                                                    <th style="width: 50px;">Bangla:</th>
                                                    <td><?php echo $p['bangla']?></td>
                                                    <td><?php echo $p['banglaGPA']?></td>
                                                </tr>
                                                <tr>
                                                    <th style="width: 50px;">English:</th>
                                                    <td><?php echo $p['english']?></td>
                                                    <td><?php echo $p['englishGPA']?></td>
                                                </tr>
                                                <tr>
                                                    <th style="width: 50px;">Mathematics:</th>
                                                    <td><?php echo $p['mathematics']?></td>
                                                    <td><?php echo $p['mathematicsGPA']?></td>
                                                </tr>
                                                <tr>
                                                    <th style="width: 50px;">Science:</th>
                                                    <td><?php echo $p['science']?></td>
                                                    <td><?php echo $p['scienceGPA']?></td>
                                                </tr>
                                                <tr>
                                                    <th style="width: 50px;">Religion:</th>
                                                    <td><?php echo $p['religion']?></td>
                                                    <td><?php echo $p['religionGPA']?></td>
                                                </tr>
                                                <tr>
                                                    <th colspan="2" style="width: 50px;">Average GPA:</th>
                                                    <td><?php echo ($p['banglaGPA']+$p['englishGPA']+$p['mathematicsGPA']+$p['scienceGPA']+$p['religionGPA'])/5?></td>
                                                </tr>
                                            </table>
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