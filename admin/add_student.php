<?php
    require_once '../vendor/autoload.php';
    use App\classes\student;
    $mass=student::saveStudent($_POST);
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
                    <div class="col-md-8 col-md-offset-2">
                        <div class="card">
                            <div class="card-heading bg-dark p-3">
                                <h3 class="text-center text-light">Add Student</h3>
                            </div>
                            <div class="card-body bg-light">
                                <?php echo $mass;?>
                                <form action="" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="categoryName">Name:</label>
                                        <input type="text" class="form-control" name="name" required id="formGroupExampleInput" placeholder="Name"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="categoryName">Email:</label>
                                        <input type="email" class="form-control" name="email" required id="formGroupExampleInput" placeholder="example@gmail.com"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="categoryName">Father Name:</label>
                                        <input type="text" class="form-control" name="father_name" required id="formGroupExampleInput" placeholder="Father Name"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="categoryName">Class:</label>
                                        <select class="form-control" name="class" required>
                                            <option>Select One</option>
                                            <option>Six</option>
                                            <option>Seven</option>
                                            <option>Eight</option>
                                            <option>Nine</option>
                                            <option>Ten</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="categoryName">Roll No:</label>
                                        <input type="number" class="form-control" name="roll_no" required id="formGroupExampleInput" placeholder="Roll No"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="categoryName">Fee:</label>
                                        <input type="text" class="form-control" name="fee" required id="formGroupExampleInput" placeholder="00 Tk"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="categoryName">Image:</label>
                                        <input type="file" class="form-control" name="img" required id="formGroupExampleInput"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="categoryName">Address:</label>
                                        <textarea class="form-control" rows="5" cols="3" name="address" required>
                                        </textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-success btn-block" name="s_ok" value="Save Student" />
                                    </div>
                                </form>
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