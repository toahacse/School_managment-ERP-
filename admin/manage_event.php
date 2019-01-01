<?php
    require_once '../vendor/autoload.php';
    use App\classes\event;
    $queryResult = event::viewEvent();
    $i=1;
    $mass='';

    if(isset($_GET['delete'])){
        $id=$_GET['id'];
        $mass = event::deleteEvent($id);
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
                                    <h3 class="text-center text-light">Manage Event</h3>
                                </div>
                                <div class="card-body">
                                    <?php echo $mass;?>
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                                <tr class="bg-primary">
                                                    <th>SL</th>
                                                    <th>Title Name</th>
                                                    <th>Image</th>
                                                    <th>Discraption</th>
                                                    <th>Action</th>
                                                </tr>
                                                <?php while($p = mysqli_fetch_assoc($queryResult)){?>
                                                    <tr>
                                                        <td><?php echo $i++ ?></td>
                                                        <td><?php echo $p['name']?></td>
                                                        <td><img src="<?php echo $p['img']?>" height="60px" width="80px;"/></td>
                                                        <td><?php echo $p['discraption']?></td>
                                                        <td>
                                                            <a href="event_edit.php?id=<?php echo $p['id'];?>" class="btn btn-success btn-xs">
                                                                <span class="glyphicon glyphicon-edit"></span>
                                                            </a>
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