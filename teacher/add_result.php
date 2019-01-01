<?php
    require_once '../vendor/autoload.php';
    use App\classes\result;
    $i=1;
    $mass='';
    if(isset($_POST['submit'])) {
        $mass = result::saveResult($_POST);
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
                    <div class="col-md-10 col-md-offset-1">
                        <div class="card">
                            <div class="card-heading bg-dark p-3">
                                <?php echo $mass;?>
                                <h3 class="text-center text-light">Add Results</h3>
                            </div>
                            <div class="card-body bg-light">
                                <div class="row mb-5 ">
                                    <div class="col-md-10 col-md-offset-1">
                                        <h3 class="bg-info text-center text-light p-2 mb-2">Please Select Class And Roll</h3>
                                        <form action="" method="post">
                                            <select name="class" class="form-control col-md-4" style="height:35px;" required>
                                                <option>Select Class</option>
                                                <option>Six</option>
                                                <option>Seven</option>
                                                <option>Eight</option>
                                                <option>Nine</option>
                                                <option>Ten</option>
                                            </select>
                                            <input type="text" name="roll" class="form-control col-md-4 ml-3" placeholder="Roll" required />
                                            <input type="submit" name="ok" value="Submit" class="col-md-2 ml-3 btn btn-success"/>
                                        </form>
                                    </div>
                                </div>
                                <?php
                                if(isset($_POST['ok'])){
                                $queryResult = result::viewClassStudent($_POST);
                                ?>
                                <div class="row">
                                    <div class="table-responsive col-md-8 col-md-offset-2">
                                        <table class="table table-bordered">
                                            <tr class="bg-primary">
                                                <th>SL</th>
                                                <th>Student Name</th>
                                                <th>Class</th>
                                                <th>Roll_no</th>
                                            </tr>
                                            <?php while($p = mysqli_fetch_assoc($queryResult)){?>
                                                <tr>
                                                    <td><?php echo $i++ ?></td>
                                                    <td><?php echo $p['name']?></td>
                                                    <td><?php echo $p['class']?></td>
                                                    <td><?php echo $p['roll_no']?></td>
                                                </tr></table>
                                        <h3 class="bg-info text-center text-light p-2 mb-2">Please Enter Result</h3>
                                        <form action="" method="post">
                                            <input type="hidden" name="id" value="<?php echo $p['id']?>"/>
                                            <input type="hidden" name="name" value="<?php echo $p['name']?>"/>
                                            <input type="hidden" name="class" value="<?php echo $p['class']?>"/>
                                            <input type="hidden" name="roll_no" value="<?php echo $p['roll_no']?>"/>
                                        <table class="table table-bordered">
                                            <tr>
                                                <th class="col-md-6">Subject Name</th>
                                                <th>Grade</th>
                                                <th>GPA</th>
                                            </tr>
                                            <tr align="center">
                                                <td>Bangla</td>
                                                <td><input type="text" name="bangla" class="form-control col-md-8 ml-3" placeholder="A+" required /></td>
                                                <td><input type="text" name="banglaGPA" class="form-control col-md-8 ml-3" placeholder="5.00" required /></td>
                                            </tr>
                                            <tr align="center">
                                                <td>English</td>
                                                <td><input type="text" name="english" class="form-control col-md-8 ml-3" placeholder="A+" required /></td>
                                                <td><input type="text" name="englishGPA" class="form-control col-md-8 ml-3" placeholder="5.00" required /></td>
                                            </tr>
                                            <tr align="center">
                                                <td>Mathematics</td>
                                                <td><input type="text" name="mathematics" class="form-control col-md-8 ml-3" placeholder="A+" required /></td>
                                                <td><input type="text" name="mathematicsGPA" class="form-control col-md-8 ml-3" placeholder="5.00" required /></td>
                                            </tr>
                                            <tr align="center">
                                                <td>Science</td>
                                                <td><input type="text" name="science" class="form-control col-md-8 ml-3" placeholder="A+" required /></td>
                                                <td><input type="text" name="scienceGPA" class="form-control col-md-8 ml-3" placeholder="5.00" required /></td>
                                            </tr>
                                            <tr align="center">
                                                <td>Religion</td>
                                                <td><input type="text" name="religion" class="form-control col-md-8 ml-3" placeholder="A+" required /></td>
                                                <td><input type="text" name="religionGPA" class="form-control col-md-8 ml-3" placeholder="5.00" required /></td>
                                            </tr>
                                            <tr align="center">
                                                <td colspan="3"><input type="submit" name="submit" value="Save Result" class="btn btn-block btn-success"></td>
                                            </tr>

                                        </table>
                                        </form>
                                            <?php } ?>

                                    </div>
                                </div>
                                <?php }
                                ?>
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