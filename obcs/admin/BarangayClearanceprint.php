<?php
session_start();
error_reporting(0);
include('includes/dbconn.php');

       if(isset($_POST['add']))
  {


$Firstname=$_POST['Firstname'];
$Middlename=$_POST['Middlename'];
$Lastname=$_POST['Lastname'];
$Gender=$_POST['Gender'];
$Address=$_POST['Address'];
$RCT=$_POST['RCT'];
$Issat=$_POST['Issat'];
$Issfrm=$_POST['Issfrm'];
$Datetoday=$_POST['Datetoday'];
$Purpose=$_POST['Purpose'];
$CivilStatus=$_POST['Civilstatus'];
$Certificate=$_POST['Certificate'];
$PlaceofBirth=$_POST['PlaceofBirth'];






$sql="INSERT INTO tblbarangayclearance (Firstname, Middlename, Lastname, Gender, Address, RCT, Issat, Issfrm, Datetoday,Purpose, CivilStatus,Certificate,PlaceofBirth) VALUES ( '$Firstname', '$Middlename', '$Lastname', '$Gender', '$Address', '$RCT', '$Issat', '$Issfrm', '$Datetoday', '$Purpose', '$CivilStatus','$Certificate','$PlaceofBirth')";
if (mysqli_query($dbh,$sql)) {
           echo '<script>alert("Barangay Certificate has been ready to print")</script>';
         echo "<script>window.location.href ='BarangayClearancetable.php'</script>";
      
     } else {
        echo "Error: " . $sql . "
" . mysqli_error($dbh);
     }
     mysqli_close($dbh);
}
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
   
    <title>Barangay 60</title>
  
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
                                            <li><span class="bread-blod">Barangay Clearance</span>
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
                                        <h1>Barangay Clearance </h1>
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
                                                    
                                                    <form method="post">


                
                                                                        <?php
$vid=$_GET['editid'];
$sql="SELECT * from  tblapplication where ID=$vid";
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
                                                                    <label class="login2 pull-right pull-right-pro">Date Today</label>
                                                                </div>
                                                                <div class="col-lg-9">

                                                                    <input type="date" class="form-control" name="Datetoday" value="<?php  echo $row->Datetoday;?>" required="true" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        

                                                           <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro">First Name</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <input type="text" class="form-control" name="Firstname" value="<?php  echo $row->FirstName;?>" readonly="true" required="true"  />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro">Middle Name</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <input type="text" class="form-control" name="Middlename" value="<?php  echo $row->Middlename;?>" readonly="true" required="true" />
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro">Last Name</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <input type="text" class="form-control" name="Lastname" value="<?php  echo $row->LastName;?>" readonly="true" required="true" />
                                                                </div>
                                                            </div>
                                                        </div>

                                                         <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro">Gender</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <input type="text" class="form-control" required="true"value="<?php  echo $row->Gender;?>" readonly="true" name="Gender" />
                                                                </div>
                                                            </div>
                                                        </div>


                                                          <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro">Civilstatus</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <input type="text" class="form-control" required="true"value="<?php  echo $row->CivilStatus;?>" readonly="true" name="Civilstatus" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                          <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro">Place of Birth</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <input type="text" class="form-control" required="true"value="<?php  echo $row->PlaceofBirth;?>" readonly="true" name="PlaceofBirth" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                       
                                                       
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro">Resident Address</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <Input type="text" class="form-control" name="Address" placeholder="House No | Street | Blkd. | City " value="<?php  echo $row->PermanentAdd;?>" required="true" readonly="true"/>
                                                                </div>
                                                            </div>
                                                        </div>

                                                          <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro">Certificate</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <Input type="text" class="form-control" name="Certificate"  value="Barangay Clearance" required="true" readonly="true"/>
                                                                </div>
                                                            </div>
                                                        </div>

                                                     
                                                                           
                                                                       
             
                                                                  
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro">Res Cert No.</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <input type="text" class="form-control" required="true" value="" name="RCT" />
                                                                </div>
                                                            </div>
                                                        </div>


                                                        
                                                             <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro">Issue at</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <input type="text" class="form-control"  value="" name="Issat" />
                                                                </div>  
                                                            </div>
                                                        </div> 
                                                           <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro">Issue from</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <input type="text" class="form-control" required="true" value="" name="Issfrm" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                           <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro">Purpose</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <input type="text" class="form-control" required="true" value="" name="Purpose" />
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
                                                                            
                                                                           <button class="btn btn-sm btn-primary login-submit-cs" type="submit" name="add">Print</button></a>
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
