<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

       if(isset($_POST['add']))
  {


$Dob=$_POST['dob'];
$Gender=$_POST['gender'];
$Fname=$_POST['fname'];
$Mname=$_POST['mname'];
$Lname=$_POST['lname'];
$Pob=$_POST['pob'];

$Fathername=$_POST['nameoffather'];
$Mothername=$_POST['nameofmother'];
$Padd=$_POST['padd'];
$Postaladd=$_POST['postaladd'];
$Hhn=$_POST['hhn'];
$Hotf=$_POST['hotf'];
$Mobnumber=$_POST['mobnumber'];
$Email=$_POST['email'];
$CivilStatus=$_POST['CivilStatus'];
$nameofspouse=$_POST['nameofspouse'];
$Child=$_POST['Child'];
$StAtus=$_POST['StAtus'];
$Occupation=$_POST['Occupation'];
$Headof=$_POST['Headof'];


 $bd = new DateTime($Dob);
  $datenow = new DateTime();
  $diff = $bd->diff($datenow);
  $Age = $diff->y;

     

$appnumber=mt_rand(100000000, 999999999);
    $ret="select UserID from tblapplication where UserID=:obcsuid";
    $query= $dbh -> prepare($ret);
    $query-> bindParam(':Uid', $Uid, PDO::PARAM_STR);
    $query-> execute();
    $results = $query -> fetchAll(PDO::FETCH_OBJ);
if($query -> rowCount() == 0)
{


$insert="INSERT INTO tblapplication (ApplicationID,DateofBirth,Gender,FirstName,Middlename,Lastname,PlaceofBirth,Age,CivilStatus,NameofSpouse,Children,SStatus,Occupation,NameofFather,NameofMother,PermanentAdd,PostalAdd,Hotf,Hhn,MobileNumber,Email,Headof)VALUES(:Appnumber,:Dob,:Gender,:Fname,:Mname,:Lname,:Pob,:Age,:CivilStatus,:nameofspouse,:Child,:StAtus,:Occupation,:Fathername,:Mothername,:Padd,:Postaladd,:Hotf,:Hhn,:Mobnumber,:Email,:Headof)";
$query=$dbh->prepare($insert);

$query->bindParam(':Appnumber',$Appnumber,PDO::PARAM_STR);
$query->bindParam(':Dob',$Dob,PDO::PARAM_STR);

$query->bindParam(':Gender',$Gender,PDO::PARAM_STR);
$query->bindParam(':Fname',$Fname,PDO::PARAM_STR);
$query->bindParam(':Mname',$Mname,PDO::PARAM_STR);
$query->bindParam(':Lname',$Lname,PDO::PARAM_STR);
$query->bindParam(':Pob',$Pob,PDO::PARAM_STR);
$query->bindParam(':Age',$Age,PDO::PARAM_STR);
$query->bindParam(':Fathername',$Fathername,PDO::PARAM_STR);
$query->bindParam(':Mothername',$Mothername,PDO::PARAM_STR);
$query->bindParam(':Padd',$Padd,PDO::PARAM_STR);
$query->bindParam(':Postaladd',$Postaladd,PDO::PARAM_STR);
$query->bindParam(':Hotf',$Hotf,PDO::PARAM_STR);
$query->bindParam(':Hhn',$Hhn,PDO::PARAM_STR);
$query->bindParam(':Mobnumber',$Mobnumber,PDO::PARAM_INT);
$query->bindParam(':Email',$Email,PDO::PARAM_STR);
$query->bindParam(':CivilStatus',$CivilStatus,PDO::PARAM_STR);
$query->bindParam(':nameofspouse',$nameofspouse,PDO::PARAM_STR);
$query->bindParam(':Child',$Child,PDO::PARAM_STR);
$query->bindParam(':StAtus',$StAtus,PDO::PARAM_STR);
$query->bindParam(':Occupation',$Occupation,PDO::PARAM_STR);
$query->bindParam(':Headof',$Headof,PDO::PARAM_STR);
 $query->execute();

   $LastInsertId=$dbh->lastInsertId();
   if ($LastInsertId>0) {

            if ($Headof=="Yes") {
                # code...
            
    echo '<script>alert("residents detail has been added.")</script>';
echo "<script>window.location.href ='Profilling.php'</script>";
  }


 if ($Headof=="No") {
    echo '<script>alert("residents detail has been added.")</script>';
echo "<script>window.location.href ='Editresidents1.php'</script>";
  }
}
  else
    {
         echo '<script>alert("Something Went Wrong. Please try again")</script>';
    }
}}
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
                                            <li><span class="bread-blod">Resident's Information Form</span>
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
                                        <h1>Resident's Information Form</h1>
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


                 <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="">Resident Information:</label>
                                                                </div>
                                                            </div>
                                                        </div>
                   

                                                           <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro">First Name  *</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <input type="text" class="form-control" name="fname" value="" required="true" placeholder="(Required)" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro">Middle Name</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <input type="text" class="form-control" name="mname" value=""/>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro">Last Name*</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <input type="text" class="form-control" name="lname" value="" required="true" placeholder="(Required)"/>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro">Date of Birth*</label>
                                                                </div>
                                                                <div class="col-lg-9">

                                                                    <input type="date" class="form-control" name="dob" value="" required="true" placeholder="(Required)"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro">Place of Birth*</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <input type="text" class="form-control" required="true" value="" name="pob" placeholder="(Required)" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        

                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3 col-md-9 col-sm-9 col-xs-9">
                                                                    <label class="login2 pull-right pull-right-pro"><span class="basic-ds-n">Gender*</span></label>
                                                                </div>
                                                                <div class="col-lg-9 col-md-3 col-sm-3 col-xs-3">
                                                                    <div class="bt-df-checkbox">
                                                                         <p style="text-align: left;"> <input type="radio" name="gender" id="gender" value="Male" checked="true">Male</p>
                                                                       <p style="text-align: left;"> <input type="radio"  name="gender" id="gender" value="Female" >Female</p>
             
                                                                  
             
                                                                </div>
                                                            </div>
                                                        </div> 


                                                  

                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3 col-md-9 col-sm-9 col-xs-9">
                                                                    <label class="login2 pull-right pull-right-pro"><span class="basic-ds-n" >Civilstatus *</span></label>
                                                                </div>
                                                                <div class="col-lg-9 col-md-3 col-sm-3 col-xs-3">
                                                                    <div class="bt-df-checkbox">
                                                                      
                                                                          <p style="text-align: left;"> <input type="radio" name="CivilStatus" id="CivilStatus" value="Single" checked="true">Single</p>
                                                                             <p style="text-align: left;"> <input type="radio" name="CivilStatus" id="CivilStatus" value="Married">Married</p>
                                                                                <p style="text-align: left;"> <input type="radio" name="CivilStatus" id="CivilStatus" value="Widowed">Widowed</p> 
                                                                       
             
                                                                  
             
                                                                </div>
                                                            </div>
                                                        </div>
                                                             <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro">Full Name of Spouse</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <input type="text" class="form-control"  value="" name="nameofspouse" />
                                                                </div>
                                                            </div>
                                                        </div> 
                                                         <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro">Children Name</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <textarea type="text" class="form-control" name="Child" value="" /></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro">Full Name of Father</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <input type="text" class="form-control"  value="" name="nameoffather" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                          <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro">Full Name of Mother</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <input type="text" class="form-control"  value="" name="nameofmother" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro">Address</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <textarea type="text" class="form-control" name="padd" placeholder=" Country| Province | City  (Required )" value=" " required="true" /></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                         <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro">Resident Address</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <textarea type="text" class="form-control" name="postaladd" placeholder="House No | Street | Blkd. | City (Required)" value="" required="true"/></textarea>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro">House Hold Number</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                   <input type="text" class="form-control" required="true" value="" name="hhn" maxlength="10" placeholder="(Required)" pattern="[0-9]+" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                         <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="">Resident's Status:</label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                              <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3 col-md-9 col-sm-9 col-xs-9">
                                                                    <label class="login2 pull-right pull-right-pro"><span class="basic-ds-n">Employee Status*</span></label>
                                                                </div>
                                                                <div class="col-lg-9 col-md-3 col-sm-3 col-xs-3">
                                                                    <div class="bt-df-checkbox">
                                                                       
                                                                          <p style="text-align: left;"> <input type="radio" name="StAtus" id="StAtus" value="Out of School youth" checked="true">Out of School Youth</p>
                                                                          
                                                                          <p style="text-align: left;"> <input type="radio" name="StAtus" id="StAtus" value="Unemployed">Unemployed</p>
                                                                          <p style="text-align: left;"> <input type="radio" name="StAtus" id="StAtus" value="Employed">Employed</p>
                                                                          
                                                                           
                                                                       
             
                                                                  
             
                                                                </div>
                                                            </div>
                                                        </div>
                                                      
<div class="form-group-inner">
                                                        <div class="row">
                                        <div class="col-lg-3">
                                            <div class="login2 pull-right pull-right-pro">
                                                <label>Occupation:</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="login-input-area">
                                                 <select name="Occupation" class="form-control wd-450"  >
    
    <option value="" selected="selected" disabled="disabled">-- select one --</option>
    <optgroup label="Healthcare Practitioners and Technical Occupations:">
      <option value="Chiropractor">-  Chiropractor</option>
      <option value="Dentist">-  Dentist</option>
      <option value="Dietitian or Nutritionist">-  Dietitian or Nutritionist</option>
      <option value="Optometrist">-  Optometrist</option>
      <option value="Pharmacist">-  Pharmacist</option>
      <option value="Physician">-  Physician</option>
      <option value="Physician Assistant">-  Physician Assistant</option>
      <option value="Podiatrist">-  Podiatrist</option>
      <option value="Registered Nurse">-  Registered Nurse</option>
      <option value="Therapist">-  Therapist</option>
      <option value="Veterinarian">-  Veterinarian</option>
      <option value="Health Technologist or Technician">-  Health Technologist or Technician</option>
      <option value="Other Healthcare Practitioners and Technical Occupation">-  Other Healthcare Practitioners and Technical Occupation</option>
    </optgroup>
    <optgroup label="Healthcare Support Occupations:">
      <option value="Nursing, Psychiatric, or Home Health Aide">-  Nursing, Psychiatric, or Home Health Aide</option>
      <option value="Occupational and Physical Therapist Assistant or Aide">-  Occupational and Physical Therapist Assistant or Aide</option>
      <option value="Other Healthcare Support Occupation">-  Other Healthcare Support Occupation</option>
    </optgroup>
    <optgroup label="Business, Executive, Management, and Financial Occupations:">
      <option value="Chief Executive">-  Chief Executive</option>
      <option value="General and Operations Manager">-  General and Operations Manager</option>
      <option value="Advertising, Marketing, Promotions, Public Relations, and Sales Manager">-  Advertising, Marketing, Promotions, Public Relations, and Sales Manager</option>
      <option value="Operations Specialties Manager (e.g., IT or HR Manager)">-  Operations Specialties Manager (e.g., IT or HR Manager)</option>
      <option value="Construction Manager">-  Construction Manager</option>
      <option value="Engineering Manager">-  Engineering Manager</option>
      <option value="Accountant, Auditor">-  Accountant, Auditor</option>
      <option value=" Business Operations or Financial Specialist">-  Business Operations or Financial Specialist</option>
      <option value="Business Owner">-  Business Owner</option>
      <option value="Other Business, Executive, Management, Financial Occupation">-  Other Business, Executive, Management, Financial Occupation</option>
    </optgroup>
    <optgroup label="Architecture and Engineering Occupations:">
      <option value="Architect, Surveyor, or Cartographer">-  Architect, Surveyor, or Cartographer</option>
      <option value="Engineer">-  Engineer</option>
      <option value="Other Architecture and Engineering Occupation">-  Other Architecture and Engineering Occupation</option>
    </optgroup>
    <optgroup label="Education, Training, and Library Occupations:">
      <option value="Postsecondary Teacher">-  Postsecondary Teacher (e.g., College Professor)</option>
      <option value="Primary, Secondary, or Special Education School Teacher">-  Primary, Secondary, or Special Education School Teacher</option>
      <option value="Other Teacher or Instructor">-  Other Teacher or Instructor</option>
      <option value="Other Education, Training, and Library Occupation">-  Other Education, Training, and Library Occupation</option>
    </optgroup>
    <optgroup label="Other Professional Occupations:">
      <option value="Arts, Design, Entertainment, Sports, and Media Occupations">-  Arts, Design, Entertainment, Sports, and Media Occupations</option>
      <option value="Computer Specialist, Mathematical Science">-  Computer Specialist, Mathematical Science</option>
      <option value="Counselor, Social Worker, or Other Community and Social Service Specialist">-  Counselor, Social Worker, or Other Community and Social Service Specialist</option>
      <option value="Lawyer, Judge">-  Lawyer, Judge</option>
      <option value="Life Scientist (e.g., Animal, Food, Soil, or Biological Scientist, Zoologist)">-  Life Scientist (e.g., Animal, Food, Soil, or Biological Scientist, Zoologist)</option>
      <option value="Physical Scientist (e.g., Astronomer, Physicist, Chemist, Hydrologist)">-  Physical Scientist (e.g., Astronomer, Physicist, Chemist, Hydrologist)</option>
      <option value="Religious Worker (e.g., Clergy, Director of Religious Activities or Education)">-  Religious Worker (e.g., Clergy, Director of Religious Activities or Education)</option>
      <option value="Social Scientist and Related Worker">-  Social Scientist and Related Worker</option>
      <option value="Other Professional Occupation">-  Other Professional Occupation</option>
    </optgroup>
    <optgroup label="Office and Administrative Support Occupations:">
      <option value="Supervisor of Administrative Support Workers">-  Supervisor of Administrative Support Workers</option>
      <option value="Financial Clerk">-  Financial Clerk</option>
      <option value="Secretary or Administrative Assistant">-  Secretary or Administrative Assistant</option>
      <option value="Material Recording, Scheduling, and Dispatching Worker">-  Material Recording, Scheduling, and Dispatching Worker</option>
      <option value="47">-  Other Office and Administrative Support Occupation</option>
    </optgroup>
    <optgroup label="Services Occupations:">
      <option value="Protective Service (e.g., Fire Fighting, Police Officer, Correctional Officer)">-  Protective Service (e.g., Fire Fighting, Police Officer, Correctional Officer)</option>
      <option value="Chef or Head Cook<">-  Chef or Head Cook</option>
      <option value="Cook or Food Preparation Worker">-  Cook or Food Preparation Worker</option>
      <option value=" Food and Beverage Serving Worker (e.g., Bartender, Waiter, Waitress)">-  Food and Beverage Serving Worker (e.g., Bartender, Waiter, Waitress)</option>
      <option value="Building and Grounds Cleaning and Maintenance">-  Building and Grounds Cleaning and Maintenance</option>
      <option value="Personal Care and Service (e.g., Hairdresser, Flight Attendant, Concierge)">-  Personal Care and Service (e.g., Hairdresser, Flight Attendant, Concierge)</option>
      <option value="Sales Supervisor, Retail Sales">-  Sales Supervisor, Retail Sales</option>
      <option value="Retail Sales Worker">-  Retail Sales Worker</option>
      <option value="Insurance Sales Agent">-  Insurance Sales Agent</option>
      <option value="Sales Representative">-  Sales Representative</option>
      <option value="Real Estate Sales Agent">-  Real Estate Sales Agent</option>
      <option value="Other Services Occupation">-  Other Services Occupation</option>
    </optgroup>
    <optgroup label="Agriculture, Maintenance, Repair, and Skilled Crafts Occupations:">
      <option value="Construction and Extraction (e.g., Construction Laborer, Electrician)">-  Construction and Extraction (e.g., Construction Laborer, Electrician)</option>
      <option value="Farming, Fishing, and Forestry">-  Farming, Fishing, and Forestry</option>
      <option value="Installation, Maintenance, and Repair">-  Installation, Maintenance, and Repair</option>
      <option value=" Production Occupations">-  Production Occupations</option>
      <option value="Other Agriculture, Maintenance, Repair, and Skilled Crafts Occupation">-  Other Agriculture, Maintenance, Repair, and Skilled Crafts Occupation</option>
    </optgroup>
    <optgroup label="Transportation Occupations:">
      <option value="Aircraft Pilot or Flight Engineer">-  Aircraft Pilot or Flight Engineer</option>
      <option value="Motor Vehicle Operator (e.g., Ambulance, Bus, Taxi, or Truck Driver)">-  Motor Vehicle Operator (e.g., Ambulance, Bus, Taxi, or Truck Driver)</option>
      <option value="Other Transportation Occupation<">-  Other Transportation Occupation</option>
    </optgroup>
    <optgroup label="Other Occupations:">
      <option value="Military">-  Military</option>
      <option value="Homemaker">-  Homemaker</option>
      <option value="Other Occupation">-  Other Occupation</option>
      <option value="Don't Know">-  Don't Know</option>
      <option value="Not Applicable">-  Not Applicable</option>
    </optgroup>
  </select>

   </select>
                                            </div>
                                        </div>
                                    </div>


                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3 col-md-9 col-sm-9 col-xs-9">
                                                                    <label class="login2 pull-right pull-right-pro"><span class="basic-ds-n">Are You the Head of Family?</span></label>
                                                                </div>
                                                                <div class="col-lg-9 col-md-3 col-sm-3 col-xs-3">
                                                                    <div class="bt-df-checkbox">
                                                                         <p style="text-align: left;"> <input type="radio" name="Headof" id="Headof" value="Yes">Yes</p>
                                                                       <p style="text-align: left;"> <input type="radio"  name="Headof" id="Headof" value="No" checked="true">No</p>
             
                                                                  
             
                                                                </div>
                                                            </div>
                                                        </div> 


                                                      

                                                         <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro">Contact Number</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                   <input type="text" class="form-control"  value="" name="mobnumber" maxlength="10" pattern="[0-9]+" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                       <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro">Email</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <input type="text" class="form-control"  name="email" value="" />
                                                                </div>
                                                            </div>
                                                        </div>
                                               
                                                    
                                                        <div class="form-group-inner">
                                                            <div class="login-btn-inner">
                                                                <div class="row">
                                                                    <div class="col-lg-3"></div>
                                                                    <div class="col-lg-9">
                                                                        <div class="login-horizental cancel-wp pull-left">
                                                                            
                                                                            <button class="btn btn-sm btn-primary login-submit-cs" type="submit" name="add">Add Details</button>
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
