 
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
                                            <li><span class="bread-blod">Application Form</span>
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

            <!-- Static Table Start -->
            <div class="data-table-area mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sparkline13-list shadow-reset">
                                <div class="sparkline13-hd">
                                    <div class="main-sparkline13-hd">
                                        <h1>Certificate Details</h1>
                                        <div class="sparkline13-outline-icon">
                                            <span class="sparkline13-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                            
                                            <span class="sparkline13-collapse-close"><i class="fa fa-times"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="sparkline13-graph">
                                    <div id="exampl">
                                    <div class="datatable-dashv1-list custom-datatable-overright">
    <?php
$vid=$_GET['viewid'];
$sql="SELECT * from  tblbarangayclearance where ID=$vid";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?> 
    <img src="lOGO.jpeg " style='height:120px ;position: absolute;
    top: 40%;
    left: 40%;
    transform: translate(-200%,-340%);'> 
    <img src="Cavitecity_seal.png " style='height:120px ;position: absolute;
    top: 40%;
    left: 40%;
    transform: translate(220%,-340%);'>
  <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><span style='font-size:19px;font-family:"Arial Rounded MT Bold",sans-serif;'>&nbsp;REPUBLIC OF THE PHILIPPINES</span></p>
<p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><span style='font-size:19px;font-family:"Arial Rounded MT Bold",sans-serif;'>OFFICE OF THE BARANGAY CAPTAIN</span></p>
<p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><span style='font-size:19px;font-family:"Arial Rounded MT Bold",sans-serif;'>BARANGAY 60 &ndash; LETSUGAS</span></p>
<p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><span style='font-size:19px;font-family:"Arial Rounded MT Bold",sans-serif;'>SAN ROQUE, CAVITE CITY</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'><strong><span style='font-size:19px;line-height:115%;font-family:"Arial Rounded MT Bold",sans-serif;'>&nbsp;</span></strong></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><strong><u><span style='font-size:19px;line-height:115%;font-family:"Arial Rounded MT Bold",sans-serif;'>B</span></u></strong><strong><span style='font-size:19px;line-height:115%;font-family:"Arial Rounded MT Bold",sans-serif;'>&nbsp;<u>A</u> <u>R</u> <u>A</u> <u>N</u> <u>G</u> <u>A</u> <u>Y</u>&nbsp; <u>B</u> <u>U</u> <u>S</u> <u>I</u> <u>N</u> <u>E</u> <u>S</u> <u>S</u>&nbsp; &nbsp;<u>P</u> <u>E</u> <u>R</u> <u>M</u> <u>I</u> <u>T</u></span></strong></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-size:16px;line-height:115%;font-family:"Arial Rounded MT Bold",sans-serif;'>To whom it may concern:</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-size:16px;line-height:115%;font-family:"Arial Rounded MT Bold",sans-serif;'>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; This is to certify that the business or trade activity describe below:</span></p>
<p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><u><span style='font-family:"Arial Black",sans-serif;'>  <td><?php  echo htmlentities($row->Issat);?></td></span></u></p>
<p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><span style='font-size:16px;font-family:"Arial Rounded MT Bold",sans-serif;'>Business Name/Trade Activity</span></p>
<p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><span style='font-size:16px;font-family:"Arial Rounded MT Bold",sans-serif;'>&nbsp;</span></p>
<p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><u><span style='font-size:16px;font-family:"Arial Rounded MT Bold",sans-serif;'><?php  echo htmlentities($row->Issfrm);?></span></u></p>
<p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><span style='font-size:16px;font-family:"Arial Rounded MT Bold",sans-serif;'>Location</span></p>
<p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><u><span style='font-size:16px;font-family:"Arial Rounded MT Bold",sans-serif;'><span style="text-decoration:none;">&nbsp;</span></span></u></p>
<p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><u><span style='font-size:16px;font-family:"Arial Black",sans-serif;'><?php  echo htmlentities($row->Firstname);?>&nbsp;<?php  echo htmlentities($row->Middlename);?>&nbsp;<?php  echo htmlentities($row->Lastname);?>&nbsp;</span></u></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><span style='font-size:16px;font-family:"Arial Rounded MT Bold",sans-serif;'>Operator</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><span style='font-size:16px;font-family:"Arial Rounded MT Bold",sans-serif;'>&nbsp;</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><u><span style='font-size:16px;font-family:"Arial Rounded MT Bold",sans-serif;'><?php  echo htmlentities($row->Address);?></span></u></p>
<p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><span style='font-size:16px;font-family:"Arial Rounded MT Bold",sans-serif;'>Address</span></p>
<p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><span style='font-size:16px;font-family:"Arial Rounded MT Bold",sans-serif;'>&nbsp;</span></p>
<p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><span style='font-size:16px;font-family:"Arial Rounded MT Bold",sans-serif;'>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span><span style='font-size:16px;font-family:"Arial",sans-serif;'>Proposed to be established in this barangay and is being applied for a Barangay Clearance to be used in securing a corresponding Mayor&rsquo;s Permit has been found to be:</span></p>
<p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><span style='font-size:16px;font-family:"Arial",sans-serif;'>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; In conformity with the provisions of existing Barangay Ordinances, regulations being enforced in his Barangay.</span></p>
<p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><span style='font-size:16px;font-family:"Arial",sans-serif;'>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Not among those businesses or trade activity being banned to be established in this Barangay.</span></p>
<p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><span style='font-size:16px;font-family:"Arial",sans-serif;'>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; In view of the foregoing, this Barangay, through the undersigned interposes no objection for the issuance of the corresponding Mayor&rsquo;s Permit being adopted for.</span></p>
<p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><span style='font-size:16px;font-family:"Arial",sans-serif;'>&nbsp;</span></p>
<p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><span style='font-size:16px;font-family:"Arial",sans-serif;'>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <?php  echo htmlentities($row->Purpose);?>.</span></p>
<p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><span style='font-size:16px;font-family:"Arial",sans-serif;'>&nbsp;</span></p>
<p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><span style='font-size:16px;font-family:"Arial",sans-serif;'>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Issued  <?php echo " this " . date("j");?> <?php echo "day of " . date("F");?>  <?php echo ", " . date("Y");?> .</span></p>
<p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><span style='font-size:16px;font-family:"Arial",sans-serif;'>&nbsp;</span></p>
<p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><span style='font-size:16px;font-family:"Arial",sans-serif;'>&nbsp;</span></p>
<p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><span style='font-size:16px;font-family:"Arial Rounded MT Bold",sans-serif;'>&nbsp;</span></p>
<p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><span style='font-size:16px;font-family:"Arial Rounded MT Bold",sans-serif;'><?php $cnt=$cnt+1;}} ?>  <?php
                                          
$sql="SELECT * from tblofficials" ;

$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;DRY SEAL &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><u><span style='font-size:19px;font-family:"Arial Black",sans-serif;'><?php  echo htmlentities($row->Captain);?></span></u></p>
<p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><span style='font-size:16px;font-family:"Arial Rounded MT Bold",sans-serif;'>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><strong><span style='font-size:16px;font-family:"Arial",sans-serif;'>Punong Barangay</span></strong></p>


  <?php $cnt=$cnt+1;}} ?> 

          <p> <i class="fa fa-print fa-2x" style="cursor: pointer;"  OnClick="CallPrint(this.value)" ></i></p>                          
      </div></div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Static Table End -->
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
  <script>
function CallPrint(strid) {
var prtContent = document.getElementById("exampl");
var WinPrint = window.open();
WinPrint.document.write(prtContent.innerHTML);
WinPrint.document.close();
WinPrint.focus();
WinPrint.print();
WinPrint.close();
}
</script>

</body>

</html><?php }  ?>
