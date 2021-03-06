<?php
    require_once '../vendor/autoload.php';
    use App\classes\book;
    $queryResult = book::viewBook();
    $i=1;
    $mass='';

    if(isset($_GET['delete'])){
        $id=$_GET['id'];
        $mass = book::deleteBook($id);
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
                                    <h3 class="text-center text-light">Manage Book</h3>
                                </div>
                                <div class="card-body">
                                    <?php echo $mass;?>
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                                <tr class="bg-primary">
                                                    <th>SL</th>
                                                    <th>Book Name</th>
                                                    <th>Author Name</th>
                                                    <th>price</th>
                                                    <th>Action</th>
                                                </tr>
                                                <?php while($p = mysqli_fetch_assoc($queryResult)){?>
                                                    <tr>
                                                        <td><?php echo $i++ ?></td>
                                                        <td><?php echo $p['book_name']?></td>
                                                        <td><?php echo $p['author_name']?></td>
                                                        <td><?php echo $p['price']?></td>
                                                        <td>
                                                            <a id="delete" href="?delete=true&id=<?php echo $p['id'];?>" onclick="return confirm('Are You Sure Delete this!!');" class="btn btn-danger btn-xs">
                                                                <span class="glyphicon glyphicon-trash"></span>
                                                            </a>
                                                        </td>
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