<?php
require_once '../vendor/autoload.php';
use App\classes\book;
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
                                    <h3 class="text-center text-light">View Book</h3>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <tr class="bg-primary">
                                                <th>SL</th>
                                                <th>Name</th>
                                                <th>Class</th>
                                                <th>Book</th>
                                            </tr>
                                            <?php
                                            $id = $_SESSION['student_id'];
                                            $queryResult = book::viewBookById($id);
                                            ?>
                                            <?php while($p = mysqli_fetch_assoc($queryResult)){?>
                                                <tr>
                                                    <td><?php echo $i++ ?></td>
                                                    <td><?php echo $p['student_name']?></td>
                                                    <td><?php echo $p['class']?></td>
                                                    <td><?php echo $p['book']?></td>
                                                </tr>
                                            <?php }
                                            ?>
                                        </table>
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