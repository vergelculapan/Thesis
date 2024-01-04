<?php
session_start();
error_reporting(0);

include('includes/dbconn.php');

?>




   
 
<!doctype html>
<html class="no-js" lang="en">

<head>
   
    <title>Barangay 60</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  
    <!-- Google Fonts
        ============================================ -->
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
  
    <div class="wrapper-pro">
   <?php include_once('includes/sidebar.php');?>
        <?php include_once('includes/header.php');?>
            <!-- Breadcome start-->
            <div class="breadcome-area mg-b-30 small-dn">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcome-list shadow-reset">
                                <div class="row">
                                   
                                    <div class="col-lg-12">
                                        <ul class="breadcome-menu">

                                            
                                            <li><a href="dashboard.php">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Barangay Officials</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          
    
            <!-- Basic Form Start -->
            <div class="basic-form-area mg-b-15">
                <div class="container-fluid">
                         
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sparkline12-list shadow-reset mg-t-30">
                                <div class="sparkline12-hd">
                                    <div class="main-sparkline12-hd">
                                        <h1>Barangay Officials</h1>
                                        <div class="sparkline12-outline-icon">
                                            <span class="sparkline12-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                            
                                            <span class="sparkline12-collapse-close"><i class="fa fa-times"></i></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="sparkline12-graph">
                                    <div class="basic-login-form-ad">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="all-form-element-inner">


                                                    
                                                  <form class="user" method="post" action="">
                                    <?php
                                          
$sql="SELECT * from tblofficials" ;

$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>

                  <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-center pull-right-pro">Barangay Captain</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <input type="text" class="form-control" name="fname" value="<?php  echo $row->Captain;?>" readonly="true" required="true"  />
                                                                </div>
                                                            </div>
                                                        </div>
                   

                                                           <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-center pull-right-pro">Committee on Women and Family/BPOC</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <input type="text" class="form-control" name="fname" value="<?php  echo $row->Kagawad1;?>" readonly="true" required="true"  />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-center pull-right-pro">Committee on Health, Nutrition & Environment Protection/BADAC</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <input type="text" class="form-control" name="mname" value="<?php  echo $row->Kagawad2;?>" readonly="true" required="true" />
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-center pull-right-pro">Committee on Appropriation Peace and Order</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <input type="text" class="form-control" name="lname" value="<?php  echo $row->Kagawad3;?>" readonly="true" required="true" />
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-center pull-right-pro">Committee on Crisis / BDRRMC/<label>
                                                                </div>
                                                                <div class="col-lg-9">

                                                                    <input type="text" class="form-control" name="dob" value="<?php  echo $row->Kagawad4;?>" readonly="true" required="true" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-center pull-right-pro">Committee on Sectoral Concern   </label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <input type="text" class="form-control" required="true"value="<?php  echo $row->Kagawad5;?>" readonly="true" name="pob" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                       
                                                         <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-center pull-right-pro">Committee on Sports</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <input type="text" class="form-control" required="true"value="<?php  echo $row->Kagawad6;?>" readonly="true" name="pob" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                       
                                                       
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-center pull-right-pro">Committee on Assistance and Response</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <input type="text" class="form-control" required="true"  readonly="true" value="<?php  echo $row->Kagawad7;?>"  name="Occupation" />
                                                                </div>
                                                            </div>
                                                        </div>

                                                        
                                                             <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-center pull-right-pro">Treasurer</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <input type="text" class="form-control"  value="<?php  echo $row->Tressurer;?>"  name="NameofSpouse" readonly="true"/>
                                                                </div>
                                                            </div>
                                                        </div> 
                                                         <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-center pull-right-pro">Secretary</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <input type="text"  class="form-control" name="Child" value="<?php  echo $row->Secretary;?>" readonly="true"  />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-center pull-right-pro">SK Chairman / Chairwoman</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <input type="text" class="form-control" required="true" value="<?php  echo $row->SkChairman;?>" readonly="true" name="nameoffather" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                          
                                               
                                                 
                                                   <?php $cnt=$cnt+1;}} ?>
                                                        <div class="form-group-inner">
                                                            <div class="login-btn-inner">
                                                                <div class="row">
                                                                    <div class="col-lg-3"></div>
                                                                    <div class="col-lg-9">
                                                                        <div class="login-horizental cancel-wp pull-left">
                                                                         <button class="btn btn-sm btn-primary login-submit-cs"> <a href="editofficials.php?viewid=<?php echo htmlentities ($row->ID);?>">Change</button></a>
                                                                               
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Basic Form End-->

        </div>
    </div>
   <?php include_once('includes/footer.php');?>
   
    <!-- jquery
        ============================================ -->
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
    <!-- counterup JS
        ============================================ -->
    <script src="js/counterup/jquery.counterup.min.js"></script>
    <script src="js/counterup/waypoints.min.js"></script>
    <!-- peity JS
        ============================================ -->
    <script src="js/peity/jquery.peity.min.js"></script>
    <script src="js/peity/peity-active.js"></script>
    <!-- sparkline JS
        ============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/sparkline-active.js"></script>
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

</html>
