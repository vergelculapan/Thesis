 <?php
require("db.php");

// Gets data from URL parameters.
if(isset($_GET['add_location'])) {
    add_location();
}
if(isset($_GET['confirm_location'])) {
    confirm_location();
}



function add_location(){
    $con=mysqli_connect ("localhost", 'root', '','obcsdb');
    if (!$con) {
        die('Not connected : ' . mysqli_connect_error());
    }
    $lat = $_GET['lat'];
    $lng = $_GET['lng'];
    $description =$_GET['description'];
    $Firstname =$_GET['Firstname'];
    $Middlename =$_GET['Middlename'];
    $Lastname =$_GET['Lastname'];
    $HN =$_GET['HN'];
    $Nh =$_GET['Nh'];
    $Employed =$_GET['Employed'];
    $Unemployed =$_GET['Unemployed'];
    $Kids =$_GET['Kids'];
    // Inserts new row with place data.
    $query = sprintf("INSERT INTO locations  (id, lat, lng, description,Firstname,Middlename,Lastname,HN,Nh,Employed,Unemployed,Kids) VALUES (NULL, '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s');",
        mysqli_real_escape_string($con,$lat),
        mysqli_real_escape_string($con,$lng),
        mysqli_real_escape_string($con,$description),
    mysqli_real_escape_string($con,$Firstname),
mysqli_real_escape_string($con,$Middlename),
mysqli_real_escape_string($con,$Lastname),
mysqli_real_escape_string($con,$HN),
mysqli_real_escape_string($con,$Nh),
mysqli_real_escape_string($con,$Employed),
mysqli_real_escape_string($con,$Unemployed),
mysqli_real_escape_string($con,$Kids));

    if (mysqli_query($con,$query)) {
           echo '<script>alert("Resident Info Detail has been updated")</script>';
         echo "<script>window.location.href ='Editresidents1.php'</script>";
      
     } else {
        echo "Error: " . $query . "
" . mysqli_error($con);
     }
     mysqli_close($con);

}
function confirm_location(){
    $con=mysqli_connect ("localhost", 'root', '','obcsdb');
    if (!$con) {
        die('Not connected : ' . mysqli_connect_error());
    }
    $id =$_GET['id'];
    $confirmed =$_GET['confirmed'];
     $Firstname =$_GET['Firstname'];
      $Middlename =$_GET['Middlename'];
     $Lastname =$_GET['Lastname'];
      $HN =$_GET['HN'];
       $Nh =$_GET['Nh'];
        $Employed =$_GET['Employed'];
         $Unemployed =$_GET['Unemployed'];
          $Kids =$_GET['Kids'];

    // update location with confirm if admin confirm.
    $query = "update locations set location_status = $confirmed WHERE id = $id ";
    $result = mysqli_query($con,$query);
    echo "Inserted Successfully";
    if (!$result) {
        die('Invalid query: ' . mysqli_error($con));
    }
}
function get_confirmed_locations(){
    $con=mysqli_connect ("localhost", 'root', '','obcsdb');
    if (!$con) {
        die('Not connected : ' . mysqli_connect_error());
    }
    // update location with location_status if admin location_status.
    $sqldata = mysqli_query($con,"
select id ,lat,lng,description,location_status,Firstname,Middlename,Lastname,HN,Nh,Employed,Unemployed  as isconfirmed
from locations WHERE  location_status = 1
  ");

    $rows = array();

    while($r = mysqli_fetch_assoc($sqldata)) {
        $rows[] = $r;

    }

    $indexed = array_map('array_values', $rows);
    //  $array = array_filter($indexed);

    echo json_encode($indexed);
    if (!$rows) {
        return null;
    }
}
function get_all_locations(){
    $con=mysqli_connect ("localhost", 'root', '','obcsdb');
    if (!$con) {
        die('Not connected : ' . mysqli_connect_error());
    }
    // update location with location_status if admin location_status.
    $sqldata = mysqli_query($con,"
select id ,lat,lng,description,location_status,Firstname,Middlename,Lastname,HN,Nh,Employed,Unemployed as isconfirmed
from locations
  ");

    $rows = array();
    while($r = mysqli_fetch_assoc($sqldata)) {
        $rows[] = $r;

    }
  $indexed = array_map('array_values', $rows);
  //  $array = array_filter($indexed);

    echo json_encode($indexed);
    if (!$rows) {
        return null;
    }
}
function array_flatten($array) {
    if (!is_array($array)) {
        return FALSE;
    }
    $result = array();
    foreach ($array as $key => $value) {
        if (is_array($value)) {
            $result = array_merge($result, array_flatten($value));
        }
        else {
            $result[$key] = $value;
        }
    }
    return $result;
}

?>