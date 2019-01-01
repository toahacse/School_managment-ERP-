<?php
require_once '../vendor/autoload.php';
use App\classes\book;
use App\classes\result;
$i=1;
$mass='';
$queryResult1 = book::viewBook();
if(isset($_POST['submit'])) {
    $mass = book::saveBookForStudent($_POST);
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
                                    <h3 class="text-center text-light">Issue a Book</h3>
                                </div>
                                <div class="card-body bg-light">
                                    <?php echo $mass;?>
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
                                        $queryResult2 = book::viewBookForStudent($_POST);
                                        $p5 = mysqli_fetch_assoc($queryResult2);
                                        ?>
                                        <div class="row">
                                            <div class="table-responsive col-md-10 col-md-offset-1">
                                                <table class="table table-bordered">
                                                    <tr class="bg-primary">
                                                        <th>SL</th>
                                                        <th>Student Name</th>
                                                        <th>Class</th>
                                                        <th>Roll_no</th>
                                                        <th>View Book</th>
                                                    </tr>
                                                    <?php while($p = mysqli_fetch_assoc($queryResult)){?>
                                                    <tr>
                                                        <td><?php echo $i++ ?></td>
                                                        <td><?php echo $p['name']?></td>
                                                        <td><?php echo $p['class']?></td>
                                                        <td><?php echo $p['roll_no']?></td>
                                                        <td><?php if(!empty($p5['book'])){ echo $p5['book'];}else{ echo '<span class="text-danger">'.'Book Not Available'.'</span>';} ?></td>
                                                    </tr></table>
                                                <?php if(!empty($p5['book'])){ echo '<span class="text-danger text-center">'.'Book Available Now,,,,Please Retrun This Book.'.'</span>';}
                                                else{ ?>
                                                <h3 class="bg-info text-center text-light p-2 mb-2">Please Enter Book</h3>
                                                <form action="" method="post">
                                                    <input type="hidden" name="id" value="<?php echo $p['id']?>"/>
                                                    <input type="hidden" name="name" value="<?php echo $p['name']?>"/>
                                                    <input type="hidden" name="class" value="<?php echo $p['class']?>"/>
                                                    <input type="hidden" name="roll_no" value="<?php echo $p['roll_no']?>"/>
                                                    <table class="table table-bordered">
                                                        <tr>
                                                            <td align="center"><b>Select Book</b></td>
                                                            <td><select name="book" class="form-control col-md-4" style="height:35px;" required>
                                                                    <option>Select Book</option>
                                                                    <?php while($p1 = mysqli_fetch_assoc($queryResult1)){?>
                                                                    <option><?php echo $p1['book_name']?></option>
                                                                    <?php }
                                                                    ?>
                                                                </select></td>
                                                        </tr>
                                                        <tr align="center">
                                                            <td colspan="2"><input type="submit" name="submit" value="Save Book" class="btn btn-block btn-success"></td>
                                                        </tr>
                                                    </table>
                                                </form>
                                                <?php }} ?>

                                            </div>
                                        </div>
                                    <?php }
                                    ?>
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