     <?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['obcsaid']==0)) {
  header('location:logout.php');
  } else{



  ?>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <div class="left-sidebar-pro">
            <nav id="sidebar">
                <div class="sidebar-header">
                    <a href="#"><img src="lOGO.jpeg" style='height:120px;width: 120px'alt="" />
                    </a>
                    <?php
$aid=$_SESSION['obcsaid'];
$sql="SELECT AdminName,Email from  tbladmin where ID=:aid";
$query = $dbh -> prepare($sql);
$query->bindParam(':aid',$aid,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
                    <h3> <?php  echo $row->AdminName;?></h3>
                  
                  <?php $cnt=$cnt+1;}} ?>
                </div>
                <div class="left-custom-menu-adp-wrap">
                    <ul class="nav navbar-nav left-sidebar-menu-pro">
                        <li class="nav-item">
                            <a href="dashboard.php" role="button" aria-expanded="false"><i class="fa big-icon fa-home"></i> <span class="mini-dn">Home</span> </a>
                            
                        </li>
                       
                       
                      
                       
                           </li>
                         <li class="nav-item">
                            <a href="Editresidents1.php" role="button" aria-expanded="false"><i class="fa big-icon fa-user"></i> <span class="mini-dn">Residents</span> </a>
                            
                        </li>
                            <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa fa-exclamation" aria-hidden="true"></i> <span class="mini-dn">Services</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">

                            
                              <a href="Complain1.php" class="dropdown-item">Complains</a>

                                
                                      <a href="Manageincidents.php" class="dropdown-item">Incidents</a>
                                        <a href="VAWC.php" class="dropdown-item">VAWC</a>
                                       
                                
                            </div> 
                            
                        </li>
                         <li class="nav-item">
                            <a href="Profillingedit.php" role="button" aria-expanded="false"><i class="fa big-icon fa-map"></i> <span class="mini-dn">Mapping</span> </a>
                            
                        </li>
                       
                         <li class="nav-item">
                            <a href="BarangayOfficials.php" role="button" aria-expanded="false"><i class="fa fa-user-circle-o" aria-hidden="true"></i> <span class="mini-dn">Barangay Officials</span> </a>
                            
                        </li>
                              <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-file"></i> <span class="mini-dn">Certificates </span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                  <a href="Request.php" class="dropdown-item">Request Certificates </a>
                                <a href="BarangayClearance.php" class="dropdown-item">Barangay Clearance</a>
                                <a href="BarangayCertificate.php" class="dropdown-item">Barangay Certificate</a>
                                <a href="BarangayPermit.php" class="dropdown-item">Business Permit</a>
                                <a href="Indigency.php" class="dropdown-item">Barangay Indigency</a>

                            </div>
                     
                     
                      
                    </ul>
                </div>
            </nav>
        </div>
        <?php }  ?>