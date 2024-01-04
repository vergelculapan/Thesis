
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
    top: 41%;
    left: 40%;
    transform: translate(-200%,-340%);'> 
    <img src="Cavitecity_seal.png " style='height:120px ;position: absolute;
    top: 41%;
    left: 40%;
    transform: translate(220%,-340%);'>
  <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><strong><span style='font-size:16px;font-family:"Cambria",serif;'>REPUBLIC OF THE PHILIPPINES</span></strong></p>
<p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><strong><span style='font-size:16px;font-family:"Cambria",serif;'>OFFICE THE BARANGAY CAPTAIN</span></strong></p>
<p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><strong><span style='font-size:16px;font-family:"Cambria",serif;'>BARANGAY 60 &ndash; LETSUGAS</span></strong></p>
<p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><strong><span style='font-size:16px;font-family:"Cambria",serif;'>SAN ROQUE, CAVITE CITY</span></strong></p>
<p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'><strong><span style='font-size:21px;font-family:"Cambria",serif;'>&nbsp;</span></strong></p>
<p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><strong><span style='font-size:21px;font-family:"Cambria",serif;'>B A R A N G A Y &nbsp; &nbsp;I N D I G E N C Y</span></strong></p>
<p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'><strong><em><span style='font-size:19px;font-family:"Cambria",serif;'>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;</span></em></strong></p>
<p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><strong><span style='font-size:16px;font-family:"Cambria",serif;'>SA KINAUUKULAN</span></strong><strong><span style='font-family:"Cambria",serif;'>:</span></strong></p>
<p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><strong><span style='font-size:16px;font-family:"Cambria",serif;'>&nbsp;</span></strong></p>
<p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><strong><span style='font-size:16px;font-family:"Candara",sans-serif;'>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Ito ay isang ay pagpapatunay na dumulog sa aming tanggapan &nbsp; &nbsp; &nbsp; 
 &nbsp;&nbsp; <?php  echo htmlentities($row->Firstname);?>&nbsp; &nbsp;<?php  echo htmlentities($row->Middlename);?>&nbsp; &nbsp;<?php  echo htmlentities($row->Lastname);?>&nbsp; na residente ng &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<?php  echo htmlentities($row->Address);?> &nbsp; &nbsp; upang humingi &nbsp; ng pahintulot na siya ay makalapit sa inyong tanggapan para sa tulong medical/pinansiyal &nbsp; para sa kanyang anak/magulang/kapatid.</span></strong></p>
<p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><strong><span style='font-size:16px;font-family:"Candara",sans-serif;'>&nbsp;</span></strong></p>
<p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><strong><span style='font-size:16px;font-family:"Candara",sans-serif;'>Siya po ay tunay na nabibilang sa isa sa mga mahihirap na pamilya  barangay na aking nasasakupan at walang kakayahan sa mga gastusin.</span></strong></p>
<p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><strong><span style='font-size:16px;font-family:"Candara",sans-serif;'>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span></strong></p>
<p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><strong><span style='font-size:16px;font-family:"Candara",sans-serif;'>At  dito, aking ipinaaabot ang pusong pasasalamat sa anomang tulong na sa ay inyong maibibigay</span></strong></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><strong><span style='font-family:"Candara",sans-serif;'>&nbsp;</span></strong></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><strong><span style='font-family:"Candara",sans-serif;'>PURPOSE: &nbsp;  <?php  echo htmlentities($row->Purpose);?> &nbsp; &nbsp;</span></strong></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><strong><span style='font-family:"Candara",sans-serif;'>&nbsp;</span></strong></p> <?php $cnt=$cnt+1;}} ?></p><?php
                                          
$sql="SELECT * from tblofficials" ;

$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><strong><span style='font-family:"Candara",sans-serif;'>&nbsp;</span></strong></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><strong><span style='font-family:"Candara",sans-serif;'>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span></strong><strong><span style='font-size:19px;font-family:"Candara",sans-serif;'><?php  echo htmlentities($row->Captain);?></span></strong></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><strong><span style='font-family:"Candara",sans-serif;'>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Barangay Captain</span></strong></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><strong><span style='font-family:"Candara",sans-serif;'>____________________________________________________________________________________ &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span></strong></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><strong><span style='font-size:16px;font-family:"Candara",sans-serif;'>KAGAWAD:</span></strong></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><strong><span style='font-size:16px;font-family:"Candara",sans-serif;'><?php  echo htmlentities($row->Kagawad1);?> &nbsp; &nbsp; &nbsp;Committee ** Women and Family/BPOC</span></strong></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><strong><span style='font-size:16px;font-family:"Candara",sans-serif;'><?php  echo htmlentities($row->Kagawad2);?> &nbsp; &nbsp; &nbsp;Committee on Health,Nutrition &amp; Environment Protection/BADAC</span></strong></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><strong><span style='font-size:16px;font-family:"Candara",sans-serif;'><?php  echo htmlentities($row->Kagawad3);?> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Committee on Appropiation Peace Order</span></strong></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><strong><span style='font-size:16px;font-family:"Candara",sans-serif;'><?php  echo htmlentities($row->Kagawad4);?> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Committee on Crisis/BDRRMC</span></strong></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><strong><span style='font-size:16px;font-family:"Candara",sans-serif;'><?php  echo htmlentities($row->Kagawad5);?> &nbsp; &nbsp; &nbsp;Comittee on Sectoral Concern</span></strong></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><strong><span style='font-size:16px;font-family:"Candara",sans-serif;'><?php  echo htmlentities($row->Kagawad6);?> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Committee on Sports</span></strong></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><strong><span style='font-size:16px;font-family:"Candara",sans-serif;'><?php  echo htmlentities($row->Kagawad7);?>&nbsp; &nbsp; &nbsp; Committee on Assistance and Response</span></strong></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><strong><span style='font-size:16px;font-family:"Candara",sans-serif;'><?php  echo htmlentities($row->Tressurer);?> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Treasurer</span></strong></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><strong><span style='font-size:16px;font-family:"Candara",sans-serif;'><?php  echo htmlentities($row->Secretary);?> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Secretary</span></strong></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><strong><span style='font-size:16px;font-family:"Candara",sans-serif;'><?php  echo htmlentities($row->SkChairman);?> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; SK-Chairman/Chairwoman</span></strong></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><strong><em><span style='font-size:16px;font-family:"Candara",sans-serif;color:red;'>&nbsp;</span></em></strong></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><strong><em><span style='font-size:13px;font-family:"Candara",sans-serif;color:red;'>&nbsp;</span></em></strong></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><strong><em><span style='font-size:13px;font-family:"Candara",sans-serif;color:red;'>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span></em></strong><strong><span style='font-size:13px;font-family:"Candara",sans-serif;'>ISANG BARANGAY NA TAHIMIK  AT NAGKAKAISA,TUNGO SA  MAGANDANG KINABNUKASAN</span></strong></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><strong><em><span style='font-size:16px;font-family:"Candara",sans-serif;'>&nbsp;</span></em></strong></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><strong><em><span style='font-size:19px;font-family:"Candara",sans-serif;'>DRY SEAL</span></em></strong></p>   <?php $cnt=$cnt+1;}} ?> 
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
