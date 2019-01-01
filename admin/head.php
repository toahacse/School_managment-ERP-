    <?php
    session_start();
    if(empty($_SESSION['admin_email'])) {
        header("location:login.php");
    }
    ?>
<head>
    <link rel="icon" href="../favicon.ico" type="image/x-icon" />
    <title>Dream school</title>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Modernize Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta Tags -->

    <!-- Style-sheets -->
    <!-- Bootstrap Css -->
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/bootstrap.js"></script>
    <link href="../style/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="../assests/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"  />
    <link href="../assests/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Css -->
    <!-- Bars Css -->
    <link rel="stylesheet" href="../style/css/bar.css">
    <!--// Bars Css -->
    <!-- Calender Css -->
    <link rel="stylesheet" type="text/css" href="../style/css/pignose.calender.css" />
    <!--// Calender Css -->
    <!-- Common Css -->
    <link href="../style/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--// Common Css -->
    <!-- Nav Css -->
    <link rel="stylesheet" href="../style/css/style4.css">
    <!--// Nav Css -->
    <!-- Fontawesome Css -->
    <link href="../style/css/fontawesome-all.css" rel="stylesheet">
    <!--// Fontawesome Css -->
    <!--// Style-sheets -->

    <!--web-fonts-->
    <link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!--//web-fonts-->
</head>