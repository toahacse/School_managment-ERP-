<?php
    require_once '../vendor/autoload.php';
    use App\classes\librarian;
    $id=$_GET['id'];
    $queryResult = librarian::viewLibrarianById($id);
    $p = mysqli_fetch_assoc($queryResult);
    librarian::updateLibrarian($_POST,$id);
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
                                    <h3 class="text-center text-light">Update Librarian</h3>
                                </div>
                                <div class="card-body bg-light">
                                    <form action="" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="categoryName">Name:</label>
                                            <input type="text" class="form-control" name="name" required id="formGroupExampleInput" value="<?php echo $p['name']?>"/>
                                        </div>
                                        <div class="form-group">
                                            <label for="categoryName">Email:</label>
                                            <input type="email" class="form-control" name="email" required id="formGroupExampleInput" value="<?php echo $p['email']?>"/>
                                        </div>
                                        <div class="form-group">
                                            <label for="categoryName">Image:</label>
                                            <input type="file" class="form-control" name="img" value="<?php echo $p['img'];?>" id="formGroupExampleInput"/><br/>
                                            <img src="<?php echo $p['img'];?> " height="50px" width="100px;" />
                                        </div>
                                        <div class="form-group">
                                            <label for="categoryName">Address:</label>
                                            <textarea class="form-control" rows="5" cols="3" name="address" required>
                                                <?php echo $p['address']?>
                                            </textarea>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-success btn-block" name="ok" value="Update Librarian" />
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