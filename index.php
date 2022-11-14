<?php
    include "config/Session.php";
    Session::CheckLogin();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>DUT Events</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
        <meta content="Coderthemes" name="author">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets\images\favicon.ico">

        <!-- plugin css -->
        <link href="assets\libs\jquery-vectormap\jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css">

        <!-- App css -->
        <link href="assets\css\bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets\css\icons.min.css" rel="stylesheet" type="text/css">
        <link href="assets\css\app.min.css" rel="stylesheet" type="text/css">

    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">
            <?php
                include "Controller/C_Account.php";
                include "View/header.php" ;            // <!-- Topbar Start -->
                include "View/leftsidebar.php"         // <!-- ========== Left Sidebar Start ========== -->
            ?>
            <div class="content-page">
            <div class="content">

<!-- Start Content-->
            <div class="container-fluid">
                
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <h4 class="page-title">Welcom to Events_DUT</h4>
                        </div>
                    </div>
                </div>     
                <?php
                    include "View/main.php" ;          // <!-- content -->
                ?>
            </div> <!-- container -->
            <?php
                    include "View/footer.php";          // <!-- Footer Start -->
                ?>
            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

        <!-- Vendor js -->
        <script src="assets\js\vendor.min.js"></script>

        <script src="assets\libs\apexcharts\apexcharts.min.js"></script>
        <script src="assets\libs\jquery-sparkline\jquery.sparkline.min.js"></script>
        <script src="assets\libs\jquery-vectormap\jquery-jvectormap-1.2.2.min.js"></script>
        <script src="assets\libs\jquery-vectormap\jquery-jvectormap-world-mill-en.js"></script>

        <!-- Peity chart-->
        <script src="assets\libs\peity\jquery.peity.min.js"></script>

        <!-- init js -->
        <script src="assets\js\pages\dashboard-2.init.js"></script>

        <!-- App js -->
        <script src="assets\js\app.min.js"></script>
        
    </body>
</html>