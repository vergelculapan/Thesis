

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
      

    <script type="text/javascript"
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC-dFHYjTqEVLndbN2gdvXsx09jfJHmNc8&callback=initMap">
    </script>

     <div id="map" style="width: 100%; height: 80vh;"></div>
    <script>
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

  <?php 
$sql ="SELECT  Hhn from tblapplication where SStatus = 'Employed' ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totalEmployee=$query->rowCount();
?>  
        /**
         * Create new map
         */
        var infowindow;
        var map;
        var red_icon =  'http://maps.google.com/mapfiles/ms/icons/red-dot.png' ;
        var purple_icon =  'http://maps.google.com/mapfiles/ms/icons/purple-dot.png' ;
        var locations = <?php get_confirmed_locations() ?>;
        var myOptions = {
            zoom: 20,
            center: new google.maps.LatLng(14.482847716636831, 120.90299222205792),
            mapTypeId: 'satellite'
        };
        map = new google.maps.Map(document.getElementById('map'), myOptions);

        /**
         * Global marker object that holds all markers.
         * @type {Object.<string, google.maps.LatLng>}
         */
        var markers = {};

        /**
         * Concatenates given lat and lng with an underscore and returns it.
         * This id will be used as a key of marker to cache the marker in markers object.
         * @param {!number} lat Latitude.
         * @param {!number} lng Longitude.
         * @return {string} Concatenated marker id.
         */
        var getMarkerUniqueId= function(lat, lng) {
            return lat + '_' + lng;
        };

        /**
         * Creates an instance of google.maps.LatLng by given lat and lng values and returns it.
         * This function can be useful for getting new coordinates quickly.
         * @param {!number} lat Latitude.
         * @param {!number} lng Longitude.
         * @return {google.maps.LatLng} An instance of google.maps.LatLng object
         */
        var getLatLng = function(lat, lng) {
            return new google.maps.LatLng(lat, lng);
        };
                                                   
                                   
        /**
         * Binds click event to given map and invokes a callback that appends a new marker to clicked location.
         */
        var addMarker = google.maps.event.addListener(map, 'click', function(e) {
            var lat = e.latLng.lat(); // lat of clicked point
            var lng = e.latLng.lng(); // lng of clicked point
            var markerId = getMarkerUniqueId(lat, lng); // an that will be used to cache this marker in markers object.
            var marker = new google.maps.Marker({
                position: getLatLng(lat, lng),
                map: map,
                animation: google.maps.Animation.DROP,
                id: 'marker_' + markerId,
                html: "    <div id='info_"+markerId+"'>\n" +
                "        <table class=\"map1\">\n" +
                "            <tr>\n" +
                 "                <td><a>=========================================</a></td></tr>\n" +
                "                <td>Head of the Family:</td></tr>\n" +
                 "                <td><a>=========================================</a></td></tr>\n" +
                 "            <tr>\n" +
                "                <td>Firstname:</td>\n" +
                "                <td> <div class='form-group-inner'><div class='row'> <div class='col-lg-9'><input  id='manual_Firstname' type='text' class='form-control'  value='<?php  echo $row->FirstName;?>' readonly='true' required='true'  /></div></div></div></td></tr>\n" +
                   "                <td>Middlename:</td>\n" +
                "                <td><div class='form-group-inner'><div class='row'> <div class='col-lg-9'><input  id='manual_Middlename' type='text' class='form-control'  value='<?php  echo $row->Middlename;?>' readonly='true' required='true'  /></div></div></div></td></tr>\n" +
                 "                <td>Lastname:</td>\n" +
                "                <td><div class='form-group-inner'><div class='row'> <div class='col-lg-9'><input  id='manual_Lastname' type='text' class='form-control'  value='<?php  echo $row->LastName;?>' readonly='true' required='true'  /></div></div></div></td></tr>\n" +
                   "                <td><a>=========================================</a></td></tr>\n" +
                  "                <td>Household Details:</td></tr>\n" +
                  "                <td><a>=========================================</a></td></tr>\n" +
                 "            <tr>\n" +
                    "                <td>Household Number:</td>\n" +
                "                <td><div class='form-group-inner'><div class='row'> <div class='col-lg-9'><input  id='manual_HouseholdNo' type='text' class='form-control'  value='<?php  echo $row->Hhn;?>' readonly='true' required='true'  /></div></div></div></td></tr>\n" +
"            <tr>\n" +
                   "                <td>Number of Household:</td>\n" +
                "                <td><div class='form-group-inner'><div class='row'> <div class='col-lg-9'><input pattern='[0-9]+' id='manual_NH' type='text' class='form-control'    /></div></div></div></td></tr>\n" +
                "            <tr>\n" +
                   "                <td>Employed:</td>\n" +
                "                <td><div class='form-group-inner'><div class='row'> <div class='col-lg-9'><input value='<?php  echo $row->totalEmployee;?>' pattern='[0-9]+' id='manual_employed' type='text' class='form-control'   /></div></div></div></td></tr>\n" +
                
                 "            <tr>\n" +
   "                <td>Unemployed:</td>\n" +
                "                <td><div class='form-group-inner'><div class='row'> <div class='col-lg-9'><input pattern='[0-9]+' id='manual_unemployed' type='text' class='form-control'   /></div></div></div></td></tr>\n" +


"            <tr>\n" +
   "                <td>0-12 Years old:</td>\n" +
                "                <td><div class='form-group-inner'><div class='row'> <div class='col-lg-9'><input pattern='[0-9]+' id='manual_kids' type='text' class='form-control'   /></div></div></div></td></tr>\n" +


                "            <tr><td></td><td><a href='admin-map.php'><div class='form-group-inner'><div class='row'> <div class='col-lg-9'><input  type='button' value='Save' onclick='saveData("+lat+","+lng+")'  /></div></div></div></a></td></tr>\n" +
                "        </table>\n" +
                "    </div>"
                
            });
            markers[markerId] = marker; // cache marker in markers object
            bindMarkerEvents(marker); // bind right click event to marker
            bindMarkerinfo(marker); // bind infowindow with click event to marker
        });

        /**
         * Binds  click event to given marker and invokes a callback function that will remove the marker from map.
         * @param {!google.maps.Marker} marker A google.maps.Marker instance that the handler will binded.
         */
        var bindMarkerinfo = function(marker) {
            google.maps.event.addListener(marker, "click", function (point) {
                var markerId = getMarkerUniqueId(point.latLng.lat(), point.latLng.lng()); // get marker id by using clicked point's coordinate
                var marker = markers[markerId]; // find marker
                infowindow = new google.maps.InfoWindow();
                infowindow.setContent(marker.html);
                infowindow.open(map, marker);
                // removeMarker(marker, markerId); // remove it
            });
        };

        /**
         * Binds right click event to given marker and invokes a callback function that will remove the marker from map.
         * @param {!google.maps.Marker} marker A google.maps.Marker instance that the handler will binded.
         */
        var bindMarkerEvents = function(marker) {
            google.maps.event.addListener(marker, "rightclick", function (point) {
                var markerId = getMarkerUniqueId(point.latLng.lat(), point.latLng.lng()); // get marker id by using clicked point's coordinate
                var marker = markers[markerId]; // find marker
                removeMarker(marker, markerId); // remove it
            });
        };

        /**
         * Removes given marker from map.
         * @param {!google.maps.Marker} marker A google.maps.Marker instance that will be removed.
         * @param {!string} markerId Id of marker.
         */
        var removeMarker = function(marker, markerId) {
            marker.setMap(null); // set markers setMap to null to remove it from map
            delete markers[markerId]; // delete marker instance from markers object
        };

        /**
         * SAVE save marker from map.
         * @param lat  A latitude of marker.
         * @param lng A longitude of marker.
         */
        function saveData(lat,lng) {
            var Firstname = document.getElementById('manual_Firstname').value;
            var Middlename = document.getElementById('manual_Middlename').value;
            var Lastname = document.getElementById('manual_Lastname').value;
            var HN = document.getElementById('manual_HouseholdNo').value;
            var Employed = document.getElementById('manual_employed').value;
            var Unemployed = document.getElementById('manual_unemployed').value;
            var Nh = document.getElementById('manual_NH').value;
            var Kids = document.getElementById('manual_kids').value;
            var url = 'locations_model.php?add_location&lat=' + lat + '&lng=' + lng + '&Firstname=' + Firstname + '&Middlename=' + Middlename + '&Lastname=' + Lastname + '&HN=' + HN + '&Employed=' + Employed + '&Unemployed=' + Unemployed + '&Nh=' + Nh + '&Kids=' + Kids;
            downloadUrl(url, function(data, responseCode) {
                if (responseCode === 200  && data.length > 1) {
                    var markerId = getMarkerUniqueId(lat,lng); // get marker id by using clicked point's coordinate
                    var manual_marker = markers[markerId]; // find marker
                    manual_marker.setIcon(purple_icon);
                    infowindow.close();
                    infowindow.setContent("<div style=' color: purple; font-size: 25px;'> Waiting for confirm!!</div>");
                    infowindow.open(map, manual_marker);

                }else{
                    console.log(responseCode);
                    console.log(data);
                    infowindow.setContent("<div style='color: red; font-size: 25px;'>Inserting Errors</div>");
                }
            });
        }

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

<?php $cnt=$cnt+1;}} ?> 
    </script>

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