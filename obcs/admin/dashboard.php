<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['obcsaid']==0)) {
  header('location:logout.php');
  } else{



  ?>
<!doctype html>
<html class="no-js" lang="en">

<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barangay 60</title>
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- adminpro icon CSS
        ============================================ -->
    <link rel="stylesheet" href="css/adminpro-custon-icon.css">
    <!-- meanmenu icon CSS
        ============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- mCustomScrollbar CSS
        ============================================ -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- jvectormap CSS
        ============================================ -->
    <link rel="stylesheet" href="css/jvectormap/jquery-jvectormap-2.0.3.css">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="css/data-table/bootstrap-editable.css">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- charts CSS
        ============================================ -->
    <link rel="stylesheet" href="css/c3.min.css">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
        ============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body class="materialdesign">
    
    <!-- Header top area start-->
    <div class="wrapper-pro">
      <?php include_once('includes/sidebar.php');?>
        <!-- Header top area start-->
       <?php include_once('includes/header.php');?>
            <!-- Header top area end-->
            <!-- Breadcome start-->
            <div class="breadcome-area mg-b-30 small-dn">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                                <div class="row">
                                   
                                    <div class="col-lg-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="dashboard.php">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Dashboard</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Breadcome End-->
      
            <!-- Breadcome End-->
            <!-- income order visit user Start -->
            <div class="income-order-visit-user-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4">
                             <?php 
$sql ="SELECT ID from tblapplication  ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totalnewapp=$query->rowCount();
?>
                            <div class="income-dashone-total income-monthly shadow-reset nt-mg-b-30">
                               
                                <div class="income-title">
                                    <div class="main-income-head">
                                        <h2>All Residents</h2>
                                        <div class="main-income-phara">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="income-dashone-pro">
                                    <div class="income-rate-total">
                                        <div class="price-adminpro-rate">
                                            <h3><span class="counter"><?php echo htmlentities($totalnewapp);?></span></h3>
                                        </div>
                                       
                                    </div>
                                    <div class="income-range">
                                       
                                        <a class="block text-center" href="Viewresidents.php"><strong style="color:white">View Detail</strong></a>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <?php 
$sql ="SELECT ID from tblapplication where Age >= 60 ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totalrejapp=$query->rowCount();
?>
                            <div class="income-dashone-total visitor-monthly shadow-reset nt-mg-b-30">
                                
                                <div class="income-title">
                                    <div class="main-income-head">
                                        <h2>Senior Citizens</h2>
                                        <div class="main-income-phara visitor-cl">
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="income-dashone-pro">
                                    <div class="income-rate-total">
                                        <div class="price-adminpro-rate">
                                            <h3><span class="counter"><?php echo htmlentities($totalrejapp);?></span></h3>
                                        </div>
                                       
                                    </div>
                                    <div class="income-range visitor-cl">
                                        <a class="block text-center" href="Student.php"><strong style="color:white">View Detail</strong></a>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-4">
                            <?php 
$sql ="SELECT ID from tblapplication  where SStAtus='Employed'";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totalnewapp=$query->rowCount();
?>
                            <div class="income-dashone-total income-monthly shadow-reset nt-mg-b-30">
                               
                                <div class="income-title">
                                    <div class="main-income-head">
                                        <h2>Employed</h2>
                                        <div class="main-income-phara">
                                          
                                        </div>
                                    </div>
                                </div>
                                <div class="income-dashone-pro">
                                    <div class="income-rate-total">
                                        <div class="price-adminpro-rate">
                                            <h3><span class="counter"><?php echo htmlentities($totalnewapp);?></span></h3>
                                        </div>
                                        
                                    </div>
                                    <div class="income-range">
                                       
                                        <a class="block text-center" href="Employed.php"><strong style="color:white">View Detail</strong></a>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">


                            <?php 
$sql ="SELECT ID from tblapplication where SStAtus='Out of School youth'  ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totalverapp=$query->rowCount();
?>
                            <div class="income-dashone-total orders-monthly shadow-reset nt-mg-b-30">
                                 
                                <div class="income-title">

                                    <div class="main-income-head">
                                        <h2 style="color: black">Out of School Youth</h2>
                                        <div class="main-income-phara order-cl">
                                          
                                        </div>
                                    </div>
                                </div>
                                <div class="income-dashone-pro">
                                    <div class="income-rate-total">
                                        <div class="price-adminpro-rate">
                                            <h3><span class="counter"><?php echo htmlentities($totalverapp);?></span></h3>
                                        </div>
                                        <div class="price-graph">
                                           
                                        </div>
                                    </div>
                                    <div class="income-range order-cl">
                                        <a class="block text-center" href="osy.php"><strong style="color:white">View Detail</strong></a>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">


                            <?php 
$sql ="SELECT ID from tblapplication where SStAtus='Unemployed' ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totalrejapp=$query->rowCount();
?>
                            <div class="income-dashone-total visitor-monthly shadow-reset nt-mg-b-30">
                                
                                <div class="income-title">
                                    <div class="main-income-head">
                                        <h2>Unemployed</h2>
                                        <div class="main-income-phara visitor-cl">
                                          
                                        </div>
                                    </div>
                                </div>
                                <div class="income-dashone-pro">
                                    <div class="income-rate-total">
                                        <div class="price-adminpro-rate">
                                            <h3><span class="counter"><?php echo htmlentities($totalrejapp);?></span></h3>
                                        </div>
                                        <div class="price-graph">
                                          
                                        </div>
                                    </div>
                                    <div class="income-range visitor-cl">
                                        <a class="block text-center" href="Female.php"><strong style="color:white">View Detail</strong></a>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-4">
                            <?php 
$sql ="SELECT ID from tblapplication where Gender='Male' ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totalverapp=$query->rowCount();
?>
                            <div class="income-dashone-total orders-monthly shadow-reset nt-mg-b-30">
                                 
                                <div class="income-title">

                                    <div class="main-income-head">
                                        <h2 style="color: black">Male</h2>
                                        <div class="main-income-phara order-cl">
                                        
                                        </div>
                                    </div>
                                </div>
                                <div class="income-dashone-pro">
                                    <div class="income-rate-total">
                                        <div class="price-adminpro-rate">
                                            <h3><span class="counter"><?php echo htmlentities($totalverapp);?></span></h3>
                                        </div>
                                        <div class="price-graph">
                                          
                                        </div>
                                    </div>
                                    <div class="income-range order-cl">
                                        <a class="block text-center" href="Male.php"><strong style="color:white">View Detail</strong></a>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">


                            <?php 
$sql ="SELECT ID from tblapplication where Gender='Female' ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totalrejapp=$query->rowCount();
?>
                            <div class="income-dashone-total visitor-monthly shadow-reset nt-mg-b-30">
                                
                                <div class="income-title">
                                    <div class="main-income-head">
                                        <h2>Female</h2>
                                        <div class="main-income-phara visitor-cl">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="income-dashone-pro">
                                    <div class="income-rate-total">
                                        <div class="price-adminpro-rate">
                                            <h3><span class="counter"><?php echo htmlentities($totalrejapp);?></span></h3>
                                        </div>
                                        <div class="price-graph">
                                           
                                        </div>
                                    </div>
                                    <div class="income-range visitor-cl">
                                        <a class="block text-center" href="Female.php"><strong style="color:white">View Detail</strong></a>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-4">

                        </div>

                        
                    </div>
                </div>
            </div>
  
        
        
         
        </div>
    </div>
    <?php include_once('includes/footer.php');?>
    <!-- Footer End-->
   
    <!-- jquery
        ==============================        ============================================ -->
    <script src="js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sticky JS
        ============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="js/wow/wow.min.js"></script>
    <!-- counterup JS
        ============================================ -->
    <script src="js/counterup/jquery.counterup.min.js"></script>
    <script src="js/counterup/waypoints.min.js"></script>
    <script src="js/counterup/counterup-active.js"></script>
    <!-- jvectormap JS
        ============================================ -->
    <script src="js/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="js/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="js/jvectormap/jvectormap-active.js"></script>
    <!-- peity JS
        ============================================ -->
    <script src="js/peity/jquery.peity.min.js"></script>
    <script src="js/peity/peity-active.js"></script>
    <!-- sparkline JS
        ============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/sparkline-active.js"></script>
    <!-- flot JS
        ============================================ -->
    <script src="js/flot/Chart.min.js"></script>
    <script src="js/flot/dashtwo-flot-active.js"></script>
    <!-- data table JS
        ============================================ -->
    <script src="js/data-table/bootstrap-table.js"></script>
    <script src="js/data-table/tableExport.js"></script>
    <script src="js/data-table/data-table-active.js"></script>
    <script src="js/data-table/bootstrap-table-editable.js"></script>
    <script src="js/data-table/bootstrap-editable.js"></script>
    <script src="js/data-table/bootstrap-table-resizable.js"></script>
    <script src="js/data-table/colResizable-1.5.source.js"></script>
    <script src="js/data-table/bootstrap-table-export.js"></script>
    <!-- main JS
        ============================================ -->
    <script src="js/main.js"></script>
</body>

</html><?php }  ?>