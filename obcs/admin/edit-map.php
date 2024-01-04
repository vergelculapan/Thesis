

<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
include_once 'header.php';
include 'locations_model.php';
//get_unconfirmed_locations();exit;
if (strlen($_SESSION['obcsaid']==0)) {
  header('location:logout.php');
  } else{



  ?>

<!doctype html>
<html class="no-js" lang="en">

<head>
  
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
<div id="map" style="width: 100%; height: 80vh;"></div>

<!------ Include the above in your HEAD tag ---------->
<script>
    var map;
    var marker;
    var infowindow;
    var red_icon =  'http://maps.google.com/mapfiles/ms/icons/red-dot.png' ;
    var purple_icon =  'http://maps.google.com/mapfiles/ms/icons/purple-dot.png' ;
    var locations = <?php get_all_locations() ?>;

    function initMap() {
        var france = {lat: 14.482847716636831, lng: 120.90299222205792};
        infowindow = new google.maps.InfoWindow();
        map = new google.maps.Map(document.getElementById('map'), {
            center: france,
            zoom: 20

        });


        var i ; var confirmed = 0;
        for (i = 0; i < locations.length; i++) {

            marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                map: map,
                icon :   locations[i][4] === '1' ?  red_icon  : purple_icon,
                html: document.getElementById('form')
            });

            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                    confirmed =  locations[i][4] === '1' ?  'checked'  :  0;
                    $("#confirmed").prop(confirmed,locations[i][4]);
                    $("#id").val(locations[i][0]);
                    $("#Firstname").val(locations[i][5]);
                    $("#Middlename").val(locations[i][6]);
                    $("#Lastname").val(locations[i][7]);
                    $("#HN").val(locations[i][8]);
                    $("#Employed").val(locations[i][9]);
                    $("#Unemployed").val(locations[i][10]);
                    $("Nh").val(locations[i][11]);
                    $("#Kids").val(locations[i][12]);
        
                    $("#form").show();
                    infowindow.setContent(marker.html);
                    infowindow.open(map, marker);
                }
            })(marker, i));
        }
    }

    function saveData() {
        var confirmed = document.getElementById('confirmed').checked ? 1 : 0;
        var Firstname = document.getElementById('manual_Firstname').value;
            var Middlename = document.getElementById('manual_Middlename').value;
            var Lastname = document.getElementById('manual_Lastname').value;
            var HN = document.getElementById('manual_HouseholdNo').value;
            var Employed = document.getElementById('manual_employed').value;
            var Unemployed = document.getElementById('manual_unemployed').value;
            var Nh = document.getElementById('manual_NH').value;
            var Kids = document.getElementById('manual_kids').value;
        var id = document.getElementById('id').value;
        var url = 'locations_model.php?confirm_location&id=' + id + '&confirmed=' + confirmed '&Firstname=' + Firstname + '&Middlename=' + Middlename + '&Lastname=' + Lastname + '&HN=' + HN + '&Employed=' + Employed + '&Unemployed=' + Unemployed + '&Nh=' + Nh + '&Kids=' + Kids;
        downloadUrl(url, function(data, responseCode) {
            if (responseCode === 200  && data.length > 1) {
                infowindow.close();
                window.location.reload(true);
            }else{
                infowindow.setContent("<div style='color: purple; font-size: 25px;'>Inserting Errors</div>");
            }
        });
    }
 

  var removeMarker = function(marker, markerId) {
            marker.setMap(null); // set markers setMap to null to remove it from map
            delete markers[markerId]; // delete marker instance from markers object
        };

    function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function() {
            if (request.readyState == 4) {
                callback(request.responseText, request.status);
            }
        };

        request.open('GET', url, true);
        request.send(null);
    }


</script>

<div style="display: none" id="form">
    <table class="map1">
       
             <tr>\
                               <td><a>=========================================</a></td></tr>
                                <td>Head of the Family:</td></tr>
                                <td><a>=========================================</a></td></tr>
                             <tr>
                                <td>Firstname:</td>
                                <td> <div class='form-group-inner'><div class='row'> <div class='col-lg-9'><input  id='manual_Firstname' type='text' class='form-control' name='Firstname' value='<?php  echo $row->Firstname;?>'  required='true'  /></div></div></div></td></tr>
                                   <td>Middlename:</td>
                              <td><div class='form-group-inner'><div class='row'> <div class='col-lg-9'><input  id='manual_Middlename' type='text' class='form-control' name='Middlename' value='<?php  echo $row->Middlename;?>' readonly='true' required='true'  /></div></div></div></td></tr>
                                 <td>Lastname:</td>
                                <td><div class='form-group-inner'><div class='row'> <div class='col-lg-9'><input  id='manual_Lastname' type='text' class='form-control' name='Lastname' value='<?php  echo $row->Lastname;?>'  required='true'  /></div></div></div></td></tr>
                                   <td><a>=========================================</a></td></tr>
                                  <td>Household Details:</td></tr>
                                  <td><a>=========================================</a></td></tr>
                             <tr>
                                    <td>Household Number:</td>
                             <td><div class='form-group-inner'><div class='row'> <div class='col-lg-9'><input  id='manual_HouseholdNo' type='text' class='form-control' name='Household' value='<?php  echo $row->Hhn;?>'  required='true'  /></div></div></div></td></tr>
      <tr>
                                   <td>Number of Household:</td>
                              <td><div class='form-group-inner'><div class='row'> <div class='col-lg-9'><input pattern='[0-9]+' id='manual_NH' type='text' class='form-control' name='Nh'   /></div></div></div></td></tr>
                            <tr>
                                   <td>Employed:</td>
                              <td><div class='form-group-inner'><div class='row'> <div class='col-lg-9'><input  pattern='[0-9]+' id='manual_employed' type='text' class='form-control' name='Employed'   /></div></div></div></td></tr>
                
                             <tr>
                 <td>Unemployed:</td>
                                <td><div class='form-group-inner'><div class='row'> <div class='col-lg-9'><input pattern='[0-9]+' id='manual_unemployed' type='text' class='form-control' name='Unemployed'   /></div></div></div></td></tr>


     <tr>
                   <td>0-12 Years old:</td>
                                <td><div class='form-group-inner'><div class='row'> <div class='col-lg-9'><input pattern='[0-9]+' id='manual_kids' type='text' class='form-control' name='Kids'   /></div></div></div></td></tr>

</tr>
        <tr><td></td><td><a href ='Editresidents1.php'><input type='button' value='Save' onclick='saveData()'/></td></tr></a>
        
    </table> 
</div>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC-dFHYjTqEVLndbN2gdvXsx09jfJHmNc8&callback=initMap"></script>
</div>
</div>

<?php include_once('includes/footer.php');?>
    <!-- Footer End-->
   
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





<?php
include_once 'footer.php';

?></html><?php }  ?>