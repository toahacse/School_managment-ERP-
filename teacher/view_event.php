<?php
require_once '../vendor/autoload.php';
use App\classes\event;
$queryResult = event::viewEvent();
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
                    <div class="row mb-3">
                    <div class="col-md-10 col-md-offset-1 bg-info">
                        <h2 class="text-center text-light p-2">Upcoming Events</h2>
                    </div>
                    </div>
                    <?php while($p = mysqli_fetch_assoc($queryResult)){?>
                   <div class="row mt-3">
                       <div class="col-md-10 col-md-offset-1">
                           <div class="card">
                               <div class="card-head bg-dark">
                                   <h2 class="text-center text-light p-2"><?php echo $p['name'];?></h2>
                               </div>
                               <div class="card-body bg-light">
                                   <div class="col-md-12">
                                       <img src="../admin/<?php echo $p['img']?>" class="col-md-10 col-md-offset-1 mb-5" height="200px;"/>
                                   </div>
                                   <div class="col-md-12">
                                       <h4 class="col-md-offset-1"><?php echo $p['discraption'];?></h4>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                    <?php }
                    ?>
                    <!-- Copyright -->
                    <?php include 'footer.php'?>
                    <!--// Copyright -->
                </div>
            </div>


            <!-- Required common Js -->

            <!-- //Js for bootstrap working -->

</body>

</html>